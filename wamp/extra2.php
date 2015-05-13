<?php
/*
if (($horario) and ($micro)){

echo "<form name='cadastrar' method='post' target='ok' action='ok.php'>";

echo "<input type='hidden' name='horario' value='".$horario."'>";
echo "<input type='hidden' name='micro' value='".$micro."'>";
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<input type='submit' name='submit' value='Agendar'>";
echo "</form>";
echo "</td></tr><tr><td>";

echo "</td><tr>";

}

else {

*/

include "extra.php";



// teste
                    $stgsql4 = "update infos set valor = '$idusuario' where
                    parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
    				
    				

    				
    				
    				
    				
    			/*
    				if($3idade == 1){
    				$stgsql5 = "update infos set valor = '1' where
                    parametro = 'pref' ";
    				$res5 = mysql_query($stgsql5,$conec);
                      }
                      
                      
                      */
                      
                      
                      
// fim do teste
echo "<a href='alteracao.php'>Alterar</a><br>";
echo "<a href='vagasdodia.php' target='b'>Agendar Horário</a><br>";
echo "<a href='veroficinas.php' target='lado'>Inscrever em Oficinas</a><br>";
echo "<a href='espera1.php' target='b'>Lista de Espera</a><br>";
echo "<a href='horaextra.php'>Horário Quebrado</a><br>";
// AGENDAMENTO PREVIO PROVISORIO
echo "<a href='prevag.php'>Agendamento Pr&eacute;vio (COM))</a>";

/*
echo "<form name='alterar' method='post' action='alteracao.php'>";
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<input type='submit' name='submit' value='Alterar dados'>";
echo "</form>";

echo "<form name='alterar' method='post' target='inicio' action='vagasdodia.php'>";
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<input type='submit' name='submit' value='Agendar horário'>";
echo "</form>";

echo "<form name='inscrever' method='post' target='ok' action='veroficinas.php'>";
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<input type='submit' name='submit' value='Inscrever em oficina'>";
echo "</form>";

echo "<form name='espera' method='post' target='inicio' action='espera1.php'>";
echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
echo "<input type='submit' name='submit' value='Lista de Espera'>";
echo "</form>";
 */


//      }


?>
