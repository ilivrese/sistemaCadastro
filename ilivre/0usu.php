<?php


echo "<tr bgcolor='white'>";
echo "<td>";

echo "<table widht='400' align='center'><tr>";




if(isset($_GET['nom'])){
 echo "<td width='100' align='center'><a href='0index.php?usu=1&nom=1'>
 <font color='red'><b>Nome</b></font></a></td>";	

 	}
else{
 	echo "<td width='100' align='center'><a href='0index.php?usu=1&nom=1'>Nome</a></td>";
 	}
 	
 	
 	 if(isset($_GET['id'])){
	    echo "<td width='100' align='center'><a href='0index.php?usu=1&id=1'>
	    <font color='red'><b>ID</b></font></a></td>";	
	 	} 
	 	else{
	 		echo "<td width='100' align='center'><a href='0index.php?usu=1&id=1'>ID</a></td>";
	 		}	
 	
 	 	  if(isset($_GET['doc'])){
			echo "<td width='100' align='center'><a href='0index.php?usu=1&doc=1'>
			<font color='red'><b>Doc</b></font></a></td>";	
	 	}
	 	else{
	 		echo "<td width='100' align='center'><a href='0index.php?usu=1&doc=1'>Doc</a></td>";
	 		}
 	

		 if(isset($_GET['sesc'])){
	       echo "<td width='100' align='center'><a href='0index.php?usu=1&sesc=1'>
	       <font color='red'><b>Sesc</b></font></a></td>";	
	   	}
	   	else {
	   		  echo "<td width='100' align='center'><a href='0index.php?usu=1&sesc=1'>Sesc</a></td>";
	   		}
echo "</tr>";
echo "</table>";






if(isset($_GET['nom'])){
	
 echo "<tr><td>";
	
 echo "<form name='consultausuario' action='0index.php?usu=1' method='post'>";
 echo "<input type='text' id='txnome' name='txnome' size ='40' maxlengh='100'>";
 echo "<input type='submit' value='>'>";
 echo "</form>";
 
 echo "</td></tr>";
 	}
 	 
 	 
 	if(isset($_POST['txnome'])){
    $letraounome = $_POST['txnome'];       
				
				  
   
   echo "<tr bgcolor='white'><td>";	
   echo $_POST['txnome']; 
  	
 		 echo "<tr><td>";
 		}
























echo "</table>";



 	
 	



echo "</td>";
echo "</tr>";


?>