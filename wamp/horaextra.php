<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="yellow">
<?php

            $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";
			$hoje = date("Y-m-d", time());
			if ($conectou) {
            $stgsql4 = "select valor from infos where parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
                    $dados4 = mysql_fetch_array($res4);
                    $linhas4 = mysql_num_rows($res4);
                    $idusuario = $dados4[0];

 echo "<font color='red'><b>ID:</b></font> ".$idusuario.":<br>";
 echo "<form name='diasanteriores' method='post' action='okextra.php'>";
echo "<b>Horário quebrado:</b>";
echo "<input type='text' name='horario' size='10' maxlengh='10'><br>";

echo "<b>Micro:</b>";
echo "<input type='text' name='micro' size='10' maxlengh='10'><br>";

echo "<input type='submit' name='submt' value='Inserir'>";
echo "</form>";
 
// criando um arquivo log
include "abrelog.php";
$textlog = "Escolhido Horário Quebrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log
 
 
                    }


        

	     
?>

</BODY>
</HTML>
