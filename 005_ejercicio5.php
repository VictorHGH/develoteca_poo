<?php

class CuentaBancaria {
	// Propiedades o atributos
	public $titular;
	public$saldo;
	public $numeroCuenta;

	// Métodos o funciones/funcionaliddes

	public function __construct($saldo, $numeroCuenta='12345') {
		$this->saldo = 50;
		$this->saldo += $saldo;
		$this->numeroCuenta = $numeroCuenta;
	}

	public function mostrarSaldo() {
		return $this->saldo . "\n";
	}

	public function mostrarNumero() {
		return $this->numeroCuenta;
	}
}

// Instanciación del objeto 
$miCuenta = new CuentaBancaria(100, "54321");
echo($miCuenta->mostrarSaldo());
echo($miCuenta->mostrarNumero());

?>
