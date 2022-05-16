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

  protected $sconto = 0;
  protected $registrazione = false;
  
  //funzione Sconto
  protected function setDiscount() {
      if ($this->registrazione) {
          $this->sconto = 20; 
      };
  }

  public function getDiscount() {
    $this->setDiscount();
    return $this->discount;
}
};
?>