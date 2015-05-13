<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="orange" link="blue" vlink="blue">
  <?php
		    $conec;
			$bco;
			$conectou = 0;
      $idusuario = $_POST['idusuario'];
			$nome = $_POST['txnome'];

      $foto = '';
      include "conexao.php";
      if ($conectou) {
          $stgsql = "select * from usuarios where idusuario = '$idusuario'";
          $res = mysql_query($stgsql,$conec);
          if($res){
            $dados = mysql_fetch_array($res);
            $foto = $dados['foto'];
          }

      }
            
			$datanascimento = trim($_POST['txnascimento']);
				if (strstr($datanascimento, "/")){
					$aux = explode ("/", $datanascimento);
					$nascimento = $aux[2] . "-". $aux[1] . "-" . $aux[0];
				}


			$sexo = $_POST['rdsexo'];

             $preferencial =  $_POST['rdpreferencial'];
 			
			$nacionalidade = $_POST['txnacionalidade'];


            	if ((isset($_POST['rdRGouRE'])) && (isset($_POST['txRGouRE'])) ){

			   $rgoure = $_POST['rdRGouRE'];
               $numeroRGouRE = $_POST['txRGouRE'];
               $RGouRE = $rgoure.$numeroRGouRE;
			   }
               else {
               $RGouRE = "";
               }


               	if ((isset($_POST['rdSESC'])) && (isset($_POST['txSESC'])) ){

			$sesc =  $_POST['rdSESC'];
			$numeroSESC = $_POST['txSESC'];
			$SESC =  $sesc.$numeroSESC;
			}
		    	else {
               $SESC = "";
               }
               
			if (isset($_POST['txcontato'])){

		    $contato =  $_POST['txcontato'];
}
		    else {
               $contato = "";
               }
              
      if (isset($_POST['txemail'])){
          $email = $_POST['txemail'];
          }
          else{
            $email = '';
          }

      $folder = "/home/paulo/htdocs_local/ilivre/fotos/";
      
      //print_r($_FILES);
      
      if (is_uploaded_file($_FILES['txfoto']['tmp_name']))  {   
            $temp = explode(".",$_FILES["txfoto"]["name"]);
            $newfilename = 'foto-'.$idusuario . '.' .end($temp);
            
              if (move_uploaded_file($_FILES['txfoto']['tmp_name'], $folder.$newfilename)) {
                $foto = $newfilename;
                //echo "File uploaded";
              } else {
                  echo "File not moved to destination folder. Check permissions";
              };
          } else {
              echo "File is not uploaded.";
          }; //*/



              
              
		    if (isset($_POST['txOBS'])){

			$OBS =  $_POST['txOBS'];
}
			else {
               $OBS = "";
               }
			


			include "conexao.php";



			if ($conectou) {

				$stgsql = "update usuarios set nome='$nome', nascimento='$nascimento', sexo='$sexo',
				nacionalidade='$nacionalidade', RGouRE='$RGouRE', SESC='$SESC',
				contato='$contato', OBS='$OBS', email='$email', foto='$foto' where idusuario='$idusuario'";


				$res = mysql_query($stgsql, $conec);
				if ($res) {
                echo "<font face='Arial' size='2'>";
                echo "<b>Alterado!</b>";
                
// criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Altera&ccedil;&otilde;es no cadastro realizadas: Nome \r\n";
include "escrevefechalog.php";
// fim da mensagem log
                
                
                
                
                
                
                
                
                
                
                

                /*
                 $stgsql = "select idusuario from usuarios order by idusuario desc";
                 $res = mysql_query($stgsql, $conec);
                 $dados = mysql_fetch_array($res);
                 $idusuario = $dados['idusuario'];
                  */
                 






                  $stgsql = "select * from usuarios where idusuario = '$idusuario'";
    				      $res = mysql_query($stgsql,$conec);
                  $dados = mysql_fetch_array($res);





                    //dados obrigatórios
					$mynome = $dados['nome'];
					$datanascimento = $dados['nascimento'];
						if (strstr($datanascimento, '-')){
							$aux = explode ('-', $datanascimento);
							$mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
					$mysexo = $dados['sexo'];
					$mynacionalidade = $dados['nacionalidade'];
                    
                    $mypreferencial = $dados['preferencial'];


				    echo "<font color='red'><b>ID: ".$idusuario."</b></font><br>";
					echo "<b>Nome:</b> ".$mynome."<br>";
					echo "<b>Data de Nascimento:</b> ".$mynascimento."&nbsp;&nbsp;&nbsp;";
					echo "<b>Sexo:</b> ".$mysexo."<br>";
					echo "<b>Pa&iacute;s de Origem:</b> ".$mynacionalidade."<br>";




					// não é obrigatório


					if(isset($dados['RGouRE'])){
     				   echo "<b>RG ou RE:</b> ".$dados['RGouRE']."<br>";
                    }

					if(isset($dados['SESC'])){
                       echo "<b>Cadastro SESC:</b> ".$dados['SESC']."<br>";
                    }
                    if (isset($dados['contato'])){
					echo "<b>Telefone:</b> ".$dados['contato']."<br>";
                 }
                 
                                   if (isset($dados['preferencial'])){
                                 
                                              $mypreferencial = $dados['preferencial'];
                                              if($mypreferencial == 'S'){
                                                  echo "<b>&Eacute; preferencial?: <font color='red'>SIM</font></b><br>";
                                              }
                                               if($mypreferencial == 'N'){
                                                  echo "<b>&Eacute; preferencial?: </b> N&Atilde;O<br>";
                                                  }
             }
             
                 
                 
                     if (isset($dados['OBS'])){
					 echo "<b>OBS:</b><font color='red'> ".$dados['OBS']."</font><br>";
					}








                 
/*
                 echo "<br><b>Nome:</b> ".$nome ;
                 echo "<br>";
                 echo "<b>ID:</b> ".$idusuario ;
                 echo "<br>";
                  $nasc = $_POST['txnascimento'];
                 echo "<b>Data de Nascimento:</b> ".$nasc ;
                 echo "<br>";
                  echo "<b>Sexo:</b> ".$sexo ;
                 echo "<br>";
                 echo "<b>Pa&iacute;s de Origem:</b> ".$nacionalidade ;
                 echo "<br>";
                 echo "<b>RG ou RE:</b> ".$RGouRE ;
                 echo "<br>";
                 echo "<b>SESC:</b> ".$SESC ;
                 echo "<br>";
                 echo "<b>Contato:</b> ".$contato ;
                 echo "<br>";
                 echo "<b>OBS:</b> ".$OBS ;
                 echo "<br>";
                 echo "</font>";
                             echo "<br>";
                             echo "<br>";
 */

                  include "extra2.php";


      			}
				else {
                echo "<font face='Arial' size='2'><b>Erro na inclus&atilde;o do usu&aacute;rio!</b></font>";
                echo "<br>";
                echo "<a href='cadastrausuario.php' target='principal'>Tentar Novamente</a>";
            	}

			}








		?>






















</BODY>
</HTML>
