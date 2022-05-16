<?php

include_once __DIR__ . '/entities/users.php';
include_once __DIR__ . '/entities/product.php';

$utente = new Utente('Johnny','Johnny@gmail.com');

var_dump($utente);

$antipulci = new Prodotto('Antipulci', '2 pezzi', '10');

var_dump($antipulci);

?>