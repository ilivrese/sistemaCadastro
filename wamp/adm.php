<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
 <body link="blue" vlink="blue">
<?php
$hoje = date("Y-m-d", time());
echo "<ul><b>Ferramentas administrativas</b>";
echo "<br>";

echo "<li><a href='dois.php'>Cadastrar um novo tipo de agenda</a>: cadastre um novo
tipo de agenda (discrimine os hor�rios para uso livre).</li>";

echo "<li><a href='alteragenda.php'>Apaga o tipo de agenda do dia</a>: use essa ferramenta
caso haja necessidade de alterar o tipo de agenda do dia ao longo do mesmo.</li>";

echo "<li><a href='cadastrooficina.php'>Cadastrar uma nova oficina</a>: cadastre as
oficinas do(s) pr�ximo(s) m�s(meses).</li>";

echo "<li><a href='diasanteriores.php'>Hist�ricos</a>: consulta �s
listas de usu�rios dos dias anteriores, hist�rico dos micros e hist�rico de usu�rios.</li>";

echo "<li><a href='ofic2010.php'>Oficinas-2010</a>: Oficinas do ano de 2010, com dados
de todos os participantes.</li>";

echo "<li><a href='fixbug.php'>Conserta planilhas na marra!</a>: Remove e insere hor�rios arbitr�rios.</li>";





// echo "<li><a href='consultalog.php'>Consulta Arquivo Log</a>: verifica Log do dia.</li>";

echo "</ul>";
?>
</BODY>
</HTML>
