# **CSI477-2020-01 - Remoto - Trabalho Final - Resultados**
## *Aluna(o): Paula Fernanda Barros de Souza*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

 A proposta para o desenvolvimento do sistema foi pensada para utilização de fotógrafos, onde é possível receber mensagens de possíveis clientes para a realização de orçamentos; uma página para exibir o portfólio; uma loja para venda de ensaios, workshops/mentorias e outros produtos que o fotógrafo quiser inserir.
 Há uma área administrativa, aonde os fotógrafos podem inserir os produtos na loja; podem visualizar relatórios dos contatos recebidos através do formulário de contato e o relatório de pedidos que foram realizados por clientes.

### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->
Na área administrativa é possível realizar a visualização do relatórios de pedidos, com os dados do cliente e o produto/serviço adquirido; visualização do relatório de contato com o nome, contato e mensagem enviados pelo cliente;
Inserção, Edição, Exclusão de produtos;
Na área comum a todos os usuário é possível visualizar o portfólio, enviar mensagens via formulário de contato e adquirir produtos na loja, sendo que para efetuar a compra é necessário possuir cadastro.

  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
Inicialmente estava definido uma área restrita para o cliente, onde ele poderia acompanhar e checar as fotos do ensaio realizado, porém, não foi implementado.

### 3. Outras funcionalidades implementadas
<!-- Descrever as funcionalidades implementas além daquelas que foram previstas, caso se aplique.  -->
  A princípio não seria considerado a finalização de compra dos ensaios, workshops/mentorias, etc. Porém, foi implementado e na área administrativa é possível acompanhar os pedidos que foram efetuados.


### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
  Como as rotas foram agrupadas por categorias (clientes, portfólios, produtos, pedidos) e não seguiam a convenção padrão do Laravel, tive dificuldades ao implementar o CRUD, pois para que seja possível realizar a edição, exclusão do produto, por exemplo, tive que personalizar as rotas de exclusão e edição para que funcionasse (ainda assim, a de edição não está funcional);
  Ao realizar logout é redirecionado para a página localhost:8000 e o ideal seria redirecionar para a página localhost:8000/inicio, foram realizadas algumas tentativas para solucionar o problema, mas não obtive sucesso.

### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
Para a execução do projeto, acesse a pasta "Projeto", dentro dela há uma pasta com o nome "projetofinal", abra o terminal e estando na raiz do projeto ("projetofinal") execute o "php artisan serve". Em seguida, acesse o navegador de sua preferência e digite "localhost:8000/inicio" para abrir a página inicial da aplicação.

Aplicativos e versões utilizados:
Visual Studio Code - Versão 1.55.2 (user setup);
Google Chrome - Versão 89.0.4389.128(Versão oficial) 64 bits;
Laravel Framework 8.37.0;
Banco de Dados: sqlite.


### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->
Laravel Installation. Disponível em: <https://laravel.com/docs/8.x>
