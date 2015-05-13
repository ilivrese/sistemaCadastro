<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY bgcolor="pink" link="blue" vlink="blue">

<?php
     	    $conec;
			$bco;
			$conectou = 0;
//           	$idusuario = $_POST['idusuario'];

			include "conexao.php";


                    $stgsql4 = "select valor from infos where parametro = 'usuarioagora' ";
    				$res4 = mysql_query($stgsql4,$conec);
                    $dados4 = mysql_fetch_array($res4);
                    $linhas4 = mysql_num_rows($res4);
                    $idusuario = $dados4[0];

			
			$stgsql = "select * from usuarios
					where idusuario = '$idusuario'";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
					$dados = mysql_fetch_array($res);

					$nome = $dados['nome'];
					$datanascimento = $dados['nascimento'];
						$nascimento= trim($datanascimento);
						if (strstr($nascimento, '-')){
							$aux = explode ('-', $nascimento);
							$nascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];
						}
                     $nacionalidade = $dados['nacionalidade'];
                     $sexo = $dados['sexo'];
                       $preferencial = $dados['preferencial'];  


					

                  }
			
?>
<font size="2">
		<form enctype="multipart/form-data" name="form1" method="post" action="validaalteracao.php">
		<input name="idusuario" type="hidden" value="<?php echo $idusuario ; ?>">
		<table>
		<tr>
				<td width="28" valign="top">
					<div align="right">
						ID :
					</div>
				</td>
				<td>

					<?php echo "<font color='red'>".$idusuario."</font>"; ?>
				</td>
			</tr>
		
		
		
		
		
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						Nome :
					</div>
				</td>
				<td>
					<input type="text" name="txnome" size="50" maxlenght="60"
					value="<?php echo $nome; ?>">
				</td>
			</tr>
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						Nascimento :
					</div>
				</td>
				<td>
					<input type="text" name="txnascimento" size="10" maxlenght="10"
					value="<?php echo $nascimento; ?>">
					<font size="1"><i>DD/MM/AAAA</i></font>
				</td>
			</tr>
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						Sexo :
					</div>
				</td>
				<td>
<?php


if (($sexo == 'F') || ($sexo == 'M')){
if ($sexo =='F'){
	echo "<input type='radio' name='rdsexo' value='F' checked>F";
  echo "<input type='radio' name='rdsexo' value='M'>M";
 }
if ($sexo =='M'){
	echo "<input type='radio' name='rdsexo' value='F'>F";
     echo "<input type='radio' name='rdsexo' value='M' checked>M";
}
}
else {
 	echo "<input type='radio' name='rdsexo' value='F'>F";
     echo "<input type='radio' name='rdsexo' value='M'>M";
}
?>
				
				


				</td>
			</tr>
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						Origem (Pa&iacute;s):
					</div>
				</td>
				<td>
					<input type="text" name="txnacionalidade" size="20" maxlenght="20"
					value="<?php echo $nacionalidade; ?>">
				</td>
			</tr>
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						RG ou RE :
					</div>
				</td>
				<td>
				
<?php


if($dados['RGouRE']){
$RGouRE =  $dados['RGouRE'];
if ( (strstr($RGouRE, "RG")) ||  (strstr($RGouRE, "RE")) )    {
    if (strstr($RGouRE, "RG")){
					$aux = explode ("RG", $RGouRE);
					$nRG = $aux[1];
echo "  <input type='radio' name='rdRGouRE' value='RG' checked>RG";
echo "<input type='radio' name='rdRGouRE' value='RE'>RE";
echo "<input type='text' name='txRGouRE' size='20' maxlenght='20'
					value='".$nRG."'";
            }

    if (strstr($RGouRE, "RE")){
					$aux = explode ("RE", $RGouRE);
					$nRE = $aux[1];
echo "  <input type='radio' name='rdRGouRE' value='RG'>RG";
echo "<input type='radio' name='rdRGouRE' value='RE' checked>RE";
echo "<input type='text' name='txRGouRE' size='20' maxlenght='20'
					value='".$nRE."'";

				}
}
}
else {
echo "  <input type='radio' name='rdRGouRE' value='RG'>RG";
echo "<input type='radio' name='rdRGouRE' value='RE'>RE";
echo "<input type='text' name='txRGouRE' size='20' maxlenght='20'";

}
echo " <br><br> <input type='radio' name='rdRGouRE' value=''>Nenhum ";
				

?>
					
					
					
					
				</td>
			</tr>
			<tr>
				<td width="28%" valign="top">
					<div align="right">
						SESC :
					</div>
				</td>
				<td>
<?php





					

if($dados['SESC']){
$SESC = $dados['SESC'];
if (strstr($SESC, "COM")){
					$aux = explode ("COM", $SESC);
					$nCOM = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM' checked>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nCOM."'";
				}

if (strstr($SESC, "USU")){
					$aux = explode ("USU", $SESC);
					$nCOM = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM'>COM";
echo "<input type='radio' name='rdSESC' value='USU' checked>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nUSU."'";
				}

if (strstr($SESC, "ACN")){
					$aux = explode ("ACN", $SESC);
					$nACN = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM'>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'checked>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nACN."'";
				}
if (strstr($SESC, "ALI")){
					$aux = explode ("ALI", $SESC);
					$nALI = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM' checked>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI' checked>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nALI."'";
            }
            
            if (strstr($SESC, "MIS")){
					$aux = explode ("MIS", $SESC);
					$nCOM = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM'>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS' checked>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nCOM."'";
            }
            if (strstr($SESC, "SRV")){
					$aux = explode ("SRV", $SESC);
					$nCOM = $aux[1];
echo "  <input type='radio' name='rdSESC' value='COM'>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV' checked>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$nCOM."'";
				}
            
            
            
            
            
            
}
else {
echo "  <input type='radio' name='rdSESC' value='COM'>COM";
echo "<input type='radio' name='rdSESC' value='USU'>USU";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN";
echo "<br>";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI";
echo "<input type='radio' name='rdSESC' value='MIS'>MIS";
echo "<input type='radio' name='rdSESC' value='SRV'>SRV";
echo "<br>";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'";

}
echo "<br><br>";
echo "  <input type='radio' name='rdSESC' value=''>Nenhum";


?>
				</td>
			</tr>
			
			
			

			
			
			<tr>
						
				<td width="28%" valign="top">
            
					<div align="right">
                    Telefone:
					</div>
				</td>
				<td>
					<input type="text" name="txcontato" size="50" maxlenght="50"
                    <?php
                    if (isset($dados['contato'])){
                    $contato = $dados['contato'];
                    echo "value='".$contato."'>";

                    }
                    else{
                    echo ">";
                    }
                     ?>
				</td>
			</tr>
		


			<tr>
				<td width="25%" valign="top">
					<div align="right">
						e-mail :
					</div>
				</td>
				<td>
					<input type="text" name="txemail" size="40" maxlenght="50"
						<?php
                    if (isset($dados['email'])){
                    	$email = $dados['email'];
                    	echo "value='".$email."'>";
                    }
                    else{
                    	echo ">";
                    }
                     ?>
					
				</td>
			</tr>

			<tr>
				<td width="25%" valign="top">
					<div align="right">
						foto :
					</div>
				</td>
				<td>
					<!--
					<input type="text" name="txfoto" size="40" maxlenght="50"
					<?php
                    if (isset($dados['foto'])){
                    	$foto = $dados['foto'];
                    	echo "value='".$foto."'>";
                    }
                    else{
                    	echo ">";
                    }
                     ?> -->
                    <?php 
                    if (isset($dados['foto'])){
                    	echo '<img src="fotos/'.$dados['foto'].'" width="100px" height="100px" /><br>';
                    }
                    ?>
                    <input type="file" name="txfoto" />
				</td>
			</tr>


        
        
        
        	<tr>
				<td width="28%" valign="top">
					<div align="right">
						&Eacute; preferencial?
					</div>
				</td>
				<td>
                <?php
                    
if (($preferencial == 'S') || ($preferencial == 'N')){
if ($preferencial =='S'){
	echo "<input type='radio' name='rdpreferencial' value='S' checked>SIM";
  echo "<input type='radio' name='rdpreferencial' value='N'>N&Atilde;O";
 }
if ($preferencial =='N'){
	echo "<input type='radio' name='rdpreferencial' value='S'>SIM";
  echo "<input type='radio' name='rdpreferencial' value='N' checked>N&Atilde;O";
}
}
else {
 		echo "<input type='radio' name='rdpreferencial' value='S'>SIM";
  echo "<input type='radio' name='rdpreferencial' value='N' checked>N&Atilde;O";
}
                     ?>
				</td>
			</tr>
        
        
        
        
        
        
        
        
        
        
        
        
        <tr>
				<td width="28%" valign="top">
					<div align="right">
						OBS :
					</div>
				</td>
				<td>
					<input type="text" name="txOBS" size="50" maxlenght="100" <?php

                    if (isset($dados['OBS'])){
                     $OBS  = $dados['OBS'];
                    echo "value='".$OBS."'>";

                    }
                    else{
                    echo ">";
                    }
                     ?>

				</td>
			</tr>
			<tr>
				<td width="28%">
					&nbsp;
				</td>
				<td>
					<input type="submit" name="Submit" value="Alterar">
					<input type="reset" name="Submi2" value="Limpar">
				</td>
			</tr>
			<tr>
				<td width="28%">
					&nbsp;
				</td>

			</tr>



		</table>
		</form>

</font>

</BODY>
</HTML>
