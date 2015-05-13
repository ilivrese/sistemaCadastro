<HTML>
<HEAD>
 <TITLE>Estatistico</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">

<font face="Arial" size="2">
Escolha o ano e o mês:
</font>
<br>
<form name="estatistico"  method="post" action="estatistico2.php">
<select name="ano">

<option value="2008">2008
<option value="2008">2009
<option value="2013" selected>2013
</select>
<select name="mes">
<option name="01">01
<option name="02">02
<option name="03">03
<option name="04">04
<option name="05" selected>05
<option name="06">06
<option name="07">07
<option name="08">08
<option name="09">09
<option name="10">10
<option name="11">11
<option name="12">12
</select>
<br>
<input type="submit" name="submit" value="OK">
</form>
<br>
<a href="estatistico_diario.php" >Estatístico do dia</a>
<br>
<form name="estatistidodediaok" method="post" action="estatistico_diario_diaok.php">
Estatístico do dia:
<input type="text" name="diaok" size="10" maxlengh="10">
<input type="submit" name="submit" value="OK">

</form>
<br><a href="estatistico2013.php">Dados GEAVT 2013</a></br>
</BODY>
</HTML>
