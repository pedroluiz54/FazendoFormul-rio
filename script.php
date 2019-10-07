<?php
echo "<br>Nome: " . $_POST["name"];
echo "<br>CPF: " . $_POST["cpf"];
echo "<br>Data de nascimento: " . $_POST["date"];
echo "<br>Telefone: " . $_POST["mobile-number"];
echo "<br>Email: " . $_POST["email"];
echo "<br>CEP: " . $_POST["cep"];
echo "<br>Endereço: " . $_POST["adress"];
echo "<br>Número: " . $_POST["number"];
echo "<br>Complemento: " . $_POST["complement"];
if(empty($_POST["cpf"])) { echo "<br>O campo CPF é obrigatório!";}
if(empty($_POST["email"])) { echo "<br>O campo Email é obrigatório!";}
?>
