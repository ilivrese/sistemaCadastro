<?php
  include "cabecalhoconsulta.php" ;
  $linhas = mysql_num_rows($res) ;
  $linhasini = 1 ;
  $dados = mysql_fetch_array($res) ;

  echo "<table width='100%' border='0' cellspacing='0'>" ;

  while ($linhasini <= $linhas) {
    $matricula = $dados['matricula'] ;
    $nome = $dados['nome'] ;
    $endereco = $dados['endereco'] ;
    $estado = $dados['cidade'] ;
    echo "  <tr bgcolor='#FFFFFF'>" ; 
    echo "    <td width='12%'><b><font face='Geneva, Arial, Helvetica, san-serif' size='2'>$matricula</font></b></td>" ;
    echo "    <td width='37%'><b><font face='Geneva, Arial, Helvetica, san-serif' size='2'>$nome</font></b></td>" ;
    echo "    <td width='44%'><b><font face='Geneva, Arial, Helvetica, san-serif' size='2'>$endereco</font></b></td>" ;
    echo "    <td width='7%'><b><font face='Geneva, Arial, Helvetica, san-serif' size='2'>$estado</font></b></td>" ;
    echo "  </tr>" ;
    $linhasini ++ ;
    $dados = mysql_fetch_array($res) ;
	    
  }

  echo "</table>" ;
  echo "<br>" ;
  echo "<font face='Verdana, Arial, Helvetica, sans-serif' size='2'><a href='frmconsulta.php'>Retorna</a></font>";

?>


