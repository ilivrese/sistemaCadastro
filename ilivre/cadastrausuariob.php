<html>
    <head>
	    <title>
			Cadastrando um Usu&aacute;rio
		</title>
	</head>
  <body link="blue" vlink="blue">
<?php

// por enquanto, só pode cadastrar a partir do nome
    $nome = $_POST['nome'];
    
    /*
    $numeroRGouRE = $_POST['numeroRGouRE'];
    $rgoure = $_POST['rgoure'];
    $sesc =  $_POST['sesc'];
    $numeroSESC = $_POST['numeroSESC'];



    $OUTRO =  $_POST['OUTRO'];


      */


?>
	

				
		<form name="form1" method="post" action="validacadastro.php">
		<table>
			<tr>
				<td width="25%">
					<div align="right">
						Nome :
					</div>
				</td>
				<td>
					<input type="text" name="txnome" size="40" maxlenght="60"
					value="<?php echo $nome; ?>">
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						Nascimento :
					</div>
				</td>
				<td>
					<input type="text" name="txnascimento" size="10" maxlenght="10">
					<font size="1"><i>DD/MM/AAAA</i></font>
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						Sexo :
					</div>
				</td>
				<td>
					<input type="radio" name="rdsexo" 	value="F">F
					<input type="radio" name="rdsexo" value="M">M
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						Pa&iacute;s de Origem :
					</div>
				</td>
				<td>
					<input type="text" name="txnacionalidade" size="20" maxlenght="20">
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						RG ou RE :
					</div>
				</td>
				<td>
					<input type="radio" name="rdRGouRE" value="RG">RG
					<input type="radio" name="rdRGouRE" value="RE">RNE
					<input type="radio" name="rdRGouRE" value="PA">PASS
					<input type="radio" name="rdRGouRE" value="ES">Estrangeiro
					<input type="text" name="txRGouRE" size="20" maxlenght="20">
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						SESC :
					</div>
				</td>
				<td>
					<input type="radio" name="rdSESC" value="COM">COM
					<input type="radio" name="rdSESC" value="USU">USU
					<input type="radio" name="rdSESC" value="MIS">MIS
					<input type="radio" name="rdSESC" value="SER">SER
					<input type="radio" name="rdSESC" value="ACN">ACN
					<input type="radio" name="rdSESC" value="ALI">ALI
					<input type="text" name="txSESC" size="20" maxlenght="20">
				</td>
			</tr>

			<tr>
				<td width="25%">
					<div align="right">
						Contato :
					</div>
				</td>
				<td>
					<input type="text" name="txcontato" size="50" maxlenght="50">
				</td>
			</tr>
			<tr>
				<td width="25%">
					<div align="right">
						OBS :
					</div>
				</td>
				<td>
					<input type="text" name="txOBS" size="50" maxlenght="100">
				</td>
			</tr>
			
          <tr>
				<td width="25%">
					<div align="right">
      É preferencial?
					</div>
				</td>
				<td>
     	        	<input type="radio" name="rdpref" value="S">S
					<input type="radio" name="rdpref" value="N">N
				</td>
			</tr>





			
			<tr>
				<td width="25%">
					&nbsp;
				</td>
				<td>
					<input type="submit" name="Submit" value="Cadastrar">
				<!--	<input type="reset" name="Submi2" value="Limpar">  -->
				</td>
			</tr>
			<tr>
				<td width="25%">
					&nbsp;
				</td>

			</tr>
			
			
			
		</table>
		</form>
		
		
		

		
		
		
	</body>
</html>
