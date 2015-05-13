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




  $pesquisa2 = "select valor from infos where parametro = 'proximodia'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $proximodia = $dados2[0];




 $pesquisa = "select * from agenda where data = '$proximodia'";
  $resposta = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($resposta);
  $tipo = $dados['tipo'];
  $micros = $dados['micros'];
  $todos_os_micros = explode(', ',$micros);
  $numerodemicros = count($todos_os_micros);


$pesquisa3 = "select * from tiposdeagenda where tipo='$tipo'";
  $resposta3 = mysql_query($pesquisa3,$conec);
  $dados3 = mysql_fetch_array($resposta3);
  $sobreotipo = $dados3['sobreotipo'];
  $horarios = $dados3['horarios'];
  $linhas = mysql_num_rows($resposta3);



echo "<table>";
       echo "<tr>";
       echo "<td>";
       echo "<b>Tipo <font color='red'>".$tipo."</font></b><br>";
       echo "<b>Descrição: </b>".$sobreotipo."<br>";
       echo "<b>Horários disponíveis: </b>".$horarios."<br>";
       echo "</td>";
       echo "</tr>";
echo "</table>";








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
