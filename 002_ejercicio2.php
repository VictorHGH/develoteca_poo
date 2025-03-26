<?php

class Persona {
	// Propiedades o atributos
	public $nombre;
	public $colorCamisa;
	public $colorPantalon;
	
	// Métodos o funciones/funcionaliddes
	public function caminar() : void {}
	public function hablar() : void {
		echo "Hola soy una persona chaparrita\n";
	}
	public function correr() : void {}
}

// Instanciación de una clase
$objPersona1 = new Persona();
$objPersona1->hablar(); //llama al método hablar

$objPersona2 = new Persona();
$objPersona2->hablar(); //llama al método hablar

?>
