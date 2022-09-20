<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'rg', 'matricula', 'cargo', 'escola_sede_id', 'email', 'password',
        'observacao', 'status', 'cpf', 'mudou_senha', 'senha', 'data_nascimento'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPassword($token));
    }

    public function escola() {
        return $this->belongsTo(Escola::class, 'escola_sede_id');
    }

    public function escolas() {
        return $this->belongsToMany(Escola::class);
    }

    // pertence a muitas salas
    public function salas() {
        //return $this->belongsToMany(Sala::class)->withTimestamps();
        return $this->belongsToMany(Sala::class)->withPivot('escola_id', 'disciplina_id', 'tipo_id', 'deleted_at')->withTimestamps();;
    }

    public function salasUser() {
        return $this->hasMany(SalaUser::class, 'user_id', 'id');
    }

    public function atividades() {
        return $this->hasMany(Atividade::class, 'id_professor', 'id');
    }

    public function alunos() {
        return $this->hasMany(Aluno::class);
    }

    public function disciplinas() {
        return $this->belongsToMany(Disciplina::class)->withTimestamps();
    }

    public function compensacoes() {
        return $this->hasMany(Compensacao::class);
    }

    public function tipos() {
        return $this->belongsToMany(Tipo::class)->withTimestamps();
    }

    // Accessors
    public function getDisciplinasListaAttribute() {
        $disciplinas = $this->disciplinas;
        if($this->disciplinas->contains('id', 10)) {
            $polivalente = Disciplina::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 10])->get();
            $others      = $this->disciplinas()->whereNotIn('id', $polivalente->pluck('id'))->get();
            $disciplinas = $polivalente->merge($others);
        }
        foreach($disciplinas as $disciplina) {
            if($disciplina->disciplina == "Língua_Portuguesa") $disciplina->disciplina = "Língua Portuguesa";
            elseif($disciplina->disciplina == "Ed_Física") $disciplina->disciplina = "Ed. Física";
        }
        return $disciplinas->unique('id');
    }

    public function getFormatedNameAttribute() {
        return ucwords(mb_strtolower($this->attributes['name'], 'UTF-8'));
    }

    public function getFirstNameAttribute() {
        return explode(" ", $this->formated_name)[0];
    }

    public function getAbbreviateNameAttribute() {
        $abbreviate = "";
          foreach(explode(" ", $this->formated_name) as $name) {
              $abbreviate .= $name[0];
          }
       return $abbreviate;
    }

    public function getSalaUserInactiveAttribute() {
        return $this->salas()->wherePivot('deleted_at', '<>', null);
    }

    public function getSalaUserActiveAttribute() {
        return $this->salas()->wherePivot('deleted_at', '=', null);
    }

    public function getFormatedSalasAttribute() {
        $salas = $this->salas;
        foreach($salas as $sala)  {
            if($sala->serie == "bercario_1") $sala->serie = "Berçário 1";
            elseif($sala->serie == "bercario_2") $sala->serie = "Berçário 2";
            elseif($sala->serie == "fase_1") $sala->serie = "Fase 1";
            elseif($sala->serie == "fase_2") $sala->serie = "Fase 2";
            elseif($sala->serie == "maternal_1") $sala->serie = "Maternal 1";
            elseif($sala->serie == "maternal_2") $sala->serie = "Maternal 2";
            elseif($sala->serie == "eja1_t1") $sala->serie = "Eja1 - T1";
            elseif($sala->serie == "eja1_t2") $sala->serie = "Eja1 - T2";
            elseif($sala->serie == "eja1_t3") $sala->serie = "Eja1 - T3";
            elseif($sala->serie == "eja1_t4") $sala->serie = "Eja1 - T4";
            elseif($sala->serie == "eja2_t1") $sala->serie = "Eja2 - T1";
            elseif($sala->serie == "eja2_t2") $sala->serie = "Eja2 - T2";
            elseif($sala->serie == "eja2_t3") $sala->serie = "Eja2 - T3";
            elseif($sala->serie == "eja2_t4") $sala->serie = "Eja2 - T4";
            if($sala->nivel_ensino == "educ_infantil") $sala->nivel_ensino = "Educação Infantil";
            elseif($sala->nivel_ensino == "fundamental_1") $sala->nivel_ensino = "Fundamental 1";
            elseif($sala->nivel_ensino == "fundamental_2") $sala->nivel_ensino = "Fundamental 2";
            elseif($sala->nivel_ensino == "eja") $sala->nivel_ensino = "Educação de Jovens e Adultos";
        }
        return $salas;
    }

    public function salas_formatadas($salas) {
        foreach($salas as $sala)  {
            if($sala->serie == "bercario_1") $sala->serie = "Berçário 1";
            elseif($sala->serie == "bercario_2") $sala->serie = "Berçário 2";
            elseif($sala->serie == "fase_1") $sala->serie = "Fase 1";
            elseif($sala->serie == "fase_2") $sala->serie = "Fase 2";
            elseif($sala->serie == "maternal_1") $sala->serie = "Maternal 1";
            elseif($sala->serie == "maternal_2") $sala->serie = "Maternal 2";
            elseif($sala->serie == "eja1_t1") $sala->serie = "Eja1 - T1";
            elseif($sala->serie == "eja1_t2") $sala->serie = "Eja1 - T2";
            elseif($sala->serie == "eja1_t3") $sala->serie = "Eja1 - T3";
            elseif($sala->serie == "eja1_t4") $sala->serie = "Eja1 - T4";
            elseif($sala->serie == "eja2_t1") $sala->serie = "Eja2 - T1";
            elseif($sala->serie == "eja2_t2") $sala->serie = "Eja2 - T2";
            elseif($sala->serie == "eja2_t3") $sala->serie = "Eja2 - T3";
            elseif($sala->serie == "eja2_t4") $sala->serie = "Eja2 - T4";
            if($sala->nivel_ensino == "educ_infantil") $sala->nivel_ensino = "Educação Infantil";
            elseif($sala->nivel_ensino == "fundamental_1") $sala->nivel_ensino = "Fundamental 1";
            elseif($sala->nivel_ensino == "fundamental_2") $sala->nivel_ensino = "Fundamental 2";
            elseif($sala->nivel_ensino == "eja") $sala->nivel_ensino = "Educação de Jovens e Adultos";
        }
        return $salas;
    }

    // Mutators
    // public function setResetSenhaAttribute() {
    //     $this->attributes['password'] = Hash::make('Atividade1!');
    // }
}
