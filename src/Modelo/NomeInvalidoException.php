<?php

namespace Alura\Banco\Modelo;

use DomainException;

class NomeInvalidoException extends DomainException {
  public function __construct() {
    parent::__construct("Nome precisa ter pelo menos 5 caracteres");
  }
}
