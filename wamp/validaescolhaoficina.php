<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="green" link="blue" vlink="blue">
<?php
$hoje = date("Y-m-d", time());
$idusuario = $_POST['idusuario'];
$idoficina = $_POST['idoficina'];
$conec;
$bco;
$conectou = 0;
include "conexao.php";



if ($conectou) {

				$stgsql = "insert into participantesofic values ('$idoficina', '$idusuario')";
				$res = mysql_query($stgsql,$conec);
                if ($res){
                echo "OK";
                }
                else {
                echo "Erro";
                }
}
    echo "<form name='volta' method='post' action='veroficinas.php'>";
    echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
    echo "<input type='submit' name='submit' value='Voltar'>";
    echo "</form>";

?>
</BODY>
</HTML>
