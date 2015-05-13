<html>
	<head>
	    <title>Valida cadastro de oficina</title>
	</head>
	<body link="blue" vlink="blue">
	    <?php
		    $conec;
			$bco;
			$conectou = 0;



$nomeofic = $_POST['nomeofic'];
$descricao = $_POST['descricao'];

$prerequisito = $_POST['prerequisito'];
$datainicio = trim( $_POST['datainicio']);
if (strstr($datainicio, "/")){
					$aux = explode ("/", $datainicio);
					$datainicio = $aux[2] . "-". $aux[1] . "-" . $aux[0];
}

$datafim = trim ($_POST['datafim']);
if (strstr($datafim, "/")){
					$aux = explode ("/", $datafim);
					$datafim = $aux[2] . "-". $aux[1] . "-" . $aux[0];
}

$horainicio = $_POST['horainicio'];
$horafim = $_POST['horafim'];
$instrutor = $_POST['instrutor'];
$vagas = $_POST['vagas'];
$inicioinscricao = trim($_POST['inicioinscricao']);
if (strstr($inicioinscricao, "/")){
					$aux = explode ("/", $inicioinscricao);
					$inicioinscricao = $aux[2] . "-". $aux[1] . "-" . $aux[0];
}
/*
echo "Dados inseridos: <br>";
echo "Nome da oficina: ".$nomeofic."<br>" ;
echo $descricao."<br>" ;
echo $datainicio."<br>" ;
echo $datafim."<br>" ;
echo $horainicio."<br>" ;
echo $horafim."<br>" ;
echo $instrutor."<br>" ;
echo $vagas."<br>" ;
echo $inicioinscricao."<br>" ;
*/


if (($nomeofic) && ($datainicio) && ($datafim) && ($horainicio)&&
   ($horafim) && ($instrutor) && ($vagas) && ($inicioinscricao)) {



include "conexao.php";



			if ($conectou) {

				$stgsql = "insert into oficinas values ('','$nomeofic', '$descricao',
				'$prerequisito', '$datainicio', '$datafim', '$horainicio', '$horafim', '$instrutor', '$vagas',
                 '$inicioinscricao')";
                 	$res = mysql_query($stgsql, $conec);
				if ($res) {
				
				   $stgsql = "select idoficina from oficinas order by idoficina desc";
				   	$res = mysql_query($stgsql, $conec);
				   	if ($res){
				   	
				   	   $dados = mysql_fetch_array($res);
				   	   $idoficina = $dados['0'];
                        echo "<font face='Arial' size='2'>";
                        echo "<b>ID da Oficina: </b>".$idoficina."<br>";
                        echo "<font color='red'><b>Oficina incluida com sucesso!</b></font>";
                        echo "<hr>";


      $datainicio2 = trim($datainicio);
                  if (strstr($datainicio2, '-')){
                     $aux = explode ('-', $datainicio2);
				     $datainicio2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }

      $datafim2 = trim($datafim);
                  if (strstr($datafim2, '-')){
                     $aux = explode ('-', $datafim2);
				     $datafim2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                     }

                        
 echo "<b>";
 echo $nomeofic;
 echo "</b>";
 echo "<br>";
 echo "<font size='1'><i>";
 echo $descricao;
 echo "</i></font>";
 echo "<br>";

  echo "<b>Pré-requisitos: </b>".$prerequisito;
  echo "<br>";
  echo "<b>Período:</b> de ".$datainicio2." a ".$datafim2;
  echo "<br>";
  echo "<b>Horário:</b> das ".$horainicio." às ".$horafim;
  echo "<br>";
  echo "<b>Vagas oferecidas:</b> ".$vagas;
  echo "<br>";
  echo "<b>Instrutor responsável:</b> ".$instrutor;
  echo "<br><hr>";
echo "</font>";

 echo "<br>";
 echo "<a href='alteraroficina.php?idoficina=".$idoficina."'>Alterar dados</a><br>";
 echo "<a href='cadastrooficina.php'>Cadastrar nova oficina</a><br>";
  echo "<a href='veroficinas2.php'>Ver todas as oficina</a>";
 echo "<a href='adm.php'>Ir para ferramentas administrativas</a>";




 }
                        else {
            	        echo "Busca por ID invalida";
                        	}
				
				
				
				

            	}
            	else {
            	echo "Busca invalida";
            	}

			}

             else {
             echo "Erro de conexao";
             }

 }
                  else {
                  echo "Falta preencher alguma coisa...";
                  }



 /*
if ($nome){
echo "Nome ok";
}
else {
echo "Nome invalido";
}


echo $nome."<br>" ;
echo $descricao."<br>" ;
echo $datainicio."<br>" ;
echo $datafim."<br>" ;
echo $horainicio."<br>" ;
echo $horafim."<br>" ;
echo $instrutor."<br>" ;
echo $vagas."<br>" ;
echo $inicioinscricao."<br>" ;
*/











?>
</BODY>
</HTML>
