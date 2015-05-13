<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
 <body BGCOLOR="yellow"link="blue" vlink="blue" topmargin="0">
<?php

$conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {




	$stgsql = "select * from INFOS";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res)  ;
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {

                for ($i=0; $i < $linhas; $i++){
         if ($dados['parametro'] == "pb"){
         $pb = $dados['valor']; }
         else{
              if ($dados['parametro'] == "col"){
              $col = $dados['valor'];   }
              else {
                   if ($dados['parametro'] == "img"){
                   $img = $dados['valor'];   }
                   else{
                          if ($dados['parametro'] == "erro"){
                          $erro = $dados['valor'];   }
                         }   } }

                         	$dados = mysql_fetch_array($res)  ;
                         }

                         }
                         
                         
                         
                         
                         
              if ((isset($_POST['print'])) && (isset($_POST['numero']))){
                         
                   if ($_POST['print'] == 'pb'){
                       $pbmais = $_POST['numero'];
			   $pb = $pb + $pbmais;

			   $stgsql = "UPDATE INFOS SET
               `valor` = '$pb'
               WHERE parametro = 'pb'";
               $res = mysql_query($stgsql, $conec);
                }
                   if($_POST['print'] == 'col'){
                     $colmais = $_POST['numero'];
			   $col = $col + $colmais;

			   $stgsql = "UPDATE INFOS SET
               `valor` = '$col'
               WHERE parametro = 'col'";
               $res = mysql_query($stgsql, $conec);
                }
                
                    if($_POST['print'] == 'img'){
                
                      $imgmais = $_POST['numero'];
			   $img = $img + $imgmais;

			   $stgsql = "UPDATE INFOS SET
               `valor` = '$img'
               WHERE parametro = 'img'";
               $res = mysql_query($stgsql, $conec);
                
                  }
                
                
                     if($_POST['print'] == 'erro'){

                          $erromais = $_POST['numero'];
			   $erro = $erro + $erromais;

			   $stgsql = "UPDATE INFOS SET
               `valor` = '$erro'
               WHERE parametro = 'erro'";
               $res = mysql_query($stgsql, $conec);

                  }

                
                
                
                         
                         
              }
                         




    	$stgsql = "select * from INFOS";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res)  ;
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {

                for ($i=0; $i < $linhas; $i++){
         if ($dados['parametro'] == "pb"){
         $pb = $dados['valor']; }
         else{
              if ($dados['parametro'] == "col"){
              $col = $dados['valor'];   }
              else {
                   if ($dados['parametro'] == "img"){
                   $img = $dados['valor'];   }
                   else{
                          if ($dados['parametro'] == "erro"){
                          $erro = $dados['valor'];   }
                         }   } }

                         	$dados = mysql_fetch_array($res)  ;
                         }

                         }
                         
                         
                         
                         
                         
                         
                         
                         

  echo "
<form name='formp' method='post' action='contaprint.php'>
 <input type='radio' name='print' 	value='pb' checked><font size='2' face='arial'>P&B</font>
  <input type='radio' name='print' 	value='col'><font size='2' face='arial'>Col   </font>
   <input type='radio' name='print' 	value='img'><font size='2' face='arial'>Img   </font>
    <input type='radio' name='print' 	value='erro'><font size='2' face='arial'>Erro </font>
    <input type='text' name='numero' size='3' maxlenght='3'>
 	<input type='submit' name='Submit' value='+'>        ";
 	
 	
 	
 	
echo "<table border='1'>";
echo "<tr>
     <td width='30' align='center'><font size='2' face='arial'>P&B</font></td>
     <td width='30' align='center' bgcolor='lightyellow'><font size='2' face='arial'><b>".$pb."</b></font></td>
     <td width='30' align='center'><font size='2' face='arial'>Col</font></td>
     <td width='30' align='center' bgcolor='lightyellow'><font size='2' face='arial'><b>".$col."</b></font></td>
     <td width='30' align='center'><font size='2' face='arial'>Img</font></td>
      <td width='30' align='center' bgcolor='lightyellow'><font size='2' face='arial'><b>".$img."</b></font></td>
     <td width='30' align='center'><font size='2'face='arial'>Erro</font></td>
          <td width='30' align='center' bgcolor='lightyellow'><font size='2' face='arial'><b>".$erro."</b></font></td>
     <td width='30' align='center'>
     
     </td>

    </td>
       </tr>";

     
echo "</table>";


}

?>
</BODY>
</HTML>
