<html>
<head>
  <link rel="stylesheet" type="text/css" href="/base.css" >
  <title>Formulário Teste</title>

</head>
<body>
  <style>
  body{background-color: 90EE90;}
 font-family: verdana
 </style>

CADASTRO
<form action="/script.php" method="post">
    <div>
        <p><label for="nome">Nome:</label>
        <p><input type="text" id="name" name="name"/>
    </div>
    <div>
        <p><label for="cpf">CPF:</label>
        <p><input type="text" id="cpf" name="cpf" required/>
    </div>
    <div>
        <p><label for="data">Data de nascimento:</label>
        <p><input type="text" id="date" name="date"/>
    </div>
    <div>
        <p><label for="phone">Telefone:</label>
        <p><input type="phone" id="mobile-number" name="mobile-number"/>
    </div>
    <div>
        <p><label for="email">E-mail:</label>
        <p><input type="email" id="email" name="email" required/>
    </div>
    <div>
        <p><label for="cep">CEP:</label>
        <p><input type="text" id="cep" name="cep"/>
    </div>
    <div>
        <p><label for="endereço">Endereço:</label>
        <p><input type="text" id="adress" name="adress"/>
    </div>
    <div>
        <p><label for="número">Número:</label>
        <p><input type="text" id="number" name="number"/>
    </div>
    <div>
        <p><label for="complemento">Complemento:</label>
        <p><input type="text" id="complement" name="complement"/>
    </div>
    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>
