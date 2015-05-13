<?php
include "conexao.php";
if ($conectou){

for ($micro = 1; $micro <= 15; $micro ++) {
				$stgsql = "insert into atendimento (data, horario, micro) values ('$hoje','$horario', '$micro')";
				$res = mysql_query($stgsql, $conec);


}
}
else {
echo "erro na conexao!";
}


?>
