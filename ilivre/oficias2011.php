<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">

<?php
  echo "<a href='veroficinas2.php'>Voltar</a>";

$link = 2;
$stgsql = "select * from oficinas order by datainicio desc";
  include "geraofic.php";




?>
</BODY>
</HTML>
