<?php

class CuentaBancaria {
	public $titular;
	public $saldo;

	public function asignarDatos($titularInicial, $saldoInicial) {
		$this->titular = $titularInicial;
		$this->saldo = $saldoInicial;
	}

	public function depositar($cantidad) {
		$this->saldo += $cantidad;
		echo "Has depositado $cantidad";
	}

	public function mostrarSaldo() {
		echo "El saldo es: $this->saldo.";
	}

	public function retornarSaldo() {
		return $this->saldo;
	}
}

$objetoCuenta = new CuentaBancaria();
$objetoCuenta->asignarDatos("Oscar", 100);
$objetoCuenta->mostrarSaldo();
$objetoCuenta->depositar(50);
echo "Tienes: " . $objetoCuenta->retornarSaldo() . " en la cuenta.";

?>
