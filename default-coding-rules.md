
# Regras de Padronização do Sistema

## Regras de Pasta

**App/ Primeira letra em Maiúsculo**

* Requests
* Services
* Actions  

**resources/ Tudo em minusculo**

* components
* views
* auth
* aluno
* user

## Regras de Arquivo

### Arquivos .php (Services, Controllers, Actions, etc)

**Nomes desses Documentos devem possuir uma indicação de qual é sua função:**

* RegisterUserController
* LoginUserController
* GetDataAlunoService
* UpdateAlunosDataService

**Como mostrado acima, devem seguir uma formação de camelCase, entretanto com a primeira letra em Maiúsculo.**

* ExemploDeFormação
* UserController
* AlunoController
* CadastroDeAlunoService

### Arquivos .blade.php (Views, Components) 

**Tudo em minusculo separado por hífen "-"**

* sondagem-aluno
* sintese-bimestral
* confirmar-login
* recuperar-senha

## Regras de Código

### Nome de Variaveis:

**camelCase**

* nomeDaVariavel
* exemploNome
* dataMatricula

### Nome de Funções

**camelCase**

* setFaltasAluno 
* getPorcentagemDeFaltas


### Chaves de Enum

### Constantes

**MAIÚSCULO**

* EXEMPLO

## Padrões de Commit

### Versionar por Versões

**Regras de título**

* **feat-** Commits do tipo feat indicam que seu trecho de código está incluindo um novo recurso (se relaciona com o MINOR do versionamento semântico).

* **fix** - Commits do tipo fix indicam que seu trecho de código commitado está solucionando um problema (bug fix), (se relaciona com o PATCH do versionamento semântico).

* **docs** - Commits do tipo docs indicam que houveram mudanças na documentação, como por exemplo no Readme do seu repositório. (Não inclui alterações em código).

* **test** - Commits do tipo test são utilizados quando são realizadas alterações em testes, seja criando, alterando ou excluindo testes unitários. (Não inclui alterações em código)

* **build** - Commits do tipo build são utilizados quando são realizadas modificações em arquivos de build e dependências.

* **perf** - Commits do tipo perf servem para identificar quaisquer alterações de código que estejam relacionadas a performance.

* **style** - Commits do tipo style indicam que houveram alterações referentes a formatações de código, semicolons, trailing spaces, lint... (Não inclui alterações em código).

* **refactor** - Commits do tipo refactor referem-se a mudanças devido a refatorações que não alterem sua funcionalidade, como por exemplo, uma alteração no formato como é processada determinada parte da tela, mas que manteve a mesma funcionalidade, ou melhorias de performance devido a um code review.

* **chore** - Commits do tipo chore indicam atualizações de tarefas de build, configurações de administrador, pacotes... como por exemplo adicionar um pacote no gitignore. (Não inclui alterações em código)

* **ci** - Commits do tipo ci indicam mudanças relacionadas a integração contínua (continuous integration).

### Emojis

**Link para repositorio no GitHub com armazenamento de Emojis**

* <https://github.com/iuricode/padroes-de-commits>

Acessibilidade					♿ :wheelchair:	
Adicionando um teste			✅ :white_check_mark:	test
Adicionando uma dependência		➕ :heavy_plus_sign:	build
Alterações de revisão de código	👌 :ok_hand:	style
Animações e transições			💫 :dizzy:	
Bugfix							🐛 :bug:	fix
Comentários						💡 :bulb:	docs
Commit inicial					🎉 :tada:	init
Configuração					🔧 :wrench:	chore
Deploy							🚀 :rocket:	
Documentação					📚 :books:	docs
Em progresso					🚧 :construction:	
Estilização de interface		💄 :lipstick:	feat
Infraestrutura					🧱 :bricks:	ci
Lista de ideias (tasks)			🔜 :soon:	
Mover/Renomear					🚚 :truck:	chore
Novo recurso					✨ :sparkles:	feat
Package.json em JS				📦 :package:	build
Performance						⚡ :zap:	perf
Refatoração						♻️ :recycle:	refactor
Removendo um arquivo			🔥 :fire:	
Removendo uma dependência		➖ :heavy_minus_sign:	build
Responsividade					📱 :iphone:	
Revertendo mudanças				💥 :boom:	fix
Segurança						🔒️ :lock:	
SEO								🔍️ :mag:	
Tag de versão					🔖 :bookmark:	
Teste de aprovação				✔️ :heavy_check_mark:	test
Testes							🧪 :test_tube:	test
Texto							📝 :pencil:	
Tipagem							🏷️ :label:	
Tratamento de erros				🥅 :goal_net: