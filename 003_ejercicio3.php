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
		echo "El saldo de la cuenta" . $this->titular . "es " . $this->saldo;
	}
}
