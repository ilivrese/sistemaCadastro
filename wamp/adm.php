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
tipo de agenda (discrimine os horários para uso livre).</li>";

echo "<li><a href='alteragenda.php'>Apaga o tipo de agenda do dia</a>: use essa ferramenta
caso haja necessidade de alterar o tipo de agenda do dia ao longo do mesmo.</li>";

echo "<li><a href='cadastrooficina.php'>Cadastrar uma nova oficina</a>: cadastre as
oficinas do(s) próximo(s) mês(meses).</li>";

echo "<li><a href='diasanteriores.php'>Históricos</a>: consulta às
listas de usuários dos dias anteriores, histórico dos micros e histórico de usuários.</li>";

echo "<li><a href='ofic2010.php'>Oficinas-2010</a>: Oficinas do ano de 2010, com dados
de todos os participantes.</li>";

echo "<li><a href='fixbug.php'>Conserta planilhas na marra!</a>: Remove e insere horários arbitrários.</li>";





// echo "<li><a href='consultalog.php'>Consulta Arquivo Log</a>: verifica Log do dia.</li>";

echo "</ul>";
?>
</BODY>
</HTML>
