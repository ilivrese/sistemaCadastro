# sistemaCadastro
system for booking places in a local lan-house. Multiple purposes


## Instalação e configuração
#### Versão WAMP
Nesta versão o sistema de agendamento foi desenvolvido com tecnologia para web: PHP + MySQL

Necessaŕio usar o Xampp (windows ou linux) :: https://www.apachefriends.org/pt_br/download.html
Com o Xampp instalado, é necessário acertar o fusohorário:
Localizar o php.ini e configurar: date.time = America/Sao_Paulo

A pasta 'ilivre', deste repositório, deve ser colocada dentro da pasta 'htdocs', que está presente nos diretérios instalados do Xampp (no windows, fica em c:)

Para iniciar o sistema, inicie o Xampp-controller, inicie o Apache e MySQL. para acessar, use o navegador em: localhost/ilivre


#### Versão APP
Esta versão (está em desenvolvimento) tem o objetivo de tornar o sistema de agendamento um aplicativo local desktop, self-contained, eliminando complexidades de manutenção, incompatibilidade, e erros. Bem como uma tentativa de tornar o software mais intuitivo.

Depende de QT
SQLite 
	:: development : usado o SQLite database browser no ubuntu
	:: production  : 




## Notas de desenvolvimento

### Primeira etapa: 
    Cadastramento de usuários, busca, e agendamento de acesso.
	
	####referencias: 
	https://www.youtube.com/watch?v=9B26MQX2O70

	http://www.regexr.com/
	http://regexone.com/lesson/1
	http://www.sitepoint.com/web-foundations/using-regular-expressions-to-check-string-length/

	####tasks
	connecting : OK
	insert into usuarios values(1, "internet livre", "YYYY-MM-DD HH:MM:SS.SSS", "M" ...)
