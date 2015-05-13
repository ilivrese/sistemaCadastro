
  <html>
	<head>
	    <title>Valida cadastro</title>
	</head>
	<body bgcolor="#FFFFFF"  link="blue" vlink="blue">
	
	
	

	    <?php
	    

	    
	    
	    

		    $conec;
			$bco;
			$conectou = 0;


   	     $horarioescolhido = $_POST['horarioescolhido'];
	     echo $horarioescolhido;
	     $microescolhido = $_POST['microescolhido'];
	     echo $microescolhido;
         $idusuarioescolhido = $_POST['idusuarioescolhido'];
	     echo $idusuarioescolhido;
	     
	     
	     
	     
			include "conexao.php";
			if ($conectou) {

                
               $stgsql = "UPDATE ilivre.dia SET
               `idusuario` = '$idusuarioescolhido'
               WHERE CONVERT(dia.horario USING utf8) = '$horarioescolhido'
               AND dia.micro = '$microescolhido' LIMIT 1;";
                
				$res = mysql_query($stgsql, $conec);
				if ($res) {
					echo "OK";
				}
				else {
					echo "erro";
				}

			}












		?>
	</body>
</html>

