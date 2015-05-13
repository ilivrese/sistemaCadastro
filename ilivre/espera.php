<html>
<head><title></title></head>
<body bgcolor="yellow" link="blue" vlink="blue">
   <?php

            $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";
			$hoje = date("Y-m-d", time());
			if ($conectou) {





 if (isset($_GET['horario'])) {
$horario = $_GET['horario'];
echo "<a href='agendamento.php' target='principal'>Nova consulta</a><br>";
echo "<a href='vagasdodia.php' target='b'>Agendar Horário</a><br>";
echo "<a href='veroficinas.php' target='lado'>Inscrever em Oficinas</a><br>";

                    $stgsql4 = "select valor from infos where parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
                    $dados4 = mysql_fetch_array($res4);
                    $linhas4 = mysql_num_rows($res4);
                    $idusuario = $dados4[0];

//            include "teste_contador2.php";


// inicio do teste
// $hoje = date("Y-m-d", time());
$stgsql = "SELECT data, horario, micro FROM atendimento
WHERE idusuario = '".$idusuario."' and horario <= '".$horario."'
and data = '".$hoje."'";
$res = mysql_query($stgsql,$conec);
$contador = mysql_num_rows($res);

//fim do teste



// TESTA IDADE


$stgsql5 = "SELECT nascimento FROM usuarios
WHERE idusuario = '".$idusuario."'";
$res5 = mysql_query($stgsql5,$conec);
  $dados5 = mysql_fetch_array($res5);
  $datanascimento = $dados5[0];


$auxnascimento = explode ("-", $datanascimento);
$auxhoje = explode ("-", $hoje);

if ($auxnascimento[1] < $auxhoje[1]){
  $diferenca = $auxhoje[0] - $auxnascimento[0];
}
else{

  if ($auxnascimento[1] > $auxhoje[1]){
       $diferenca = $auxhoje[0] - $auxnascimento[0] - 1;
  }
  else{
   if ($auxnascimento[2] > $auxhoje[2]){
    $diferenca = $auxhoje[0] - $auxnascimento[0] - 1;
   }
   else{
    $diferenca = $auxhoje[0] - $auxnascimento[0];
   }

  }
}

if (($diferenca >= 60) && ($datanascimento != '0000-00-00')){
$contador = $contador - 1         ;
}

// FIM DO TESTE DE IDADE





                 $agora = date("G:i:s",time());
				$stgsql = "insert into ESPERA values ('$agora','$idusuario','$contador', '$horario')";
				
				$res = mysql_query($stgsql, $conec);
				if ($res) {
                echo "<br><b>OK</b><BR>";
                
                                    // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Espera para: horário [".$horario."]; já usou = [".$contador."].\r\n";
include "escrevefechalog.php";
// fim da mensagem log
                
                
                
                     }
 }
 
 
// teste


// fim do teste
 
 
 
 
 
 
 
 
 
 
 
 
                $stgsql2 = "SELECT espera.horachegada, espera.idusuario,
                usuarios.nome, espera.horario, espera.jausou
FROM espera, usuarios
WHERE espera.idusuario = usuarios.idusuario
order by espera.horario, espera.jausou, espera.horachegada asc";

				$res2 = mysql_query($stgsql2,$conec);
				
				$linhas = mysql_num_rows($res2);
				 $linhaini =1;
                 $dados = mysql_fetch_array($res2) ;


                  echo "<font face='Arial' size='2' color='red'>";
                 echo "<b>Lista de espera diária</b></font> - <font size='1'><a href='espera.php'>atualizar</a></font>";
                 echo "<table border='1'>";
                 echo "<tr>";

                 echo "<td>";
                 echo "&nbsp;";
                 echo "</td>";

                 echo "<td>";
                 echo "Horário";
                 echo "</td>";


                 echo "<td>";
                 echo "Já usou?";
                 echo "</td>";


                 
                 echo "<td>";
                 echo "Hora de chegada";
                 echo "</td>";

                 echo "<td>";
                 echo "Nome";
                 echo "</td>";

                 echo "<td>";
                 echo "ID";
                 echo "</td>";



                 echo "<td>";
                 echo "Eliminar";
                 echo "</td>";
                 
                 echo "<td>";
                 echo "Preferencial";
                 echo "</td>";
                 
                 echo "</tr>" ;

                while ($linhaini <= $linhas){
                
                $nome = $dados['nome'];
                  $idusuario = $dados['idusuario'];
                  $horachegada = $dados['horachegada'];
                  $horario = $dados['horario'];
                  $jausou = $dados['jausou'];
                  

                 echo "<tr>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $linhaini;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $horario;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $jausou;
                 echo "</font>";
                 echo "</td>";



                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $horachegada;
                 echo "</font>";
                 echo "</td>";
                 
                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $nome;
                 echo "</font>";
                 echo "</td>";

                 echo "<td>";
                 echo "<font face='Arial' size='2'>";
                 echo $idusuario;
                 echo "</font>";
                 echo "</td>";
                 



                 echo "<td>";
                 
                 
                 

echo "<a href='validaeliminaespera.php?idusuario=".$idusuario."'> > </a>";
  /*
                 echo "<form name='eliminaespera' method='post'
                 action='validaeliminaespera.php'>";
                 echo "<input type='hidden' name='idusuario' value='".$idusuario."'>";
                 echo "<input type='submit' name='submit' value='>'>";
                 echo "</form>";
 */
                 
                 
                 
                 echo "</td>";
                 
                 
                 
                 echo "<td>";
                 echo "S";
                 echo "   ";
                 echo "N";
                 echo "</td>";
                 echo "</tr>";
                 

                 $linhaini ++;
                 $dados = mysql_fetch_array($res2) ;
                  }
                             echo "</table>";
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     }










 	?>
</body>
</html>
