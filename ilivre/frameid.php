<html>
 <head><title></title>
 </head>
 <body link="blue" vlink="blue">
 
<table align="left" border="1">
<tr>
 <td valign="top">

<?php




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
                    // novo 15abr2014
       
					

					
					
					
					
				    echo "<font color='red'><b>ID: ".$idusuario."</b></font><br>";
				    //echo $dados['foto']." - ".sizeof($dados['foto'])."<br>";
				    if ( isset($dados['foto']) ){
						//echo "<b>Foto:</b> ".$dados['foto']."<br>";
						echo '<img src="fotos/'.$dados['foto'].'" width="340px" height="250px" /><br><br>';
                 	}
                 	else{
                 		?>
                 		<form enctype="multipart/form-data" method="POST" name="form1" action="uploadfoto.php">
                 			<input type="hidden" name="txuserid" value="<?php echo $idusuario;?>" />
                 			<input type="file" name="txfoto" />
                 			<input type="submit" name="Submit" value="Enviar">
                 		</form>
                 		<?php
                 	}
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
                 	if (isset($dados['email'])){
						echo "<b>Email:</b> ".$dados['email']."<br>";
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
                     include "testeidade.php";
					
					
					
					
?>
</td>
</tr>
<tr>
<td align="center">

<?php
include "extra2.php";

?>




</td></tr>

</table>

</body>
</html>
