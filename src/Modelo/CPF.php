<?php

namespace Alura\Banco\Modelo;

use InvalidArgumentException;

// final => nao pode ser extendida
final class CPF
{
  private string $numero;

  public function __construct(string $numero)
  {
    $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
    ]);
    if ($numero === false) {
      throw new InvalidArgumentException("Cpf inválido");
      // echo "Cpf inválido";
      // exit();
    }
    $this->numero = $numero;
  }

  public function recuperaNumero(): string
  {
    return $this->numero;
  }
}
