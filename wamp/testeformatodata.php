<html><head><title></title>


</head>
<body>
<form name="cadastro"
action="testeformatodata.php" method="post" onSubmit="return
validaForm()">
          <table
width="40%" border="1" cellpadding="5"
cellspacing="0" bordercolor="#000000">
                    <tr>

                              <td>nome:</td>
                              <td><input
name="nome" type="text"></td>
                    </tr>
                    <tr>

                              <td>user:</td>
                              <td><input
name="user" type="text"></td>
                    </tr>
                    <tr>

                              <td>senha:</td>
                              <td><input
name="senha" type="password"></td>
                    </tr>
                    <tr>

                              <td>email:</td>
                              <td><input
name="email" type="text"> (xxx@xx.xx)</td>
                    </tr>
                    <tr>

                              <td>telefone:</td>
                              <td><input
name="telefone" type="text"></td>
                    </tr>
                    <tr>

                              <td>Data
de nascimento:</td>
                              <td><input
name="nasce" type="text"> (dd/mm/yyyy)</td>
                    </tr>
                    <tr>

                              <td>Sexo
:</td>
                              <td>
                                        <input
name="sexo[]" type="radio" value="masculino"
id="sexo">
Masculino 
                                        <input
name="sexo[]" type="radio" value="feminino"
id="sexo">
Feminino
                              </td>
                    </tr>
                    <tr>

                              <td
colspan="2">
                                        <div
align="right"> 
                                        <input
name="enviar" type="submit" value="enviar">
                                        </div>
                              </td>
                    </tr>
          </table>
</form>

</body></html>