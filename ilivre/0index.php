<html>
<head>
<title>Internet Livre X-Press</title>


<style type="text/css">a {text-decoration: none}</style>



<script type="text/javascript" src="http://localhost/ilivre/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="http://localhost/ilivre/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
<script type="text/javascript" src="http://localhost/ilivre/jquery-ui-1.10.4/js/jquery-ui-1.10.4.min.js"></script>


<script type="text/javascript"> 
$(document).ready(function(){
	$("#txnome").autocomplete({source: "http://localhost/ilivre/0livesearch.php", minLength:2});
});


</script>








<!-- FUNÇÃO PARA DATA DE NASCIMENTO COM BARRAS AUTOMÁTICAS 
<script>
function dataConta(c){
  if(c.value.length ==2){
        c.value += '/';
  }
   if(c.value.length ==5){
        c.value += '/';
  }
}
</script>
 -->
 
</head>

<body vlink="black" alink ="blue">

<table width = "400" border ="0" bgcolor="lightyellow">
<tr>
 <td>
 <a href="0index.php" >
<p align="center"><b>INTERNET LIVRE SESC CARMO X-PRESS</b></p>
</a> 
 </td>
</tr>


<!--INICIO DE UMA LINHA PADRÃO-->
<tr>
 <td>
 <p align="center">
 <a href="0index.php?usu=1">
 Consultar Usu&aacute;rio 
 </a>
 </td>
</tr>

<?php
 if(isset($_GET['usu'])){
	include "0usu.php";	
 	}
?> 
<!--FIM DE UMA LINHA PADRÃO-->


<!--INICIO DE UMA LINHA PADRÃO-->
<tr>
 <td>
 <p align="center">
 <a href="0index.php?vagas=1">
 Consultar Vagas 
 </a>
 </td>
</tr>

<?php
 if(isset($_GET['vagas'])){
	include "0consulta.php";	
 	}
?> 
<!--FIM DE UMA LINHA PADRÃO-->

<!--INICIO DE UMA LINHA PADRÃO-->
<tr>
 <td>
 <p align="center">
 <a href="0index.php?ofic=1">
 Consultar Oficinas 
 </a>
 </td>
</tr>

<?php
 if(isset($_GET['ofic'])){
	include "0consulta.php";	
 	}
?> 
<!--FIM DE UMA LINHA PADRÃO-->






</table>


<!-- teste 
<form>
Data nascimento:<input type="text" name="nascimento" maxlength="10"
 onkeyup="dataConta(this);" />
</form>
 -->


</body>
</html>