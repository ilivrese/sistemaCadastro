
<?php


            $conec;
			$bco;
			$conectou = 0;

			include "conexao.php";
			$hoje = date("Y-m-d", time());
			if ($conectou) {



 $pesquisa = "select data from agenda order by data desc";
  $res = mysql_query($pesquisa,$conec);
  $dados = mysql_fetch_array($res);
  $data = $dados['data'];
  
  

 
  $flag = 0;
  

 while ($flag == 0){
  $proximodia = $data;
  
  $dados = mysql_fetch_array($res);
  $data = $dados['data'];

 	if($data == $hoje){
 		$flag = 1;
 		}

            }



$stgsql00 = "update infos set valor='$proximodia' where parametro='proximodia'";
   $res00 = mysql_query($stgsql00, $conec);



}

?>
