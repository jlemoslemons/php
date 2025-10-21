<?php
class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularSalario() {
        return $this->salario;
    }
}
class Gerente extends Funcionario {
    public $bonus;

    public function __construct($nome, $salario, $bonus) {
        parent::__construct($nome, $salario);
        $this->bonus = $bonus;
    }

    public function calcularSalario() {
        return parent::calcularSalario() + $this->bonus;
    }
}
$funcionario = new Funcionario("João", 3000);
$gerente = new Gerente("Maria", 12000, 2000);
echo "Salário do Funcionário: " . $funcionario->calcularSalario() . "\n";
echo "Salário do Gerente: " . $gerente->calcularSalario();
?>