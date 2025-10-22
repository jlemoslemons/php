<?php
class FormaGeometrica {
    public function calcularArea() {
        return 0;
    }
    public function calcularPerimetro() {
        return 0;
    }
}
class Quadrado extends FormaGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return "A área do quadrado é de " . $this->lado * $this->lado;
    }

    public function calcularPerimetro() {
        return "O perímetro do quadrado é de " . 4 * $this->lado;
    }
}

$quadrado = new Quadrado(4);
echo $quadrado->calcularArea() . "\n";
echo $quadrado->calcularPerimetro() . "\n";

class Triangulo extends FormaGeometrica {
    private $base;
    private $altura;
    private $ladoA;
    private $ladoB;
    private $ladoC;

    public function __construct($base, $altura, $ladoA, $ladoB, $ladoC) {
        $this->base = $base;
        $this->altura = $altura;
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
        $this->ladoC = $ladoC;
    }

    public function calcularArea() {
        return "A área do triângulo é de " . ($this->base * $this->altura) / 2;
    }

    public function calcularPerimetro() {
        return "O perímetro do triângulo é de " . $this->ladoA + $this->ladoB + $this->ladoC;
    }
}

$triangulo = new Triangulo(10, 8.66, 10, 10, 10);
echo $triangulo->calcularArea() . "\n";
echo $triangulo->calcularPerimetro() . "\n";

class Retangulo extends FormaGeometrica {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return "A área do retângulo é de " . $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return "O perímetro do retângulo é de " . 2 * ($this->largura + $this->altura);
    }
}

$retangulo = new Retangulo(6, 4);
echo $retangulo->calcularArea() . "\n";
echo $retangulo->calcularPerimetro() . "\n";

class Pentagono extends FormaGeometrica {
    private $lado;
    private $apotema;

    public function __construct($lado, $apotema) {
        $this->lado = $lado;
        $this->apotema = $apotema;
    }

    public function calcularArea() {
        return "A área do pentágono é de " . (5 * $this->lado * $this->apotema) / 2;
    }

    public function calcularPerimetro() {
        return "O perímetro do pentágono é de " . 5 * $this->lado;
    }
}

$pentagono = new Pentagono(10, 6.88);
echo $pentagono->calcularArea() . "\n";
echo $pentagono->calcularPerimetro() . "\n";

class Trapezio extends FormaGeometrica {
    private $baseMaior;
    private $baseMenor;
    private $altura;
    private $ladoA;
    private $ladoB;

    public function __construct($baseMaior, $baseMenor, $altura, $ladoA, $ladoB) {
        $this->baseMaior = $baseMaior;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    public function calcularArea() {
        return "A área do trapézio é de " . (($this->baseMaior + $this->baseMenor) / 2) * $this->altura;
    }

    public function calcularPerimetro() {
        return "O perímetro do trapézio é de " . $this->baseMaior + $this->baseMenor + $this->ladoA + $this->ladoB;
    }
}

$trapezio = new Trapezio(12, 6, 5, 7, 8);
echo $trapezio->calcularArea() . "\n";
echo $trapezio->calcularPerimetro() . "\n";

class Diamante extends FormaGeometrica {
    private $diagonalMaior;
    private $diagonalMenor;
    private $lado;

    public function __construct($diagonalMaior, $diagonalMenor, $lado) {
        $this->diagonalMaior = $diagonalMaior;
        $this->diagonalMenor = $diagonalMenor;
        $this->lado = $lado;
    }

    public function calcularArea() {
        return ($this->diagonalMaior * $this->diagonalMenor) / 2;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}
class Paralelogramo extends FormaGeometrica {
    private $base;
    private $altura;
    private $lado;

    public function __construct($base, $altura, $lado) {
        $this->base = $base;
        $this->altura = $altura;
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->base + $this->lado);
    }
}
class Circulo extends FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}
?>