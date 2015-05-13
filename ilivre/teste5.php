<html>
<head><title></title></head>
<body link="blue" vlink="blue">
<!--
<ul>Escolha a agenda que deseja para hoje:

 <li><a href="teste2.php">Segunda a quinta</a>:<br>
 Horários: 12h, 12h30, 13h, 13h30, 14h, 14h30, 15h e 15h30.</li>
 <li><a href="teste4.php">Sextas</a>:<br>
 Horários: 11h, 11h30, 12h, 12h30, 13h, 13h30, 14h, 14h30 e 17h.</li>
 <li><a href="teste6.php">Todos os horários</a> (das 10h às 17h30) 30 minutos.</li>
 <li><a href="teste7.php">Quarta-feira de cinzas</a> (25/02/2009):<br>
 Horários: 14h, 14h30, 15h, 15h30, 16h, 16h30 e 17h.</li>
 </ul>

-->

<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
include "conexao.php";
 if ($conectou) {

  $pesquisa = "select tipo from agenda where data = '$hoje'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados[0];
  $linhas = mysql_num_rows($resposta);

  if($linhas == '0'){
  echo "Escolha a agenda de hoje: ";
  echo "<br>";
  echo "<form name='tipo' method='post' action='ok2.php'>";
  echo "<input type='hidden' name='hoje' value='".$hoje."'>";

  echo "<input type='radio' name='tipo' value='1'><b>Tipo 1:</b> Horários de 30min, das
  10h às 17h30.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>10h, 10h30, 11h, 11h30,
  12h, 12h30, 13h, 13h30, 14h, 14h30, 15h, 15h30, 16h, 16h30 e 17h.</font>";

  echo "<br>";
  
   echo "<input type='radio' name='tipo' value='2'><b>Tipo 2:</b> Horários de 30min, das
  12h às 16h00.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>
  12h, 12h30, 13h, 13h30, 14h, 14h30, 15h e 15h30.</font>";

   echo "<br>";

   echo "<input type='radio' name='tipo' value='3'><b>Tipo 3:</b> Horários de 30min, com oficinas
   do Curumim das 9h às 11h e das 15h às 17h.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>
  11h, 11h30, 12h, 12h30, 13h, 13h30, 14h, 14h30 e 17h.</font>";

   echo "<br>";
/*
   echo "<input type='radio' name='tipo' value='4'><b>Tipo 4:</b> Horários de 1h, das
   10h às 17h30 (sendo o das 17h um horário de 30min).<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>
  11h, 12h, 13h, 14h, 15h, 16h e 17h.</font>";

    echo "<br>";

   echo "<input type='radio' name='tipo' value='5'><b>Tipo 5:</b> Horários de 45min, das
   10h às 17h30 .<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>
  10h, 10h45, 11h30, 12h15, 13h, 13h45, 14h30, 15h15, 16h e 16h45.</font>";

     echo "<br>";


     echo "<input type='radio' name='tipo' value='6'><b>Tipo 6:</b> Horários de 30min, das
  12h às 17h30.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>12h, 12h30, 13h, 13h30, 14h, 14h30, 15h, 15h30, 16h, 16h30 e 17h.</font>";

    echo "<br>";

   echo "<input type='radio' name='tipo' value='7'><b>Tipo 7:</b> Horários de 30min, das
  12h às 15h00.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font size='1'>
  12h, 12h30, 13h, 13h30, 14h e 14h30.</font>";

 */
  echo "<br>";



     
   echo "<input type='submit' name='submit' value='OK'>";



  echo "</form>";
  

  }
  else{
    echo "A agenda escolhida pra hoje é: ".$tipo."<br>";
      echo "<a href='teste2.php'>Criar agenda</a>";
  echo "<br>";

  }


  echo "Ver agenda completa, alterar ou inseir agenda" ;





}
?>
</body>
</html>
