<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeInvalidoException;

require_once 'autoload.php';

try {
  $contaCorrente = new ContaCorrente(
    new Titular(
      new CPF('123.456.789-10'),
      'Vinicius Dias',
      new Endereco('cidade', 'bairro', 'rua', 'numero')
    )
  );

  echo $contaCorrente->recuperaNomeTitular() . PHP_EOL;
  echo $contaCorrente->recuperaCpfTitular() . PHP_EOL;
} catch (InvalidArgumentException $exceptionCpf) {
  echo $exceptionCpf->getMessage();
} catch (NomeInvalidoException $exceptionNome) {
  echo $exceptionNome->getMessage();
}
