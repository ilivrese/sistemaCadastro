<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php


$conec;
$bco;
$conectou = 0;


include "conexao.php";


$idusuario = $_GET['idusuario'];



if ($conectou){

$stgsql = "delete from espera where idusuario = '$idusuario'";
$res = mysql_query($stgsql,$conec);
if ($res){
echo "Participante eliminado.<br>";

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Usuário ID = [".$idusuario."] eliminado da lista de espera.\r\n";
include "escrevefechalog.php";
// fim da mensagem log


}
else {
echo "Erro";
}

}



echo "<a href='espera.php'>Voltar</a>";


/*
echo "<form name='volta' method='post' action='espera.php'>";
echo "<input type='submit' name='submit' value='voltar'>";
echo "</form>";
*/


?>
</BODY>
</HTML>
