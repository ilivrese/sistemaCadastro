
<html>
    <head>
	    <title>
			Buscando um Usu&aacute;rio
		</title>
	</head>
	<body  link="blue" vlink="blue">
	
	
		<?php
		

		    $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {


				if (isset($_POST['txidusuario'])){
				$idusuario = $_POST['txidusuario'];
                $stgsql = "select * from usuarios where idusuario = '$idusuario'";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Usua&acute;rio consultado: ID = ".$idusuario.".\r\n";
include "escrevefechalog.php";
// fim da mensagem log


				if (($res) and ($linhas)) {
                    include "frameid.php";

				}
				else {
					echo "ID <b>".$idusuario."</b> n&atilde;o encontrada.";
					echo "<br>";
                    echo "<a href='consultausuario.php'>Voltar</a>";
                    
                    
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."ID [".$idusuario."] não encontrada.\r\n";
include "escrevefechalog.php";
// fim da mensagem log



				}
 			}
			
			
			
			if (isset($_POST['letraounome'])){

             include "testebd.php";



				}
				
                 if (isset($_POST['encontrado'])){
                 $idusuario=$_POST['encontrado'];
                 include "frameid.php";
                  }
                  
                  
                  
                  
                  
			if ((isset($_POST['rdRGouRE'])) && (isset($_POST['txRGouRE'])) ){
			
            $rgoure = $_POST['rdRGouRE'];
			$numeroRGouRE = $_POST['txRGouRE'];
            $RGouRE = $rgoure.$numeroRGouRE;
            

				$stgsql = "select idusuario from usuarios
					where RGouRE = '$RGouRE'";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res)  ;
				$linhas = mysql_num_rows($res);
				
				if (($res) and ($linhas)) {
                   $idusuario = $dados['idusuario'];
                   include "frameid.php";
                   
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Documento [".$RGouRE."] encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log



				}
				else {
					echo "RG ou RE <b>".$RGouRE."</b> n&atilde;o encontrado.";
					echo "<br><a href='consultausuario.php'>Voltar</a>";
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Documento [".$RGouRE."] n&ão encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log


				}

			}
			
			if ((isset($_POST['rdSESC'])) && (isset($_POST['txSESC']))){
			
   $sesc =  $_POST['rdSESC'];
   $numeroSESC = $_POST['txSESC'];
   $SESC =  $sesc.$numeroSESC;
			
			
			
			
			
			
				$stgsql = "select idusuario from usuarios 
                where SESC = '$SESC'";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res);
				$linhas = mysql_num_rows($res);
				
				if (($res) and ($linhas)) {
                   $idusuario = $dados['idusuario'];
                   include "frameid.php";
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Cartão Sesc [".$SESC."] encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log

                   

				}
				else {
					echo "Cadastro SESC <b>".$SESC."</b> n&atilde;o encontrado.";
                   echo "<br><a href='consultausuario.php'>Voltar</a>";

// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Cartão Sesc [".$SESC."] não encontrado.\r\n";
include "escrevefechalog.php";
// fim da mensagem log

				}

			}
			
			
			}


		else {
			echo "Erro de conex&atilde;o";
		}
		?>
	</body>
</html>
