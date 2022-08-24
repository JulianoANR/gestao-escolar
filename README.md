## Sobre o Sistema

Sistema desenvolvido pelo setor de informatica educativa da secretaria de educação de Caraguatatuba - 2022. 
Executa a gestão das atividades escolares e tarefas administrativas nas escolas municipais. 

## Instalação e Setup

- Clone o projeto: git clone https://github.com/JulianoANR/gestao-escolar.git
- Entre no projeto: cd gestao-escolar
- Crie a .env
- composer install
- php artisan key:generate
- npm install
- php artisan migrate --seed

## Funcionamento e Parametros

Identificador / Cargo / Escopo :

- (1) Administrador  (Opera em qualquer unidade, sala, ou disciplina)
- (2) Gestor         (Opera em uma unica unidade, em qualquer sala ou disciplina)
- (3) Administrativo (Opera em uma unica unidade, em qualquer sala ou disciplina)
- (4) Supervisor     (Opera em qualquer unidade, sala, ou disciplina restringido apenas a leitura)
- (5) Professor      (Opera apenas nas unidades, salas e disciplinas que ele foi vinculado)

Periodos:

- Bimestral (Divisão de período comum das unidades escolares, com excessão do EJA)
- Semestral (Divisão de período para EJA e registros gráficos gerais)
- Anual (Especificação do ano para cada registro) 

## Funcionalidades do Sistema (Função - Cargos com permissão de execução)

### Legendas de permissões e observações
- (Auth - Próprio usuário logado)
- (1 a 5 - Cargos alocados a permissão)
- (Livre - Sem restrção de operação)
- (Sed - Funções espelhadas juntamente ao Sed)


Usuarios:

- Criar (1)
- Inativar (1)
- Reativar (1)
- Recuperar Senha (Auth)
- Editar (Auth)
- Listar log de interações do usuario (Auth - 5, Todos - 1,2,3,4)
- Vincular professor a sala/disciplina (1,2,3)


Alunos:

- Criar (1,2,3) (Sed)
- Visualizar (Livre)
- Editar / Alterar situação (1,2,3) (Sed)
- Excluir (1,2,3) (Sed)
- Remanejar (1,2,3) (Sed)
- Transferir (1,2,3) (Sed)
- Gerar boletim (Livre)
- Atribuir presença/falta (1,2,3,5)
- Atribuir nota em avaliações (1,2,3,5)
- Aprovar/reprovar anualmente (1,2,3) (Sed)
- Lançar conceito final - Sintese bimestral (1,5)
- Compensar faltas (1,2,3,5)
- Justificar faltas (1,2,3)
- Visualizar faltas justificadas (Livre)
- Avaliação processual (1,2,3,5 - Infantil)
- Avaliação sondagem - escrita e desenho (1,2,3,5 - Infantil (Fase I e II))
- Listar por sala/escola/segmento/disciplina (Livre)
- Gerar frequencia (Livre)


Salas:

- Criar (1) (Sed)
- Apagar (1) (Sed)
- Editar (1,2,3) (Sed)
- Listar salas por escola (Livre)
- Listar salas de um professor distinguindo por disciplina (Livre)


Escolas:

- Criar (1) (Sed)
- Apagar (1) (Sed)
- Editar (1) (Sed)
- Listar (Livre)


Atividades:

- Criar e elencar curriculos trabalhados (1,5)
- Apagar (1,5)
- Editar (1,5)
- Listar por sala/alunos/escola/disciplina (Livre)
- Avaliar presença ou falta (1,2,3,5)


Avaliações (Provas):

- Criar e elencar curriculos trabalhados e o tipo de prova (1,5)
- Apagar (1,5)
- Editar (1,5)
- Listar por sala/alunos/escola/disciplina (Livre)
- Avaliar nota do aluno (1,2,3,5)


Declarações e documentos emitidos na escola:

- Declaração de matricula (1,2,3)
- Declaração de transferência (1,2,3)
- Declaração de vaga (1,2,3)
- Declaração de indisponibilidade de vaga (1,2,3)
- Declaração de comparecimento (1,2,3)
- Declaração de conclusão (1,2,3)
- Justificativa de faltas (1,2,3)


Configurações:

- Configurar datas de cada periodo para limitações de lançamentos (1)
- Configurar datas de dias não letivos para limitações de lançamentos (1)
- Permitir interações com cada bimestre / semestre individualmente (1)
- Permitir alteração de número de chamada (1)


Relatório:
(Doc) - Acompanha versão do relatório impresso para o painel administrativo.

- Frequencia dos alunos por sala/escola/disciplina/periodo (Doc) (Livre)
- Media de notas em avaliações dos alunos por sala/escola/disciplina/periodo (Doc) (Livre)
- Media de notas finais dos alunos por Ssla/escola/disciplina/periodo (Doc) (Livre)
- Relatorio de situações finais em conselho de classe dos alunos por sala/escola/disciplina/periodo (Doc) (Livre)
- Uso de curriculos em avaliações e atividades por sala/escola/disciplina/periodo (Livre)
