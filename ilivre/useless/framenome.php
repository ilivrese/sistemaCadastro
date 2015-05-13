<html>
 <head><title></title>
 </head>
 <body>
 
<table align="left" border="1">
<tr>
 <td valign="top">


<?php


$horario = $_POST['horario'];
$micro = $_POST['micro'];


     echo "<font color='red'><b>Nome: ".$nome."</b></font><br>";
					echo "<b>ID:</b> ".$myidusuario."<br>";
					echo "<b>Data de Nascimento:</b> ".$mynascimento."<br>";
					echo "<b>RG ou RE:</b> ".$myRGouRE."<br>";
					echo "<b>Cadastro SESC:</b> ".$mySESC."<br>";
					echo "<b>Outro tipo de identifica&ccedil;&atilde;o:</b> ".$myOUTRO."<br>";
                    echo "<b>OBS:</b><font color='red'> ".$myOBS."</font><br>";

			        
			        $idusuario = $myidusuario;
?>
</td>
</tr>

<tr><td align="center">

<?php include "extra2.php"; ?>

</td><tr>
</table>

</body>
</html>
