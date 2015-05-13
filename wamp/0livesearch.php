<?php
 $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";


			if ($conectou) {

				
  $stgsql = "select * from usuarios where nome regexp'^$letraounome' ORDER by nome ASC";
				$res = mysql_query($stgsql,$conec);
				//$linhas = mysql_num_rows($res);
				//$linhaini = 0;
				
		
if (($res) && ($linhas)){

                  while ($linhaini < $linhas){
					 	  $dados = mysql_fetch_array($res);
                    $nome = $dados['nome'];
                    $idusuario = $dados['idusuario'];
                    }
                    }
          
  $data = array();
 if ( $res && mysql_num_rows($res) )
{
	

	while( $row = mysql_fetch_array($res, MYSQL_ASSOC) )
	{
		$data = array(
			'label' => $row['nome'] .', '. $row['idusuario'] ,
			'value' => $row['nome']
		);
	}
}   
                    
  
  // it works                  
/*
$data = array (
	array("label"  => "ANA Barbosa, 05", "value" => "ANA Barbosa"),
   array("label"  => "ANA Barbieri, 06", "value" => "ANA Barbieri")
);     //*/               

*/
                    
 // jQuery wants JSON data
echo json_encode($data);
flush();                   
//}
 

?>

