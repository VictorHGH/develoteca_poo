<?php

class CuentaBancaria {
	// Propiedades o atributos
	public $titular;
	public$saldo;

	// Métodos o funciones/funcionaliddes
	public function asignarDatos(string $titular, string $saldoInicial) : void {
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
	}
	public function mostrarSaldo() : void {
		echo "El saldo de la cuenta con titular: " . $this->titular . " es: " . number_format($this->saldo);
	}
}

$objCuenta1 = new CuentaBancaria();
$objCuenta1->asignarDatos("Victor Hernandez", 1000);
$objCuenta1->mostrarSaldo();

$objCuenta1->saldo = 2000;
$objCuenta1->mostrarSaldo();
