# Avaliação Desenvolvimento com Framework
### Matéria com foco em Desenvolvimento no Framework Laravel

O desafio deste projeto foi o seguinte:

Para essa atividade vamos criar um sistema de cadastro de Participantes para um congresso de TI. Esse sistema se resumirá em apenas 2 telas:

- Tela 1: Cadastro de Participantes
- Tela 2: Listagem de Participantes cadastrados

### Atividades a serem desenvolvidas:

- [x]  Criar um novo projeto Laravel + Bootstrap
- [x]  Criar um novo arquivo de migração para a criação de uma tabela chamada Participantes, com os campos:
    - [x]  id
    - [x]  nome (Varchar 100)
    - [x]  sobrenome (Varchar 100)
    - [x]  data_nascimento (Date)
    - [x]  endereco (Varchar 255) NULL
    - [x]  email (Varchar 100) UNIQUE
    - [x]  created_at (Timestamp)
    - [x]  updated_at (Timestamp)
- [x]  Criar as seguintes rotas:
    - [x]  **cadastro/participantes**, do tipo GET e que aponta para ParticipantesController → novo
    - [x]  **cadastro/participantes**, do tipo POST e que aponta para ParticipantesController → gravar
    - [x]  **painel/inscritos**, do tipo GET e que aponta para ParticipantesController → listagem

Obs.:

- [x]  Após cadastrar um Participante, a tela deverá exibir uma mensagem de sucesso (Flash Message).
- [x]  Deve haver uma validação que impeça cadastrar um participante se:
    - [x]  Nome, Sobrenome, Data de nascimento ou e-mail não forem informados
    - [x]  E-mail informado não for um e-mail válido
    - [x]  E-mail informado já encontra-se cadastrado no banco de dados
    - [x]  O nome ou sobrenome tiver menos de 3 caracteres
    - [x]  A data de nascimento informada não for uma data válida
- [x]  Caso haja um erro de validação, a tela deverá exibir uma mensagem de erro (Flash Message) informando quais problema ocorreram. Essa mensagem devem ser customizadas conforme visto na última aula.
- [x]  Deve haver na tela de cadastro um botão com um link para a tela de listagem de participantes cadastrados
- [x]  Deve haver na tela de listagem de participantes um botão com um link para a tela de cadastro.
- [x]  Deve ser criado uma master page (template) que será extendida pelas views internas de listagem e cadastro.

Como bônus, foi criado uma homepage simples, para que ao rodar o server, seja capaz de abrir a aplicação diretamente na raiz.
