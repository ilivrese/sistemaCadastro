

<html>
<head><title></title></head>
<body link="blue" vlink="blue">


<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());
include "conexao.php";

 if ($conectou) {

  
  echo "</td></tr>";



  echo "<tr><td></td><td>";
  echo "Escolha a agenda de hoje: ";
  echo "</td></tr>";


   $pesquisa3 = "select * from tiposdeagenda";
  $resposta3 = mysql_query($pesquisa3,$conec);
  $dados3 = mysql_fetch_array($resposta3);
  $tipo = $dados3['tipo'];
  $sobreotipo = $dados3['sobreotipo'];
  $horarios = $dados3['horarios'];
  $linhas = mysql_num_rows($resposta3);



   for ($linhaini = 0; $linhaini < $linhas; $linhaini++) {
       $tipo = $dados3['tipo'];
       $sobreotipo = $dados3['sobreotipo'];
       $horarios = $dados3['horarios'];
       echo "<tr>";
       echo "<td></td>";

       echo "<td>";
       echo "<b>Tipo <font color='red'>".$tipo."</font></b><br>";
       echo "<b>Descrição: </b><font size='1'>".$sobreotipo."</font><br>";
       echo "<b>Horários disponíveis: </b><font size='1'>".$horarios.".</font><br>";
       echo "</td>";
       echo "</tr>";
       $dados3 = mysql_fetch_array($resposta3);
       }



       echo "<tr><td></td><td>";
   echo "</td></tr>";
   echo "</form>";
   echo "</table>";


}

    



      

else{
     echo("Conexão falhou<br>");

}


?>
</body>
</html>
