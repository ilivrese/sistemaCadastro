<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
 <body link="blue" vlink="blue">
<?php

$conec;
$bco;
$conectou = 0;
$hoje = date("Y-m-d", time());
$hojeok = date("d/m/Y", time());
include "conexao.php";

 if ($conectou) {

   if (isset($_GET['fix'])){
       // echo "yes";
           $fix = $_GET['fix'];
       //    echo $fix;
      }
   else{
        $fix=0;
        }
        
        
 
    if (isset($_GET['delhorario'])){
       // echo "yes";
           $delhorario = $_GET['delhorario'];
       //    echo $fix;
      }
   else{
        $delhorario=0;
        }
 
 
 
     if (isset($_POST['tipo'])){
       // echo "yes";
           $tipo = $_POST['tipo'];
       //    echo $fix;
      }
   else{
        $tipo=0;
        }
        
       if (isset($_GET['a'])){
       // echo "yes";
           $b = $_GET['a'];
       //    echo $fix;
      }
   else{
        $b='';
        }      
 
 
 // elimina todos os horários livres
 echo "<table border='1'>";
 
 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=1'>Apagar horários vazios do dia</a><hr>";
       if ($fix==1){

          $stgsq1 = "delete from atendimento where data = '$hoje' and
          idusuario =''";
		   $res1 = mysql_query($stgsq1, $conec);

		if ($res1){
          echo "Hor&aacute;rios vazios de hoje eliminados.";
       }
          
       }
 echo "</td></tr>";


// elimina todos os horários livres
 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=2'>Apagar todos os horários - vazios ou ocupados - do dia</a><hr>";
       if ($fix==2){
       	
       	
       $stgsq12 = "delete from atendimento where data = '$hoje'";
		   $res12 = mysql_query($stgsq12, $conec);
       if ($res12){
          echo "Todos os hor&aacute;rios de hoje eliminados.";
          }     	
       	
       }	

 echo "</td></tr>";



// elimina a agenda do dia
 echo "<tr><td>";
     
      $stgsq3 = "select tipo from agenda where data = '$hoje'";
		   $res3 = mysql_query($stgsq3, $conec);
		   $dados3 = mysql_fetch_array($res3);
       if ($dados3){
       	 echo "<a href='fixbug.php?fix=3'>Elimina a agenda <b>".$dados3[0]."</b> do dia.</a><hr>";
          }  
          else{
          	echo "Insere uma agenda para o dia<hr>";
          	echo "<form name='form1' method='post' action='fixbug.php'>";
          	echo "<input type='text' name='tipo' size='5' maxlenght='5'>";
          	echo "<input type='submit' name='Submit' value='Inserir'>";
          	}  
      
       if ($fix==3){
       	
       	$stgsq31 = "delete from agenda where data = '$hoje'";
		   $res31 = mysql_query($stgsq31, $conec);
       if ($res31){
          echo "Agenda <b>".$dados3[0]."</b> eliminada.";
          }     	
       	
       }	
       
       
       if (($tipo)){
       	
         $stgsq51 = "select valor from infos where parametro = 'micros'";
		   $res51 = mysql_query($stgsq51, $conec);
		   $dados51 = mysql_fetch_array($res51);
       if ($res51){
          $micros = $dados51[0];
          }   
       	     	
      	
       	$stgsq5 = "insert into agenda (data, tipo, micros) values ('$hoje','$tipo', '$micros')";
		   $res5 = mysql_query($stgsq5, $conec);
       if ($res5){
          echo "Agenda <b>".$tipo."</b> inserida.";
          }     	
       	
       }	
       
       
       

 echo "</td></tr>";



// elimina um horário específico do dia
 echo "<tr><td>";
     
      $stgsq4 = "select tipo from agenda where data = '$hoje'";
		   $res4 = mysql_query($stgsq4, $conec);
		   $dados4 = mysql_fetch_array($res4);
		   
       if ($res4){
         $stgsq41 = "select * from tiposdeagenda where tipo = '$dados4[0]'";
		   $res41 = mysql_query($stgsq41, $conec);
		   $dados41 = mysql_fetch_array($res41);
         if ($res41){
         	$horarios = $dados41['horarios'];
            $todos_os_horarios = explode (", ", $horarios);
            sort($todos_os_horarios);  
            $numerodehorarios =count($todos_os_horarios);
 
 echo "<table border='1'>";
echo "<tr>";
echo "<td colspan=5>Apagar todas as vagas de um horário </td>";

echo "</tr>"; 
 
 
 echo "<tr>";        	
for ($a = 0; $a < $numerodehorarios; $a++) {
if ($a % 5 == 0){
echo "</tr>"    ;
echo "<tr>" ;
}
echo "<td>";


echo "<a href='fixbug.php?fix=4&delhorario=".$todos_os_horarios[$a]."&b=".$a."'>";
echo $todos_os_horarios[$a];
echo "</a>";
echo "</td>";
}
echo "</tr></table>";      	
           	
         }    
       
          }    

       if ($fix==4){

       	$stgsq42 = "delete from atendimento where data ='".$hoje."' and horario ='".$delhorario."'";
		   $res42 = mysql_query($stgsq42, $conec);
		   
		   
		   unset($todos_os_horarios[$b]);
		   
		   $horarios = implode(",", $todos_os_horarios);
		   
		   $stgsq43 = "update infos set valor = '".$horarios."' where parametro ='horarios'";
		   $res43 = mysql_query($stgsq43, $conec);
		    
		   $stgsq44 = "update tiposdeagenda set horarios='".$horarios."' where agenda ='".$tipo."'";
		   $res44 = mysql_query($stgsq44, $conec);
		   
		   
		   
		   
		      
		   
		   
		   
		   
		   
       if ($res42){
          echo "Horario <b>".$delhorario."</b> eliminado.";
          }     	
       	
       }	

 echo "</td></tr>";

















/*
 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=5'>Insere uma agenda para o dia</a><hr>";
       if ($fix==5){

       $stgsq3 = "select * from atendimento where data = '$hoje'";
				$res3 = mysql_query($stgsq3, $conec);
       if ($res3){
          echo "tem horários hoje";
          }

       }

 echo "</td></tr>";




 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=4'>Inserir horários e micros na agenda atual</a><hr>";
      
             if ($fix==4){

       $stgsq4 = "select * from atendimento where data = '$hoje'";
				$res4 = mysql_query($stgsq4, $conec);
       if ($res4){
          echo "tem xxxx horários hoje";
          }

       }
       
 echo "</td></tr>";

 echo "<tr><td>";
      echo "extra";
 echo "</td></tr>";
 
 
 
 */
// insere agendas para os dias do mês (fix:6) - by Paulo
 echo "<tr><td>";
     
            echo "Insere uma agenda para um dia<hr>";
            echo "<form name='form6' method='post' action='fixbug.php?fix=6'>";
            echo "<label for='dia'>Dia <small>(dd-mm-aaaa)</small></label><input type='text' id='dia' name='dia' size='11' maxlenght='11'><br>";
            echo "<label for='tipo'>Tipo <small>código da agenda</small></label><input type='text' id='tipo' name='tipoa' size='5' maxlenght='5'><br>";
            echo "<input type='submit' name='Submit' value='Inserir'>";
            
      
       if ($fix==6){
        
        if( isset($_POST['dia']) ){ 
          echo "Dados recebidos. <br>";
          $d = strtotime($_POST['dia']);
          $dia = date("Y-m-d", $d);
        }
        if( isset($_POST['tipoa']) ){ 
          $tipa = $_POST['tipoa'];
        }
        $micros = "01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15";

        $stgsq6 = "insert into agenda (data, tipo, micros) values ('$dia','$tipa', '$micros')";
        $res6 = mysql_query($stgsq6, $conec);
        if ($res6){
          echo "<br>Agenda <b>".$tipa."</b> inserida para o dia <b>".$dia."</b>.<br>";
        }
        else{
          echo "Erro na inserção.<br>";
          echo "Dados informados:<br>";
          echo "Dia: ".$dia."<br>";
          echo "Agenda: ".$tipa."<br>";
        }
    
        
       }  
       
       
       

 echo "</td></tr>";



 echo "</table>";


/*

 echo "<table border='1' align='left' width='450'>";
  echo "<form name='tipo' method='post' action='validafixbug.php'>";

  echo "<input type='hidden' name='hoje' value='".$hoje."'>";
  // indicar quais micros estão disponíveis
  
  echo "<tr><td>";
  
  
  echo "<tr><td>";
  echo "Micros disponíveis no dia: ";
  echo "<br><hr>";



  $pesquisa2 = "select valor from infos where parametro = 'micros'";
  $resposta2 = mysql_query($pesquisa2,$conec);
  $dados2 = mysql_fetch_array($resposta2);
  $micros = $dados2[0];


  $todos_os_micros = explode (", ", $micros);
  $numerodemicros =count($todos_os_micros);
   echo "<input type='hidden' name='maxnumerodemicros' value='".$numerodemicros."'>";

for ($linhaini = 0;  $linhaini < $numerodemicros ;   $linhaini ++) {
echo "<input type='checkbox' name ='ck".$todos_os_micros[$linhaini]."'
value='".$todos_os_micros[$linhaini].
"' checked> ".$todos_os_micros[$linhaini]." ";
}
echo "</td></tr>";




echo "<tr><td><b>Horários desejados:</b><font size='1'>
<br><i>OBS: Separe por vígula e espaço! Ex: 11h00, 11h30, 12h00</i></font> <br>
<textarea name='horarios' cols='45' rows='2'></textarea></td></tr>";

















        echo "<tr><td></td><td>";
   echo "<input type='submit' name='submit' value='OK'></td></tr>";
   echo "</form>";
   echo "</table>";














*/
}
else{
  echo("Conexão falhou<br>");
 // criando um arquivo log
include "abrelog.php";
$textlog = $headlog."Conexão falhou.\r\n";
include "escrevefechalog.php";
// fim da mensagem log
}

?>
</BODY>
</HTML>
