<HTML>
<HEAD>
 <TITLE>Diferente</TITLE>
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

   if (isset($_GET['id'])){
    $id = $_GET['id'];
       }
   else{
        $id=0;
        }

   if (isset($_GET['fix'])){
           $fix = $_GET['fix'];
       }
   else{
        $fix=0;
        }

echo "<table border='1'>";

if ($id=="0"){
echo "<tr><td>";
echo "Identificação:<br>";
echo "<a href='diferente.php?id=1'>RG</a> - ";
echo "<a href='diferente.php?id=2'>ID</a> - "   ;
echo "<a href='diferente.php?id=3'>RE</a> - "   ;
echo "<a href='diferente.php?id=4'>Sesc</a>"   ;
echo "</td></tr>";
}


 if ($id=="1"){
 echo "<tr><td>";
 echo "Identificação:<br>";
 echo "<form name='form' method='post' action='diferente.php'>";
 echo "RG: ";
 echo "<input type='text' name='txRGouRE' size='20' maxlenght='20'>";
 echo "<input type='submit' name='Submit' value='Buscar'></form>";
 echo "</td></tr>";
        }

 if (isset($_POST['txRGouRE'])){

            $rgoure = "RG";
			$numeroRGouRE = $_POST['txRGouRE'];
            $RGouRE = $rgoure.$numeroRGouRE;


				$stgsql = "select idusuario from USUARIOS
					where RGouRE = '$RGouRE'";
				$res = mysql_query($stgsql,$conec);
				$dados = mysql_fetch_array($res)  ;
				$linhas = mysql_num_rows($res);

				if (($res) and ($linhas)) {
                   $idusuario = $dados['idusuario'];
                    echo "<tr><td>";
                   include "diferenteframeid.php";
                     echo "</td></tr>";
				}
          }






 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=2'>Apagar todos os horários - vazios ou ocupados - do dia</a><hr>";
       if ($fix==2){
        /*   ESTE AQUI É O CÓDIGO FINAL
          $stgsq1 = "delete from atendimento where data = '$hoje' and
          idusuario =''";
		  $res = mysql_query($stgsq, $conec);
		*/
       $stgsq2 = "select * from atendimento where data = '$hoje'";
				$res2 = mysql_query($stgsq2, $conec);
       if ($res2){
          echo "tem horários hoje";
          }

       }




 echo "</td></tr>";

 echo "<tr><td>";
      echo "<a href='fixbug.php?fix=3'>Eliminar um horário do dia (micros cheios e vazios também)</a><hr>";
       if ($fix==3){
        /*   ESTE AQUI É O CÓDIGO FINAL
          $stgsq1 = "delete from atendimento where data = '$hoje' and
          idusuario =''";
		  $res = mysql_query($stgsq, $conec);
		*/
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
        /*   ESTE AQUI É O CÓDIGO FINAL
          $stgsq1 = "delete from atendimento where data = '$hoje' and
          idusuario =''";
		  $res = mysql_query($stgsq, $conec);
		*/
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

 echo "</table>";




}

?>
</BODY>
</HTML>
