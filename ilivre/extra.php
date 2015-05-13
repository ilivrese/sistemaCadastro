  <?php
include "conexao.php";

$stgsql = " SELECT data FROM atendimento
WHERE idusuario = '".$idusuario."'
 order by data desc";
$res = mysql_query($stgsql,$conec);

$registrodedata = mysql_fetch_array($res);



$ultimoacesso= trim($registrodedata['0']);

						if (strstr($ultimoacesso, '-')){
							$aux = explode ('-', $ultimoacesso);
							$ultimoacesso = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                        }

$hoje = date("d/m/Y", time());

if ($ultimoacesso == $hoje)  {
        echo "<font color='red'><b>Usu&aacute;rio j&aacute; utilizou hoje!!!</b></font><br>";
        include "teste_contador.php";
        
 }
 else{
  echo "<br>&Uacute;ltimo acesso: ".$ultimoacesso."<br>";
  }


?>

