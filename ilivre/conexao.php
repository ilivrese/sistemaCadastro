<?php




//$conec = mysql_connect("localhost", "ilivre", "carmo");
$conec = mysql_connect("localhost", "root", "");

if ($conec) {
	$bco = mysql_select_db("ilivre", $conec);
	if ($bco) {
		$conectou = 1;
	//	echo "ok";
	}
	else {
		echo "Banco de dados 'ilivre' N&atilde;o encontrado!";
	}
}
else {
	echo "Erro na conex&atilde;o!";
}
?>
