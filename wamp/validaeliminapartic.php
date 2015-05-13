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
$idoficina = $_GET['idoficina'];
$link = $_GET['link'];



if (($idoficina) && ($idusuario)){

$stgsql = "delete from participantesofic where idoficina = '$idoficina'
and idusuario = '$idusuario'";
$res = mysql_query($stgsql,$conec);
if ($res){
echo "Participante eliminado.<br>";
}
else {
echo "Erro";
}

}




echo "<a href='chamadaofic.php?idoficina=".$idoficina."&link=".$link."'>Voltar</a>";

?>
</BODY>
</HTML>
