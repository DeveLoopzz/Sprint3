<?php

require 'persona.php';

$cartera = new Cartera;
$llavescasa = new LlavesCasa;
$llavescoche = new LlavesCoche;
$transportepublico = new TransportePublico;
$smartphone = new Smartphone;


$persona = new Persona($cartera, $llavescasa, $llavescoche, $transportepublico, $smartphone);
