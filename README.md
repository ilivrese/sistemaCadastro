# sistemaCadastro
system for booking places in a local lan-house. Multiple purposes


## Instalação e configuração
#### Versão WAMP
Nesta versão o sistema de agendamento foi desenvolvido com tecnologia para web: PHP + MySQL

Necessário usar o Xampp (windows ou linux) :: https://www.apachefriends.org/pt_br/download.html
Com o Xampp instalado, é necessário acertar o fusohorário:
Localizar o php.ini e configurar: date.time = America/Sao_Paulo

A pasta 'ilivre', deste repositório, deve ser colocada dentro da pasta 'htdocs', que está presente nos diretérios instalados do Xampp (no windows, fica em c:)

Para iniciar o sistema, inicie o Xampp-controller, inicie o Apache e MySQL. para acessar, use o navegador em: localhost/ilivre

##### Tópicos para manutenção
O sistema possui algumas instabilidades. Problemas e soluções conhecidas, listadas abaixo:
 - bug 1: No processo de agendamento, não aparece a lista de horários. Ou, a lista de horários no rodapé da tela, a parece 0(zero) ao lado de todos os horários.
 	Esse problema ocorre porque os dados de horários e micros do dia, não foram salvos adequadamente no DB. (Isso é um erro no sistema)
 	Resolução A: Ir em Ferramentas Administrativas > Consertar Planilha na Marra
 				Clicar em: Eliminar a agenda xx do dia.
 				Atualizar o navegador
 				Voltar ao Consertar Planilha na Marra
 				Redigitar o número da planilha do dia
 				Digitar o número da planilha para o dia seguinte
 				Atualizar o Navegador

 	Resolução B: Acessar o banco de dados em http://localhost/phpmyadmin
 				Abrir o DB ilivre, e a tabela atendimento
 				Inserir manualmente os horários e computadore faltantes do dia, clicando em Edita > Insert, e segir o modelo de comando:
 				INSERT INTO `atendimento`(`data`, `horario`, `micro`, `idusuario`) VALUES ("2015-06-01","09h00","01",""),
 				("2015-06-01","09h00","02",""),
 				("2015-06-01","09h00","03",""),
 				[...]
 				("2015-06-01","19h00","15","")





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
