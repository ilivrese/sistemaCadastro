<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY  link="blue" vlink="blue">
<?PHP

echo "Busca por String mais à esquerda";
echo "<br>";
echo "<font size='1'><i>Digite a letra ou um termo(primeiro nome) inicial</i></font>";

echo "<form name='letraounome' action='testebd.php' method='post'>";
echo "<input type='text' name='letraounome' size='60' maxlenght='60'>";
echo "<input type='submit' name='Submit' value='Buscar'>";
echo "</form>";

?>
</BODY>
</HTML>
