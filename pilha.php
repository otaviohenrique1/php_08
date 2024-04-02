<?php

function funcao1()
{
  echo 'Entrei na função 1' . PHP_EOL;

  // try {
  //   $arrayFixo = new SplFixedArray(2);
  //   $arrayFixo[3] = 'Valor';
  // } catch (RuntimeException $erro) {
  //   echo "Aconteceu um erro na função 1" . PHP_EOL;
  // }

  // try {
  //   funcao2();
  // } catch (RuntimeException $problema) {
  //   echo "Na função 1, eu resolvi o problema da função 2" . PHP_EOL;
  // } catch (DivisionByZeroError $erro) {
  //   echo "Erro ao dividir um número por 0" . PHP_EOL;
  // }

  try {
    funcao2();
  } catch (Throwable $erroOuExcecao) {
  // } catch (Exception $erroOuExcecao) {
  // } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
    // echo "Na função 1, eu resolvi o problema da função 2" . PHP_EOL;
    echo $erroOuExcecao->getMessage() . PHP_EOL;
    echo $erroOuExcecao->getLine() . PHP_EOL;
    echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    // throw new RuntimeException(
    //   'Exceção foi tratada, mas pega aí',
    //   // $erroOuExcecao->getCode(),
    //   1,
    //   $erroOuExcecao
    // );
  } /* catch (Error $erro) {
    echo $erro->getMessage() . PHP_EOL;
    echo $erro->getLine() . PHP_EOL;
    echo $erro->getTraceAsString() . PHP_EOL;
  } */ 


  funcao2();
  echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
  echo 'Entrei na função 2' . PHP_EOL;

  // try {
  //   $arrayFixo = new SplFixedArray(2);
  //   $arrayFixo[3] = 'Valor';
  // } catch (RuntimeException $erro) {
  //   echo "Aconteceu um erro na função 2" . PHP_EOL;
  // }

  // $arrayFixo = new SplFixedArray(2);
  // $arrayFixo[3] = 'Valor';
  // echo intdiv(5, 0);

  $exception = new RuntimeException('Essa é a mensagem de exceção');
  throw $exception;

  // for ($i = 1; $i <= 5; $i++) {
  //   echo $i . PHP_EOL;
  // }
  echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
