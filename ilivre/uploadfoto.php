<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="orange" link="blue" vlink="blue">
  <?php
		  $conec;
			$bco;
			$conectou = 0;
      $idusuario = $_POST['txuserid'];
			

      echo "UPLOAD de foto<br>";
      echo $idusuario."<br>";
      $folder = "/home/paulo/htdocs_local/ilivre/fotos/";
      $foto = '';
      //print_r( $_POST  );echo"<br>";
      //print_r( $_FILES );
      //print_r( $HTTP_POST_FILES );

      
      if (is_uploaded_file($_FILES['txfoto']['tmp_name']))  {   
          if (move_uploaded_file($_FILES['txfoto']['tmp_name'], $folder.$_FILES['txfoto']['name'])) {
            $foto = $_FILES['txfoto']['name'];
              echo "File uploaded<br>";
          } else {
              echo "File not moved to destination folder. Check permissions<br>";
          };
      } else {
          echo "File is not uploaded.<br>";
      }; //*/
      
			include "conexao.php";
      
			if ($conectou) {

				$stgsql = "update usuarios set foto='$foto' where idusuario='$idusuario'";
        echo "Update String: ".$stgsql."<br>";

				$res = mysql_query($stgsql, $conec);
				if ($res) {
                echo "<font face='Arial' size='2'>";
                echo "<b>Alterado!</b>";
                
                $stgsql = "select * from usuarios where idusuario = '$idusuario'";
    				    $res = mysql_query($stgsql,$conec);
                $dados = mysql_fetch_array($res);

                //dados obrigatórios
			       		$mynome = $dados['nome'];
                $finalFoto = $dados['foto'];
					      //$datanascimento = $dados['nascimento'];
						    //if (strstr($datanascimento, '-')){
							  //   $aux = explode ('-', $datanascimento);
							  //   $mynascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						    //}

					      //$mysexo = $dados['sexo'];
                //$mynacionalidade = $dados['nacionalidade'];
                //$mypreferencial = $dados['preferencial'];


				        echo "<font color='red'><b>ID: ".$idusuario."</b></font><br>";
                echo "<b>Nome:</b> ".$mynome."<br>";
                echo "<b>Foto:</b> ".$foto."<br>";
                echo "<b>Final Foto:</b> ".$finalFoto."<br>";
                //echo "<b>Sexo:</b> ".$mysexo."<br>";
                //echo "<b>Pa&iacute;s de Origem:</b> ".$mynacionalidade."<br>";

                /*
      					// não é obrigatório


			       		if(isset($dados['RGouRE'])){
     				      echo "<b>RG ou RE:</b> ".$dados['RGouRE']."<br>";
                }

      					if(isset($dados['SESC'])){
                  echo "<b>Cadastro SESC:</b> ".$dados['SESC']."<br>";
                }
                if(isset($dados['contato'])){
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

                //*/

                include "extra2.php";


      }//if info aupdated
			else {
                echo "<font face='Arial' size='2'><b>Erro na inclus&atilde;o do usu&aacute;rio!</b></font>";
                echo "<br>";
                echo "<a href='cadastrausuario.php' target='principal'>Tentar Novamente</a>";
      }

		}//conected

      //*/






		?>






















</BODY>
</HTML>
