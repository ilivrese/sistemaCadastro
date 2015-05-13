<?php
include "conexao.php";
if ($conectou){
// idusuario is null
				$stgsq3 = "delete from atendimento where data < '$hoje' and
                idusuario =''";
				$res3 = mysql_query($stgsq3, $conec);

                $stgsql2 = "delete from atendimento where data < '$hoje' and
                idusuario = '1'";
				$res2 = mysql_query($stgsql2, $conec);
				
				$stgsql3 = "delete from espera";
				$res2 = mysql_query($stgsql2, $conec);

                if ($res) {
                echo "<br>Agenda limpa<br>";
                   }
                else {
                echo "Erro em limpar agenda";
                }


				}
				else {
				echo "Não conectou";
				}

?>
