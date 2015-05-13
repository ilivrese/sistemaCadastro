		<?php
 $conec;
			$bco;
			$conectou = 0;
 			include "conexao.php";

			if ($conectou) {
				
          	$letraounome = $_POST['txnome'];  
            
				$stgsql = "select * from usuarios where nome regexp'^$letraounome' ORDER by nome aSC";
				$res = mysql_query($stgsql,$conec);
				$linhas = mysql_num_rows($res);
            $linhaini = 0;
              
                
if (($res) && ($linhas)){
            echo "<table border='1'>";
            echo "<tr>";
                  while ($linhaini < $linhas){
					$dados = mysql_fetch_array($res);
                    $nome = $dados['nome'];
                    $idusuario = $dados['idusuario'];

                      $stgsql2 = "select nascimento from usuarios where idusuario = '$idusuario'";
                      $res2 = mysql_query($stgsql2,$conec);
				      $dados2 = mysql_fetch_array($res2);
                      $datanascimento = $dados['nascimento'];
                      $aux = explode ("-", $datanascimento);
					  $nascimento = $aux[2] . "/". $aux[1] . "/" . $aux[0];

                    echo "<td>";
                     echo $nome;
                    echo "</td>";
                    echo "<td>";
                     echo $idusuario;
                    echo "</td>";
                    echo "<td>";
                     echo $nascimento;
                    echo "</td>";
                    echo "<td>";

                    echo "<form name='form1' method='post' action='buscausuario.php'>";
                    echo "<input type='hidden' name='encontrado' value='".$idusuario."'>";
                    echo "<input type='submit' name='submit' value='>'>";
                    echo "</form>" ;
                   
                   
                   
                    echo "</td>";
                    echo "</tr>";
                    
                    
                    $linhaini++;
              }
              
              echo "</table>";
                     echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='hidden' name='nome' value='".$letraounome."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar novo'>";
					 echo "</form>";
              
              
              
              
              
}
	else {
					echo "Nome <b>".$letraounome."</b> n&atilde;o encontrado.<br>";
					echo "<br><a href='consultausuario.php'>Voltar</a>";

					 echo "<form method='post' name='volta2' action='cadastrausuario.php'>";
                     echo "<input type='hidden' name='nome' value='".$letraounome."'>";
                     echo "<input type='submit' name='submit' value='Cadastrar'>";
					 echo "</form>";
					 

					 
					 
				}

}

		?>

