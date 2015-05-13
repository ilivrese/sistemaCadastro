<html>
	<head>
		<title>
			C.U.O.I.L.-V2.0 - Cadastro de Usu&aacute;rios  e Oficinas da Internet Livre - SESC Carmo
		</title>
	</head>

   <!--scrolling="no" -->

<?php


$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());

//echo "<!--  Hoje: ".$hoje." - ".$hojeok." -->";

?>

<frameset rows="50, *,115" border="1">

<!-- <frameset cols="*, 300"> -->
          <frame src="cabecalho.php" scrolling="no" border="1">
<!--         <frame src="contaprint.php" scrolling="no" border="1">
</frameset>
-->

<frameset cols="550, *">
          <frame src="tipodeagenda.php"  border="1" name="principal">
          <frame src="vazia.php"  border="1" name="lado">
</frameset>
<frame src="rodape.php" scrolling="no" border="1">

</frameset>






<!--
 <frameset rows="50,*,115" border="1">
          <frame src="cabecalho.php" scrolling="no" border="1">




<frameset cols="550, *">
          <frame src="tipodeagenda.php"  border="1" name="principal">
          <frame src="vazia.php"  border="1" name="lado">
</frameset>

<frameset cols="550, * " border="1">
          <frame src="espera.php" border="1">
<frame src="rodape2.php" scrolling="no" border="1">
              <frame src="vazia.php" scrolling="no" border="1">

</frameset>


</frameset>

-->
</html>

