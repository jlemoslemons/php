<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function ligar() {
        return "O carro {$this->marca} {$this->modelo} está ligado.";
    }
}

class CarroEletrico extends Carro {
    public $autonomia;

    public function __construct($marca, $modelo, $ano, $autonomia) {
        parent::__construct($marca, $modelo, $ano);
        $this->autonomia = $autonomia;
    }

    public function autonomia() {
        return "O carro elétrico {$this->marca} {$this->modelo} tem {$this->autonomia} de autonomia.";
    }
}

$meuCarro = new CarroEletrico("BYD", "Dolphin", 2020, "405 km");
echo $meuCarro->autonomia();

?>