<?php
    $link = "cadastrausuario.php?nome=$nome&nascimento=$nascimento&sexo=$sexo&nacionalidade=$nacionalidade&RGouRE=$RGouRE&SESC=$SESC&OUTRO=$OUTRO&contato=$contato&OBS=$OBS";
?>
<table width="100%" border="0" cellspacing="0">
    <tr>
	    <td>
		    &nbsp;
		</td>
	</tr>
	<tr>
	    <td>
		    <font face="Verdana, Arial" size="2">
			    <b>Erro na inclus&atilde;o do usu&aacute;rio!</b>
			</font>
		</td>
	</tr>
	<tr>
	    <td>
		    &nbsp;
		</td>
	</tr>
	<tr>
	    <td>
		    <font face="Verdana, Arial" size="2">
			    <b>N&uacute;mero de matr&iacute;cula j&aacute; existente ou dados incompletos
				Clique no Hiperlink RETORNA e preencha os dados corretamente.</b>
			</font>
		</td>
	</tr>
	<tr>
	    <td>
		    &nbsp;
		</td>
	</tr>
	<tr>
	    <td>
		    <font face="Verdana, Arial" size="2">
			    <a href="<?php echo $link ?>">Retorna</a>
			</font>
		</td>
	</tr>
</table>
