# Bemol Omni
Aplicação web apresentando a feature de criação de contas de usuário 

## Setup da aplicação
### Requisitos de sistema
  Para que a aplicação web funcione com êxito, é necessário que o aplicativo **XAMPP Control Panel** esteja previamente instalado, 
juntamente com o **MySql Workbench**, pois iremos precisar inicializar os serviços de Servidor Apache e MySQL embutidos no XAMPP.
  
  Abaixo os links para instalar as aplicações:
 
  * [XAMPP Control Panel:](https://www.apachefriends.org/pt_br/download.html)
  * [MySQL Workbench:](https://dev.mysql.com/downloads/workbench/)

### Configurando o ambiente

  Com os aplicativos instalados, execute o XAMPP e inicie os serviços de MySQL. Abra o MySQL Workbench e configure uma conexão 
com as seguintes configurações:
  
  * Connection Name - (Coloque o nome de sua preferência);
  * Hostname: 127.0.0.1 ;
  * Port: 3306 (Verifique no XAMPP se essa porta é a mesma que aparece na coluna "Port(s)");
  * Username: root;
  * Password: (Não informe esse campo)
  
  Salve a conexão e conecte-se a ela. Feito isso, abra o Windows Explorer e navegue até o diretório em que está instalado seu 
Webserver (C:\xampp), e clone o projeto na pasta htdocs. 

Na raiz do projeto existe um arquivo chamado "database_script.sql", abra esse arquivo pelo Workbench (File> Open SQL script..) 
e após isso o exetute para criar a base de dados da aplicação

Após isso ligue o serviço de Servidor Apache do XAMPP, abra uma nova aba no seu navegador e digite 'http://localhost/BemolOmni/' na barra de endereço, ou clique no link abaixo: 

<a href="http://localhost/BemolOmni/" target="_blank">http://localhost/BemolOmni/</a>

E pronto! o projeto deve executar normalmente no seu navegador 
