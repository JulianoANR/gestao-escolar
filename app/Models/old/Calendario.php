<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Tabela de configuração destinada a salvar datas de marcação e dias não letivos
 * Pricipais Usos - AtividadeController, Avaliacaocontroller
 *
 * id 1 - Primeiro dia letivo - automaticamente é 1 º dia do 1º bimestre
 * id 2 - Ultimo dia letivo - automaticamente é ultimo dia do 4º bimestre
 * id 3 - Ultimo dia do 1º bimestre
 * id 4 - Primeiro dia do 2º bimestre
 * id 5 - Ultimo dia do 2º bimestre
 *     Aqui é o recesso escolar
 * id 6 - Primeiro dia do 3º bimestre
 * id 7 - Ultimo dia do 3º bimestre
 * id 8 - Primeiro dia do 4º bimestre
 * Adiante são feriados, marcados com letivo => 0
 *
 * @return void
 */
class Calendario extends Model
{
    use HasFactory;

    protected $table = 'calendario';

    protected $fillable = ['descricao', 'data', 'escopo', 'letivo'];

    //Marcações de calendario
    public function getPrimeiroDiaLetivoAttribute()
    {
        $data = $this::findOrFail(1);

        return $data ? $data->data : date('Y').'-01-01';
    }

    public function getUltimoDiaLetivoAttribute()
    {
        $data = $this::findOrFail(2);

        return $data ? $data->data : date('Y').'-12-31';
    }

    public function getUltimoDiaBimestreUmAttribute()
    {
        return $this::findOrFail(3)->data;
    }

    public function getPrimeiroDiaBimestreDoisAttribute()
    {
        return $this::findOrFail(4)->data;
    }

    public function getUltimoDiaBimestreDoisAttribute()
    {
        return $this::findOrFail(5)->data;
    }

    public function getPrimeiroDiaBimestreTresAttribute()
    {
        return $this::findOrFail(6)->data;
    }

    public function getUltimoDiaBimestreTresAttribute()
    {
        return $this::findOrFail(7)->data;
    }

    public function getPrimeiroDiaBimestreQuatroAttribute()
    {
        return $this::findOrFail(8)->data;
    }

    public function getDiasNaoLetivosAttribute()
    {
        return $this::where('letivo', '!=', 1)->get();
    }

    public function getValidateDataAtividadeAttribute()
    {
        // code...
    }

    //Logica de datas
    public function getBimestreAttribute($data)
    {
        return $data;
        if ($data >= $this->primeiro_dia_letivo && $data <= $this->ultimo_dia_bimestre_um) {
            return true;
        } else {
            return false;
        }
    }
}
