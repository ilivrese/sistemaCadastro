<html>
    <head>
	    <title>
			Consultar um Usu&aacute;rio
		</title>
	</head>
	<body  link="blue" vlink="blue">
<font size="2">
Buscar por:



				<form name="form1" method="post" action="buscausuario.php">
					ID:<br>
                    <input type="text" name="txidusuario" size="9" maxlenght="9">
                    <br>
					<input type="submit" name="Submit" value="Buscar">
					</form>

				<form name="form2" method="post" action="buscausuario.php">
   					<font color="red">Nome</font> <font size="1">(completo ou parcial)</font> :<br>
                    <input type="text" name="letraounome" size="40" maxlenght="60">
                	<br>
					<input type="submit" name="Submit" value="Buscar">
					</form>

				<form name="form3" method="post" action="buscausuario.php">
					RG ou RE :<br>
                    <input type="radio" name="rdRGouRE" value="RG">RG
					<input type="radio" name="rdRGouRE" value="RE">RE
					<br>
					<input type="text" name="txRGouRE" size="20" maxlenght="20">
					<br>
					<input type="submit" name="Submit" value="Buscar">
					</form>

				<form name="form4" method="post" action="buscausuario.php">
 					SESC :           <br>
                    <input type="radio" name="rdSESC" value="COM">COM
					<input type="radio" name="rdSESC" value="USU">USU
					<input type="radio" name="rdSESC" value="ACN">ACN
					<input type="radio" name="rdSESC" value="ALI">ALI
					<br>
					<input type="text" name="txSESC" size="20" maxlenght="20">
					<br>
					<input type="submit" name="Submit" value="Buscar">
					</form>

</font>

</body>
</html>

