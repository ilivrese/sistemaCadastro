<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="lightpink" link="blue" vlink="blue">

<?php
$hoje = date("Y-m-d", time());




$conec;
$bco;
$conectou = 0;
include "conexao.php";

if ($conectou) {



$stgsql5 = "select valor from infos where parametro = 'proximodia' ";
    				$res5 = mysql_query($stgsql5,$conec);
                    $dados5 = mysql_fetch_array($res5);
                    $proximodia = $dados5[0];
                    
$proximodiaok= trim($proximodia);
						if (strstr($proximodiaok, '-')){
							$aux = explode ('-', $proximodiaok);
							$proximodiaok = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
    
                      

  $pesquisa0 = "select tipo,micros from agenda where data = '$proximodia'";
  $resposta0 = mysql_query($pesquisa0,$conec);
  $dados0 = mysql_fetch_array($resposta0);
  $tipopd = $dados0['tipo'];
  
  $microspd= $dados0['micros'];


$busca2 = "select * from tiposdeagenda where tipo ='$tipopd'";
$res2 = mysql_query($busca2, $conec);
$dados2 = mysql_fetch_array($res2);
$sobreotipopd = $dados2['sobreotipo'];
$horariospd = $dados2['horarios'];



   echo "<b>Agendamento Pr&eacute;vio para o dia ".$proximodiaok."</b><br>";
   
   echo "<b>Agenda tipo: <font color='red'>".$tipopd."</font></b><br>";
   echo "<b>Descrição :</b> ".$sobreotipopd."<br>";
   echo "<b>Horarios disponíveis:</b> ".$horariospd."<br>";
      echo "<b>Micros disponíveis:</b> ".$microspd."<br>";
   
   echo "<hr>";
   
 

 if(isset($_GET['eliminaid']) && isset($_GET['eliminahorario']) && 
  isset($_GET['eliminamicro']) ){
 	$eliminaid = $_GET['eliminaid'];
 	$eliminahorario = $_GET['eliminahorario'];
 	 	$eliminamicro = $_GET['eliminamicro'];
$stgsql = "delete from pdatendimento where pdidusuario = '$eliminaid' and
pdhorario = '$eliminahorario' and pdmicro = '$eliminamicro'";
$res = mysql_query($stgsql,$conec);
}

   echo "Agendados até o momento: <br>";
   

   
   $stgsql = " SELECT pdatendimento.pdhorario,pdatendimento.pdmicro,pdatendimento.pdidusuario,
   usuarios.nome, usuarios.SESC  FROM pdatendimento, usuarios
WHERE pdatendimento.pdidusuario = usuarios.idusuario and pdatendimento.pddata = '".$proximodia."'
order by pdatendimento.pdhorario,pdatendimento.pdmicro asc";

$res = mysql_query($stgsql,$conec);
$dados = mysql_fetch_array($res);
$ocupados = mysql_num_rows($res);

echo "<table border='1'>";

echo "<tr>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Horário";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
 echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Micro";
echo "</b>";
echo "</font>";
echo "</td>";


echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Usu&aacute;rios cadastrados";
echo "</b>";
echo "</font>";
echo "</td>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "ID";
echo "</b>";
echo "</font>";
echo "</td>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "COM";
echo "</b>";
echo "</font>";
echo "</td>";

echo "<td>";
echo "<font face='Arial' size='2'>";
echo "<b>";
echo "Elimina";
echo "</b>";
echo "</font>";
echo "</td>";



echo "</tr>";



$linhaini = 0;
while ($linhaini < $ocupados){
        $pdhorario = $dados['pdhorario'];
        $pdmicro = $dados['pdmicro'];
        $idusuario = $dados['pdidusuario'];
        $nome = $dados['nome'];
        $SESC = $dados['SESC'];

        echo "<tr>";

        echo "<td><font face='Arial' size='2'>".$pdhorario."</font></td>";
        echo "<td><font face='Arial' size='2'>".$pdmicro."</font></td>";
        echo "<td><font face='Arial' size='2'>".$nome."</font></td>";
        echo "<td><font face='Arial' size='2'>".$idusuario."</font></td>";
        echo "<td><font face='Arial' size='2'>".$SESC."</font></td>";
        echo "<td><a href='prevvagasdodia.php?eliminaid=".$idusuario.
        "&eliminahorario=".$pdhorario."&eliminamicro=".$pdmicro."'> > </td>";


        echo "</tr>";
        $linhaini ++;
        $dados = mysql_fetch_array($res);
  }



echo "</table>";














}
?>
</BODY>
</HTML>
