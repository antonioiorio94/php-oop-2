<?php

class Prodotto {
        public $nome;
        public $quantità;
        public $prezzo;
     

        function __construct($_name, $_quantity, $_price){
        $this->nome = $_name;
        $this->quantità = $_quantity;
        $this->prezzo = $_price;
    }
  }

    ?>