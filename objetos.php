<?php

#carregar as classes

include_once 'pessoa.php';
include_once 'conta.php';

#criação do objeto $carlos

$carlos= new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->Nome : \n";
echo"{ $carlos->Nome} é formado em"

#criação do objeto $conta_carlos

$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_car 1 os-> Codi go = "CC.12 34. 56";
$conta_carlos->DataDeCriação = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} \n";
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";

$conta_carlos-> Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";

$conta_carlos-> Retirar(10);
echo

?>