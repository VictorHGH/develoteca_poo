<?php

class Coche {

	// Propiedades o atributos
	private $marca;
	private $color;
	private $modelo;

	// Métodos o funciones/funcionaliddes
	public function frenar() : void {}
	public function acelerar() : void {}

	public function mostrarDetalleDelCoche() : void {
		echo "Esto es un coche";
	}
}

$zuru = new Coche();
$zuru->mostrarDetalleDelCoche();
