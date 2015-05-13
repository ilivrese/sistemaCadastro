<html>
    <head>
	    <title>
			Cadastrando uma Oficina
		</title>
	</head>
	<body  link="blue" vlink="blue">
	
<?php

  $conec;
			$bco;
			$conectou = 0;
            $idoficina = $_GET['idoficina'];


			include "conexao.php";
	

                    $pergunta = "select * from oficinas where idoficina = '$idoficina' ";
    				$resposta = mysql_query($pergunta,$conec);
                    $dados = mysql_fetch_array($resposta);
                    $linhas = mysql_num_rows($resposta);

				if (($resposta) and ($linhas)) {
				//	$dados = mysql_fetch_array($resposta);

$nomeofic = $dados['nomeofic'];
$descricao = $dados['descricao'];
$prerequisito = $dados['prerequisito'];
$datainicio = trim( $dados['datainicio']);
if (strstr($datainicio, "-")){
					$aux = explode ("-", $datainicio);
					$datainicio = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}
$datafim = trim ($dados['datafim']);
if (strstr($datafim, "-")){
					$aux = explode ("-", $datafim);
					$datafim = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}

$horainicio = $dados['horainicio'];
$horafim = $dados['horafim'];
$instrutor = $dados['instrutor'];
$vagas = $dados['vagas'];
$inicioinscricao = trim($dados['inicioinscricao']);
if (strstr($inicioinscricao, "-")){
					$aux = explode ("-", $inicioinscricao);
					$inicioinscricao = $aux[2] . "/". $aux[1] . "/" . $aux[0];
}









}

?>


		<form name="form1" method="post" action="validacadastrooficina.php">
		<table>

			<tr>
				<td width="25%">
					<div align="right">
						T&iacute;tulo:
					</div>
				</td>
				<td>
					<input type="text" name="nomeofic" size="60" maxlenght="60"
                    value="<?php echo $nomeofic  ; ?>">
				</td>
			</tr>

			<tr>
				<td width="25%">
					<div align="right">
						Descri&ccedil;&atilde;o:
					</div>
				</td>
				<td>
					<textarea name="descricao" cols="45" rows="4"><?php echo $descricao ; ?></textarea>
				</td>
			</tr>

			<tr>
				<td width="25%">
					<div align="right">
						Pré-requisito:
					</div>
				</td>
				<td>
					<input type="text" name="prerequisito" size="60" maxlenght="100"
                    value="<?php echo $prerequisito; ?>">
				</td>
			</tr>



			<tr>
				<td width="25%">
					<div align="right">
						Data do in&iacute;cio :
					</div>
				</td>
				<td>
					<input type="text" name="datainicio" size="10" maxlenght="10"
                    value="<?php echo $datainicio ; ?>">
					<font size="1"><i>DD/MM/AAAA</i></font>
				</td>
			</tr>

			<tr>
				<td width="25%">
					<div align="right">
						Data do fim :
					</div>
				</td>
				<td>
					<input type="text" name="datafim" size="10" maxlenght="10"
                    value="<?php echo $datafim ; ?>">
					<font size="1"><i>DD/MM/AAAA</i></font>
				</td>
			</tr>





   			<tr>
				<td width="25%">
					<div align="right">
						Hora do in&iacute;cio :
					</div>
				</td>
				<td>



     <select name="horainicio">
     <option value="10h00" <?php if ($horainicio == '10h00'){echo "selected";} ; ?> >10h00
      <option value="10h30" <?php if ($horainicio == '10h30'){echo "selected";} ; ?> >10h30
      <option value="11h00" <?php if ($horainicio == '11h00'){echo "selected";} ; ?> >11h00
      <option value="11h30" <?php if ($horainicio == '11h30'){echo "selected";} ; ?> >11h30
      <option value="12h00" <?php if ($horainicio == '12h00'){echo "selected";} ; ?> >12h00
      <option value="12h30" <?php if ($horainicio == '12h30'){echo "selected";} ; ?> >12h30
      <option value="13h00" <?php if ($horainicio == '13h00'){echo "selected";} ; ?> >13h00
      <option value="13h30" <?php if ($horainicio == '13h30'){echo "selected";} ; ?> >13h30
      <option value="14h00" <?php if ($horainicio == '14h00'){echo "selected";} ; ?> >14h00
      <option value="14h30" <?php if ($horainicio == '14h30'){echo "selected";} ; ?> >14h30
      <option value="15h00" <?php if ($horainicio == '15h00'){echo "selected";} ; ?> >15h00
      <option value="15h30" <?php if ($horainicio == '15h30'){echo "selected";} ; ?> >15h30
      <option value="16h00" <?php if ($horainicio == '16h00'){echo "selected";} ; ?> >16h00
      <option value="16h30" <?php if ($horainicio == '16h30'){echo "selected";} ; ?> >16h30
      <option value="17h00" <?php if ($horainicio == '17h00'){echo "selected";} ; ?> >17h00
      <option value="17h30" <?php if ($horainicio == '17h30'){echo "selected";} ; ?> >17h30


     </select>

    		</td>
			</tr>


   			<tr>
				<td width="25%">
					<div align="right">
						Hora do fim :
					</div>
				</td>
				<td>

     <select name="horafim"><option value="" selected>

      <option value="10h30"<?php if ($horafim == '10h30'){echo "selected";} ; ?>>10h30
      <option value="11h00"<?php if ($horafim == '11h00'){echo "selected";} ; ?>>11h00
      <option value="11h30"<?php if ($horafim == '11h30'){echo "selected";} ; ?>>11h30
      <option value="12h00"<?php if ($horafim == '12h00'){echo "selected";} ; ?>>12h00
      <option value="12h30"<?php if ($horafim == '12h30'){echo "selected";} ; ?>>12h30
      <option value="13h00"<?php if ($horafim == '13h00'){echo "selected";} ; ?>>13h00
      <option value="13h30"<?php if ($horafim == '13h30'){echo "selected";} ; ?>>13h30
      <option value="14h00"<?php if ($horafim == '14h00'){echo "selected";} ; ?>>14h00
      <option value="14h30"<?php if ($horafim == '14h30'){echo "selected";} ; ?>>14h30
      <option value="15h00"<?php if ($horafim == '15h00'){echo "selected";} ; ?>>15h00
      <option value="15h30"<?php if ($horafim == '15h30'){echo "selected";} ; ?>>15h30
      <option value="16h00"<?php if ($horafim == '16h00'){echo "selected";} ; ?>>16h00
      <option value="16h30"<?php if ($horafim == '16h30'){echo "selected";} ; ?>>16h30
      <option value="17h00"<?php if ($horafim == '17h00'){echo "selected";} ; ?>>17h00
      <option value="17h30"<?php if ($horafim == '17h30'){echo "selected";} ; ?>>17h30
      <option value="18h00" <?php if ($horafim == '18h00'){echo "selected";} ; ?>>10h00
     </select>

    		</td>
			</tr>








			<tr>
				<td width="25%">
					<div align="right">
						Instrutor :
					</div>
				</td>
				<td>
                     <select name="instrutor">

                      <option value="Marcelo" <?php if ($instrutor == 'Marcelo'){echo "selected";} ; ?>>Marcelo
                      <option value="Paula" <?php if ($instrutor == 'Paula'){echo "selected";} ; ?>>Paula
                      <option value="Oficineiro" <?php if ($instrutor == 'Oficineiro'){echo "selected";} ; ?>>Oficineiro Contratado
                     </select>
				</td>
			</tr>








			<tr>
				<td width="25%">
					<div align="right">
						Vagas dispon&iacute;veis :
					</div>
				</td>
				<td>
					<input type="text" name="vagas" maxlengh="2" size="2"
                    value="<?php echo $vagas ; ?>" >

				</td>
			</tr>





			<tr>
				<td width="25%">
					<div align="right">
						In&iacute;cio das inscri&ccedil;&otilde;es :
					</div>
				</td>
				<td>
					<input type="text" name="inicioinscricao" size="10" maxlenght="10"
                    value="<?php echo $inicioinscricao ; ?>">
					<font size="1"><i>DD/MM/AAAA</i></font>
				</td>
			</tr>



			<tr>
				<td width="25%">
					&nbsp;
				</td>
				<td>
					<input type="submit" name="Submit" value="Cadastrar">
					<input type="reset" name="Submi2" value="Limpar">
				</td>
			</tr>
			<tr>
				<td width="25%">
					&nbsp;
				</td>

			</tr>





		</table>
		</form>







	</body>
</html>
