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
