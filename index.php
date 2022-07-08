<?php
include_once __DIR__ . '/eat.php';
include_once __DIR__ . '/game.php';
include_once __DIR__ . '/cuccia.php';

$croccantini = new eat("crolfix",10,012345,20,"cane","1200",10);
var_dump($croccantini);
$palestra = new game ("palestrina",20,012354,3,"gatto","piccolo");
var_dump($palestra);
$cuccietta = new cuccia("cuccia_cane",20,0234,2,"cane","grande","plastica");
var_dump($cuccietta);



