<html>
<head>
  <link rel="stylesheet" type="text/css" href="/base.css" >
  <title>Formulário Teste</title>

</head>
<body>



CADASTRO
<form action="/script.php" method="post">
    <div>
        <p><label for="nome">Nome:</label></p>
        <p><input type="text" id="name" name="name"/></p>
    </div>
    <div>
        <p><label for="cpf">CPF:</label></p>
        <p><input type="text" id="cpf" name="cpf" /></p>
    </div>
    <div>
        <p><label for="data">Data de nascimento:</label></p>
        <p><input type="text" id="date" name="date"/></p>
    </div>
    <div>
        <p><label for="phone">Telefone:</label></p>
        <p><input type="phone" id="mobile-number" name="mobile-number"/></p>
    </div>
    <div>
        <p><label for="email">E-mail:</label></p>
        <p><input type="email" id="email" name="email" /></p>
    </div>
    <div>
        <p><label for="cep">CEP:</label></p>
        <p><input type="text" id="cep" name="cep"/></p>
    </div>
    <div>
        <p><label for="endereço">Endereço:</label></p>
        <p><input type="text" id="adress" name="adress"/></p>
    </div>
    <div>
        <p><label for="número">Número:</label></p>
        <p><input type="text" id="number" name="number"/></p>
    </div>
    <div>
        <p><label for="complemento">Complemento:</label></p>
        <p><input type="text" id="complement" name="complement"/></p>
    </div>
    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>
