<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  bgcolor="lightblue" topmargin="0">
<?php
 echo "<table border='1'>";
 echo "<tr>";
echo "<td rowspan='2'><font face='Arial' size='2'><b>Vagas</b><br>
<a href='rodape.php'>Atualizar</a></font></td>";

  echo "<td>";
  $horario = '10h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

  echo "<td>";
  $horario = '10h45';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";
 
  echo "<td>";
 $horario = '11h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";
 
  echo "<td>";
  $horario = '12h15';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";
  
  echo "<td>";
  $horario = '13h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

  echo "</tr><tr>";

  echo "<td>";
  $horario = '13h45';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

   echo "<td>";
  $horario = '14h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";


  echo "<td>";
  $horario = '15h15';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";



  echo "<td>";
  $horario = '16h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";



  echo "<td>";
  $horario = '16h45';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";
 



 echo "</tr>";
echo "</table>";






?>
</BODY>
</HTML>
