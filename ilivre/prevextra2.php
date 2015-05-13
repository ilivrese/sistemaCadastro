<?php



include "prevextra.php";



// teste
                    $stgsql4 = "update infos set valor = '$idusuario' where
                    parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
    				
   	
           
                      
                      
// fim do teste

echo "<a href='prevvagasdodia.php' target='lado'>Agendar Horário</a><br>";



?>
