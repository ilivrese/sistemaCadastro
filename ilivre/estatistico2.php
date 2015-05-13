<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY link="blue" vlink="blue">
<?php

$hoje = date("Y-m-d", time());
$ano = $_POST['ano'];
$mes = $_POST['mes'];

   if ($mes == '01'){
   $mesextenso = 'Janeiro' ; }
   if ($mes == '02'){
   $mesextenso = 'Fevereiro' ; }
   if ($mes == '03'){
   $mesextenso = 'Março' ; }
   if ($mes == '04'){
   $mesextenso = 'Abril' ; }
   if ($mes == '05'){
   $mesextenso = 'Maio' ; }
   if ($mes == '06'){
   $mesextenso = 'Junho' ; }
   if ($mes == '07'){
   $mesextenso = 'Julho' ; }
   if ($mes == '08'){
   $mesextenso = 'Agosto' ; }
   if ($mes == '09'){
   $mesextenso = 'Setembro' ; }
   if ($mes == '10'){
   $mesextenso = 'Outubro' ; }
   if ($mes == '11'){
   $mesextenso = 'Novembro' ; }
   if ($mes == '12'){
   $mesextenso = 'Dezembro' ; }


$conec;
$bco;
$conectou = 0;

include "conexao.php";
 if ($conectou) {

$stgsql = "select idusuario from atendimento where data >= '".$ano."-".$mes."-01' and
data <= '".$ano."-".$mes."-31' and idusuario is not null";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$total = $linhas;





$stgsql2 = "select idusuario from atendimento where data >= '".$ano."-".$mes."-01' and
data <= '".$ano."-".$mes."-31' and idusuario is not null ORDER by idusuario ASC";
$res2 = mysql_query($stgsql2,$conec);
$linhas2 = mysql_num_rows($res2);
$total2 = $linhas2;
$linhaini = 0;
$dados = mysql_fetch_array($res2);
$idusuario1 = $dados['idusuario'];
$linhaini++;

$totalefetivo = 1;

while ($linhaini <= $linhas2){
$dados = mysql_fetch_array($res2);
$idusuario2 = $dados['idusuario'];

if ($idusuario1 != $idusuario2){
 $totalefetivo++;
}
$idusuario1 = $idusuario2;
$linhaini++;
}





$stgsql = "select usuarios.nascimento from atendimento,usuarios where
atendimento.idusuario = usuarios.idusuario and atendimento.data >= '".$ano."-".$mes."-01' and
atendimento.data <= '".$ano."-".$mes."-31' and atendimento.idusuario is not null";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$dados = mysql_fetch_array($res);
$linhaini = 1;


echo "<font face='Arial' size='2'>";
echo "<h1>Dados estatísticos do mês de ".$mesextenso." de ".$ano."</h1>" ;

echo "<h2>Uso Livre</h2>" ;
echo "<font size='1'><i>Horários de 30 minutos em 15 computadores.</i></font>";
echo "<br><font size='1'><i>De segunda a sexta, das 10h00 às 17h30.</i></font>";
echo "<br><font size='1'><i>Não há navegação livre durante o período das oficinas.</i></font>";
echo "<hr>";
echo "<b>Total de Atendimentos do mês:</b> ".$total;
echo "<br>";
echo "<b>Total de Usuários Atendidos no mês:</b> ".$totalefetivo;
echo "<br>";
echo "<hr>";

echo "<b>Distribuição dos Atendimentos por faixa etária</b> ";
echo "<br>";

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;


while ($linhaini <= $linhas){
 $nascimento = $dados['nascimento'];
 include  "idade.php";
 //echo $linhaini;
 $linhaini ++;
 $dados = mysql_fetch_array($res);
}
echo "<i>Usuários de 10 a 13 anos: </i>".$a;
echo "<br>"  ;
echo "<i>Usuários de 14 a 17 anos: </i>".$b;
echo "<br>"  ;
echo "<i>Usuários de 18 a 29 anos: </i>".$c;
echo "<br>"  ;
echo "<i>Usuários de 30 a 59 anos: </i>".$d;
echo "<br>"  ;
echo "<i>Usuários acima de 60 anos: </i>".$e;

echo "<hr>";




// comerciario usu acnur alim

$stgsql = "select usuarios.SESC from atendimento,usuarios where
atendimento.idusuario = usuarios.idusuario and atendimento.data >= '".$ano."-".$mes."-01' and
atendimento.data <= '".$ano."-".$mes."-31' and atendimento.idusuario is not null";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$dados = mysql_fetch_array($res);
$linhaini = 1;

$sesc = 0;
$usu = 0;
$com = 0;
$acn = 0;
$ali = 0;



while ($linhaini <= $linhas){
 $SESC = $dados['SESC'];
 include  "sesc.php";
 $linhaini ++;
 $dados = mysql_fetch_array($res);
}
echo "<b>Total de Atendimentos a Usuários com vínculo com o SESC</b>: ".$sesc;
echo "<br>";
echo "<i>Comerciários: </i>".$com;
echo "<br>"  ;
echo "<i>Usuários: </i>".$usu;
echo "<br>"  ;
echo "<i>Acnur: </i>".$acn;
echo "<br>"  ;
echo "<i>Carteira de Alimentação: </i>".$ali;
echo "<br>"  ;

echo "<hr>";

// estrangeiro


$stgsql = "select usuarios.nacionalidade from atendimento,usuarios where
atendimento.idusuario = usuarios.idusuario and usuarios.nacionalidade = 'brasil'
 and atendimento.data >= '".$ano."-".$mes."-01' and
atendimento.data <= '".$ano."-".$mes."-31' and atendimento.idusuario is not null";

$res = mysql_query($stgsql,$conec);
$brasileiros = mysql_num_rows($res);
$estrangeiros = $total - $brasileiros;
echo "<b>Atendimentos a Estrangeiros</b>: ".$estrangeiros;
echo "<br>"  ;
echo "<hr>";

 // sexo


$stgsql = "select usuarios.sexo from atendimento,usuarios where
atendimento.idusuario = usuarios.idusuario and usuarios.sexo = 'F'
  and atendimento.data >= '".$ano."-".$mes."-01' and
atendimento.data <= '".$ano."-".$mes."-31' and atendimento.idusuario is not null";
$res = mysql_query($stgsql,$conec);
$mulheres = mysql_num_rows($res);
$homens = $total - $mulheres;
echo "<b>Atendimentos a Homens</b>: ".$homens;
echo "<br>"  ;
echo "<b>Atendimentos a Mulheres</b>: ".$mulheres;
echo "<br>"  ;
echo "<hr>";
echo "<br>";


//oficinas
echo "<h2>Oficinas</h2>";
 echo "<hr>";
 
$stgsql3 = "select participantesofic.idusuario from participantesofic,oficinas
where participantesofic.idoficina = oficinas.idoficina and
oficinas.datainicio >= '".$ano."-".$mes."-01' and
oficinas.datainicio < '".$ano."-".($mes+1)."-01' order by oficinas.datainicio asc";
$res3 = mysql_query($stgsql3,$conec);
$totalpartic = mysql_num_rows($res3);

 echo "<b>Total de participantes em oficinas: </b>".$totalpartic;
 echo "<br>";
 

$stgsql = "select * from oficinas
where datainicio >= '".$ano."-".$mes."-01' and datainicio < '".$ano."-".($mes+1)."-01' order by datainicio asc";
$res = mysql_query($stgsql,$conec);
$linhas = mysql_num_rows($res);
$linhaini =1;
$totalofic = $linhas;


 echo "<b>Número de oficinas oferecidas: </b>".$totalofic;
 echo "<hr>";


 if ($totalpartic >= 1){
$dados = mysql_fetch_array($res) ;

 while ($linhaini <= $linhas){
      $idoficina = $dados['idoficina'];
      $nomeofic = $dados['nomeofic'];
      $datainicio = $dados['datainicio'];
      $datainicio2 = trim($datainicio);
                  if (strstr($datainicio2, '-')){
                     $aux = explode ('-', $datainicio2);
				     $datainicio2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }

      $datafim = $dados['datafim'];
      $datafim2 = trim($datafim);
                  if (strstr($datafim2, '-')){
                     $aux = explode ('-', $datafim2);
				     $datafim2 = $aux[2] . "/". $aux[1] . "/" . $aux[0];
                    }
      $horainicio = $dados['horainicio'];
      $horafim = $dados['horafim'];
      $inicioinscricao = $dados['inicioinscricao'];
      $vagas = $dados['vagas'];
      $descricao = $dados['descricao'];
      $prerequisito = $dados['prerequisito'];
      $instrutor = $dados['instrutor'];
      $stgsql2 = "select * from participantesofic where idoficina = '$idoficina'";
				$res2 = mysql_query($stgsql2,$conec);
				$ocupados = mysql_num_rows($res2);
				




 echo "<b>";
 echo $nomeofic;
 echo "</b>";
 echo "<br>";
 echo "<font size='1'><i>";
 echo $descricao;
 echo "</i></font>";
 echo "<br>";

  echo "<b>Pré-requisitos: </b>".$prerequisito;
  echo "<br>";
  echo "<b>Período:</b> de ".$datainicio2." a ".$datafim2;
  echo "<br>";
  echo "<b>Horário:</b> das ".$horainicio." às ".$horafim;
  echo "<br>";
  echo "<b>Vagas oferecidas:</b> ".$vagas;
  echo "<br>";
  echo "<b>Vagas ocupadas:</b> ".$ocupados;
  echo "<br>";
  echo "<b>Instrutor responsável:</b> ".$instrutor;
  echo "<br><hr>";

 $linhaini ++;
 $dados = mysql_fetch_array($res) ;
}


echo "<h3>Detalhes dos participantes das oficinas</h3>";
echo "<hr>";

$stgsql4 = "select usuarios.nascimento from participantesofic,usuarios,oficinas where
participantesofic.idusuario = usuarios.idusuario and participantesofic.idoficina =
oficinas.idoficina and oficinas.datainicio >= '".$ano."-".$mes."-01' and
oficinas.datainicio < '".$ano."-".($mes+1)."-01'";

$res4 = mysql_query($stgsql4,$conec);
$linhas = mysql_num_rows($res4);
$dados4 = mysql_fetch_array($res4);
$linhaini = 1;

echo "<b>Distribuição por faixa etária</b> ";
echo "<br>";

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;


while ($linhaini <= $linhas){
 $nascimento = $dados4['nascimento'];
 include  "idade.php";
 //echo $linhaini;
 $linhaini ++;
 $dados4 = mysql_fetch_array($res4);
}
echo "<i>Usuários de 10 a 13 anos: </i>".$a;
echo "<br>"  ;
echo "<i>Usuários de 14 a 17 anos: </i>".$b;
echo "<br>"  ;
echo "<i>Usuários de 18 a 29 anos: </i>".$c;
echo "<br>"  ;
echo "<i>Usuários de 30 a 59 anos: </i>".$d;
echo "<br>"  ;
echo "<i>Usuários acima de 60 anos: </i>".$e;

echo "<hr>";


// comerciario usu acnur alim

$stgsql5 = "select usuarios.SESC from participantesofic,usuarios,oficinas where
participantesofic.idusuario = usuarios.idusuario and participantesofic.idoficina =
oficinas.idoficina and oficinas.datainicio >= '".$ano."-".$mes."-01' and
oficinas.datainicio < '".$ano."-".($mes+1)."-01'";

$res5 = mysql_query($stgsql5,$conec);
$linhas = mysql_num_rows($res5);
$dados5 = mysql_fetch_array($res5);
$linhaini = 1;

$sesc = 0;
$usu = 0;
$com = 0;
$acn = 0;
$ali = 0;



while ($linhaini <= $linhas){
 $SESC = $dados5['SESC'];
 include  "sesc.php";
 $linhaini ++;
 $dados5 = mysql_fetch_array($res5);
}
echo "<b>Total de Usuários com vínculo com o SESC</b>: ".$sesc;
echo "<br>";
echo "<i>Comerciários: </i>".$com;
echo "<br>"  ;
echo "<i>Usuários: </i>".$usu;
echo "<br>"  ;
echo "<i>Acnur: </i>".$acn;
echo "<br>"  ;
echo "<i>Carteira de Alimentação: </i>".$ali;
echo "<br>"  ;

echo "<hr>";

// estrangeiro

$stgsql6 = "select usuarios.nacionalidade from participantesofic,usuarios,oficinas where
participantesofic.idusuario = usuarios.idusuario and participantesofic.idoficina =
oficinas.idoficina and usuarios.nacionalidade = 'BRASIL' and oficinas.datainicio >= '".$ano."-".$mes."-01' and
oficinas.datainicio < '".$ano."-".($mes+1)."-01'";


$res6 = mysql_query($stgsql6,$conec);
$brasileiros = mysql_num_rows($res6);
$estrangeiros = $totalpartic - $brasileiros;
echo "<b>Estrangeiros</b>: ".$estrangeiros;
echo "<br>"  ;
echo "<hr>";

 // sexo

$stgsql7 = "select usuarios.sexo from participantesofic,usuarios,oficinas where
participantesofic.idusuario = usuarios.idusuario and participantesofic.idoficina =
oficinas.idoficina and usuarios.sexo = 'F' and oficinas.datainicio >= '".$ano."-".$mes."-01' and
oficinas.datainicio < '".$ano."-".($mes+1)."-01'";

$res7 = mysql_query($stgsql7,$conec);
$mulheres = mysql_num_rows($res7);
$homens = $totalpartic - $mulheres;
echo "<b>Homens</b>: ".$homens;
echo "<br>"  ;
echo "<b>Mulheres</b>: ".$mulheres;
echo "<br>"  ;
echo "<hr>";
echo "<br>";

}

}
else {
echo "&nbsp;";
}


/*
 echo "<hr>";
echo "<b>Atividade Permanente</b><br><br>";

echo "<b>Tribos OnLine</b><br>";
echo "<i>Atividades de cultura digital para participantes do programa Curumim do SESC Carmo.
Sextas-feiras, das 9h às 11h e das 15h às 17h.<br>
Dias: 07/11, 14/11 e 28/11.<br>
Técnicos do Curumim<br><br>";

echo "<font color='red'>* Mais informações com os instrutores do Curumim.</font>";

*/

 echo "</font>";


?>
</BODY>
</HTML>
