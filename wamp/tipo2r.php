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
// DE SEGUNDA A QUINTA

 echo "<td>";
 $horario = '12h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

  echo "<td>";
  $horario = '12h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";


  echo "<td>";
  $horario = '13h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";


  echo "<td>";
  $horario = '13h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

   echo "</tr><tr>";

  echo "<td>";
  $horario = '14h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";



  echo "<td>";
  $horario = '14h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";


  echo "<td>";
  $horario = '15h00';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";

  echo "<td>";
  $horario = '15h30';
include "mostravagas.php";
echo "<font face='Arial' size='2'>".$horario."(<b>".$vagas."</b>)</font>";
 echo "</td>";
 





 echo "</tr>";
echo "</table>";






?>
</BODY>
</HTML>
