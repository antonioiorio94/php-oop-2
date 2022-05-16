<?php


//Creazione classe utente
class Utente {
  public $nome;
  public $cognome;
  public $email;

  function __construct($_name, $_email) {
      $this->nome = $_name;
      $this->email = $_email;
  }
}
?>