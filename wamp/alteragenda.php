<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
$hojeok = date("d/m/Y", time());
$hoje = date("Y-m-d", time());

$conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {

                if (isset($_GET['excluir'])){
                $stgsql2 = "delete from agenda where data = '$hoje'";
				$res2 = mysql_query($stgsql2,$conec);
				echo "Tipo de agenda apagado.<br>";
                echo "Reinicie o Banco de dados.";

                
                
                }


                else {
                $stgsql = "select tipo from agenda where data = '$hoje'";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res);
				$linhas = mysql_num_rows($res);
				
				if (($res) && ($linhas)){
				
				echo "Tipo de agenda do dia ".$hojeok.": ".$dados['tipo'];
				echo "<br>";
				echo "Confirmar exclusão?";
				echo "<br>";
                echo "<a href='alteragenda.php?excluir=1'>Sim</a>";
				
				}
				}

}
?>
</BODY>
</HTML>
