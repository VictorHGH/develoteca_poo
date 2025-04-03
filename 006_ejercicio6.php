<?php

// Ejemplo de encapsulamiento
class CuentaBancaria {
	// Atributos
	public $saldo;
	protected $numeroCuenta;
	private $pin;

	// Métodos
	public function __construct($saldo, $numeroCuenta, $pin) {
		$this->saldo = $saldo;
		$this->numeroCuenta = $numeroCuenta;
		$this->pin = $pin;
	}

	public function mostrarSaldo() {
		return $this->saldo;
	}
}

// Instanciación del objeto
$miCuenta = new CuentaBancaria(100, '12345', 555);

echo 'El saldo es: ' . $miCuenta->mostrarSaldo();

?>
