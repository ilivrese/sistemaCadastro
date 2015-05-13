<html><head><title></title</head>
<body>
       <?php

$hoje = date("Y-m-d", time());



// TODOS OS HORÁRIOS

$horario = "10h00";
include "inseredhm.php";

$horario = "10h30";
include "inseredhm.php";

$horario = "11h00";
include "inseredhm.php";

$horario = "11h30";
include "inseredhm.php";

$horario = "12h00";
include "inseredhm.php";

$horario = "12h30";
include "inseredhm.php";

$horario = "13h00";
include "inseredhm.php";

$horario = "13h30";
include "inseredhm.php";

$horario = "14h00";
include "inseredhm.php";

$horario = "14h30";
include "inseredhm.php";

$horario = "15h00";
include "inseredhm.php";

$horario = "15h30";
include "inseredhm.php";

$horario = "16h00";
include "inseredhm.php";

$horario = "16h30";
include "inseredhm.php";

$horario = "17h00";
include "inseredhm.php";












$data = date ("d/m/Y", time());
if ($res) {
// include "limpaagenda.php";

include "conexao.php";
if ($conectou){

				$stgsq3 = "delete from atendimento where data < '$hoje' and
                idusuario is null";
				$res3 = mysql_query($stgsq3, $conec);

                $stgsql2 = "delete from atendimento where data < '$hoje' and
                idusuario = '1'";
				$res2 = mysql_query($stgsql2, $conec);

                if ($res3) {
                echo "<br>Agenda limpa<br>";
                   }
                else {
                echo "Erro em limpar agenda";
                }


				}
				else {
				echo "Não conectou";
				}



echo "Configura&ccedil;&atilde;o OK!<br>Banco de Dados pronto para agendamento do dia: ".$data."<br>";
echo "<a href='teste3.php' target='principal'>Iniciar agendamento.</a>";



}
else {
echo "Banco de Dados já foi configurado para o dia ".$data."<br>";
echo "<a href='teste3.php' target='principal'>Iniciar agendamento.</a>";
}
echo "<br><br>";
echo "<b>OBS:</b>";
echo "<ul>Algumas modificações que já fiz:";
echo "<li>A ID <b>1</b> será eliminada quando os horários do dia forem criados -<br>
 isso significa que, caso seja necessário parar alguma máquina, <br>pode-se cadastrar essa id
  (a ID = 1 é do usuário 'INTERNET LIVRE').</li>";
echo "<li>Já eliminei a possibilidade de marcar mais pessoas que <br>vagas nas oficinas, e coloquei
 avisos de 'oficina encerrada'. Ao final de <br>cada oficina, porém, é necessário corrigir as listas
  (apagar quem não veio e <br>adicionar quem entrou depois).</li>";
 echo "<li>Ao cadastrar oficinas, por favor descrever as datas de aula <br>(ou pelo menos os dias
  da semana), pois nos dados estatísticos é <br>necessário saber o número de sessões de cada
  atividade.</li></ul>";






       ?>
</body>
</html>

