<?php
    require 'cartera.php';
    require 'llavescasa.php';
    require 'llacescoche.php';
    require 'transportepublico.php';
    require 'smmartphone.php';


class Persona {
    private cartera $cartera;
    private llavescasa $llavescasa;
    private llavescoche $llavescoche;
    private TransportePublico $transportepublico;
    private Smartphone $smartphone;

    public function __construct( cartera $cartera, llavescasa $llavescasa, llavescoche $llavescoche, TransportePublico $transportepublico,Smartphone $smartphone )
    {
        $this->cartera = $cartera;
        $this->llavescasa = $llavescasa;
        $this->llavescoche = $llavescoche;
        $this->transportepublico = $transportepublico;
        $this->smartphone = $smartphone;
    }
}