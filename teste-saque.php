<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente, Conta, SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(
  new Titular(
    new CPF('123.456.789-10'),
    'Vinicius Dias',
    new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
  )
);

$conta->deposita(500);
try {
    $conta->saca(1000);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}
echo $conta->recuperaSaldo();
