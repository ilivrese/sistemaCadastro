<html>
    <head>
	    <title>
			Cadastrando uma Oficina
		</title>
	</head>
	<body  link="blue" vlink="blue">
             <p align="center"><font size="3" color="red"><b>Cadastrando uma Nova Oficina</b></font></p>
		<form name="form1" method="post" action="validacadastrooficina.php">
		<table>


			<tr>
				<td width="25%">
					<div align="right">
						T&iacute;tulo:
					</div>
				</td>
				<td>
					<input type="text" name="nomeofic" size="60" maxlenght="60">
				</td>
			</tr>
			
			<tr>
				<td width="25%">
					<div align="right">
						Descri&ccedil;&atilde;o:
					</div>
				</td>
				<td>
					<textarea name="descricao" cols="45" rows="4"></textarea>
				</td>
			</tr>

			<tr>
				<td width="25%">
					<div align="right">
						Pré-requisito:
					</div>
				</td>
				<td>
					<input type="text" name="prerequisito" size="60" maxlenght="100">
				</td>
			</tr>
			
			
			
			<tr>
				<td width="25%">
					<div align="right">
						Data do in&iacute;cio :
					</div>
				</td>
				<td>
					<input type="text" name="datainicio" size="10" maxlenght="10"">
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
					<input type="text" name="datafim" size="10" maxlenght="10">
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
      <option value="" selected>
      <option value="10h00">10h00
      <option value="10h30">10h30
      <option value="11h00">11h00
      <option value="11h30">11h30
      <option value="12h00">12h00
      <option value="12h30">12h30
      <option value="13h00">13h00
      <option value="13h30">13h30
      <option value="14h00">14h00
      <option value="14h30">14h30
      <option value="15h00">15h00
      <option value="15h30">15h30
      <option value="16h00">16h00
      <option value="16h30">16h30
      <option value="17h00">17h00
      <option value="17h30">17h30


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

     <select name="horafim">
      <option value="" selected>
      <option value="10h30">10h30
      <option value="11h00">11h00
      <option value="11h30">11h30
      <option value="12h00">12h00
      <option value="12h30">12h30
      <option value="13h00">13h00
      <option value="13h30">13h30
      <option value="14h00">14h00
      <option value="14h30">14h30
      <option value="15h00">15h00
      <option value="15h30">15h30
      <option value="16h00">16h00
      <option value="16h30">16h30
      <option value="17h00">17h00
      <option value="17h30">17h30
      <option value="18h00">18h00
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
                          <option value="" selected><option value="Paulo">Paulo
                      <option value="Paula">Paula
                      <option value="Oficineiro">Oficineiro Contratado
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
					<input type="text" name="vagas" maxlengh="2" size="2">

				</td>
			</tr>
			
			
			
			
			
			<tr>
				<td width="25%">
					<div align="right">
						In&iacute;cio das inscri&ccedil;&otilde;es :
					</div>
				</td>
				<td>
					<input type="text" name="inicioinscricao" size="10" maxlenght="10">
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
