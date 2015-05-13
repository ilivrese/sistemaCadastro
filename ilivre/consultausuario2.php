<html>
    <head>
	    <title>
			Consultar um Usu&aacute;rio
		</title>
	</head>
	<body  link="blue" vlink="blue">
<?php
echo "<font size='2'>";
echo "Buscar por:";


echo "<form name='form1' method='post' action='buscausuario.php'> ";
echo "<input type='hidden' name='horario' value='".$horario."'> ";
echo "<input type='hidden' name='micro' value='".$micro."'>";
echo "ID:<br> ";
echo "<input type='text' name='txidusuario' size='9' maxlenght='9'
					value='".$idusuario."'>";
echo "<br>";
echo "<input type='submit' name='Submit' value='Buscar'> ";
echo "<input type='reset' name='Submi2' value='Limpar'>";
echo "</form>";

echo "<form name='form2' method='post' action='buscausuario.php'> ";
echo "<input type='hidden' name='horario' value='".$horario."'> ";
echo "<input type='hidden' name='micro' value='".$micro."'> ";
echo "Nome :<br> ";
echo "<input type='text' name='txnome' size='40' maxlenght='60'
					value='".$nome."'>";
echo "<br>";
echo "<input type='submit' name='Submit' value='Buscar'>";
echo "<input type='reset' name='Submi2' value='Limpar'>";
echo "</form>";

echo "<form name='form3' method='post' action='buscausuario.php'> ";
echo "<input type='hidden' name='horario' value='".$horario."'> ";
echo "<input type='hidden' name='micro' value='".$micro."'>";
echo "RG ou RE :<br>  ";
echo "<input type='radio' name='rdRGouRE' value='RG'>RG ";
echo "<input type='radio' name='rdRGouRE' value='RE'>RE ";
echo "<br>";
echo "<input type='text' name='txRGouRE' size='20' maxlenght='20'
					value='".$RGouRE."'>";
echo "<br>";
echo "<input type='submit' name='Submit' value='Buscar'>";
echo "<input type='reset' name='Submi2' value='Limpar'> ";
echo "</form> ";

echo "<form name='form4' method='post' action='buscausuario.php'>";
echo "<input type='hidden' name='horario' value='".$horario."'>";
echo "<input type='hidden' name='micro' value='".$micro."'>";
echo "SESC :<br>";
echo "<input type='radio' name='rdSESC' value='COM'>COM  ";
echo "<input type='radio' name='rdSESC' value='USU'>USU ";
echo "<input type='radio' name='rdSESC' value='ACN'>ACN ";
echo "<input type='radio' name='rdSESC' value='ALI'>ALI  ";
echo "<br> ";
echo "<input type='text' name='txSESC' size='20' maxlenght='20'
					value='".$SESC."'> ";
echo "<br>";
echo "<input type='submit' name='Submit' value='Buscar'> ";
echo "<input type='reset' name='Submi2' value='Limpar'>  ";
echo "</form> ";

echo "</font>";

?>
</body>
</html>
	
