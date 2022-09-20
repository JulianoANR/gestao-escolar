<?php

namespace App\configs;

class Enums
{
    public static function pessoa()
    {
        return (object) [
            'Pessoa' => (object) [
                'User' => (object) [
                    'Cargo' => (object) [
                        'Administrador' => 1,
                        'Gestor' => 2,
                        'Administrativo' => 3,
                        'Supervisor' => 4,
                        'Seduc' => 5,  //Cargo destinado aos funcionarios da seduc, para visualização de notificações
                    ],
                    'Status' => (object) [ //Atualização ainda não implementada
                        'Ativo' => 1,
                        'Inativo' => 0,
                    ],
                ],
                'Aluno' => (object) [
                    'Situacao' => (object) [
                        'Matriculado' => 1,
                        'Transferido' => 2,
                        'Remanejado' => 3,
                        'Reclassificado' => 4,
                        'Falecido' => 5,
                        'NaoComparecimento' => 6,
                    ],
                ],
                'Geral' => (object) [
                    'Sexo' => (object) [
                        'NaoInformado' => 1,
                        'Masculino' => 2,
                        'Feminino' => 3,
                    ],
                    'TipoSangue' => (object) [
                        'A-' => 1,
                        'B+' => 2, 'B-' => 3,
                        'AB+' => 4, 'AB-' => 5,
                        'O+' => 6, 'O-' => 7,
                    ],
                    'Religiao' => (object) [
                        'Catolicismo' => 1,
                        'Protestantismo' => 2,
                        'Ortodoxismo' => 3,
                        'Budismo' => 4,
                        'Hinduismo' => 5,
                        'Espiritismo' => 6,
                        'Judaismo' => 7,
                        'AfroBrasileiras' => 8,
                        'NaoReligioso' => 9,
                        'Outro' => 10,
                    ],
                    'Deficiencia' => (object) [
                        'Multipla' => 1,
                        'Cegueira' => 2,
                        'BaixaVisao' => 3,
                        'Surdez' => (object) [
                            'SeveraProfunda' => 4,
                            'LeveModerada' => 5,
                        ],
                        'SurdezCegueira' => 6,
                        'Fisica' => (object) [
                            'ParalisiaCerebral' => 7,
                            'Cadeirante' => 8,
                            'Outros' => 9,
                        ],
                        'Sindrome' => (object) [
                            'Down' => 10,
                            'Asperger' => 13,
                            'Rett' => 14,
                        ],
                        'Intelectual' => 11,
                        'Autismo' => 12,
                        'TranstornoDesintegrativo' => 15,
                        'Surperdotacao' => 16,
                    ],
                ],
            ],
        ];
    }

    public static function nivelEnsino()
    {
        return (object) [
            'EducInfantil' => 1,
            'Fundamental1' => 2,
            'Fundamental2' => 3,
            'Eja' => 4,
        ];
    }

    public static function atividade()
    {
        return (object) [
            'Bimestre' => (object) [
                'Primeiro' => 1,
                'Segundo' => 2,
                'Terceiro' => 3,
                'Quarto' => 4,
            ],
        ];
    }

    public static function disciplina()
    {
        return (object) [
            'LinguaPortuguesa' => (object) [
                'Id' => 1,
                'ShortName' => 'PT',
                'Cod' => '',
            ],
            'Matematica' => (object) [
                'Id' => 2,
                'ShortName' => 'MAT',
                'Cod' => '',
            ],
            'Historia' => (object) [
                'Id' => 3,
                'ShortName' => 'HIS',
                'Cod' => '',
            ],
            'Geografia' => (object) [
                'Id' => 4,
                'ShortName' => 'GEO',
                'Cod' => '',
            ],
            'Ciencia' => (object) [
                'Id' => 5,
                'ShortName' => 'CIE',
                'Cod' => '',
            ],
            'Arte' => (object) [
                'Id' => 6,
                'ShortName' => 'ART',
                'Cod' => '',
            ],
            'Ingles' => (object) [
                'Id' => 7,
                'ShortName' => 'ING',
                'Cod' => '',
            ],
            'Empreendedorismo' => (object) [
                'Id' => 8,
                'ShortName' => 'EMP',
                'Cod' => '',
            ],
            'EdFisica' => (object) [
                'Id' => 9,
                'ShortName' => 'EDFIS',
                'Cod' => '',
            ],
            'Polivalente' => (object) [
                'Id' => 10,
                'ShortName' => 'POL',
                'Cod' => '',
            ],
            'Infantil' => (object) [
                'Id' => 11,
                'ShortName' => 'INF',
                'Cod' => '',
            ],
        ];
    }

    public static function status()
    {
        // TO DO Juliano
        return (object) [
            'Success' => 200,
            'Error' => (object) [
                'Server' => 500,
            ],
            'NotFound' => 404,
            'Unathorized' => 403,
        ];
    }

    public static function habilidades()
    {
        return (object) [
            'Estadual' => 1,
            'Municipal' => 2,
        ];
    }

    public static function disciplinas()
    {
        return (object) [
            'EducInfantil' => 1,
            'Fundamental1' => 2,
            'Fundamental2' => 3,
            'Eja' => 4,
        ];
    }

    public static function gestor()
    {
        return (object) [
            'diretor' => 1,
            'vice_diretor' => 2,
            'coordenador' => 3,
            'administrativo' => 4,
        ];
    }

    public static function configs()
    {
        return (object) [
            'BimAtual' => 8,

        ];
    }
}
