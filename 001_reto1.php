<?php

class Tarea {

	// Propiedades o atributos
	private $titulo;
	private $descripcion;
	private $fechaLimite;
	private $estado;

	// Métodos o funciones/funcionaliddes
	public function asignarDatos($titulo, $descripcion, $fechaLimite) {
		$this->titulo = $titulo;
		$this->descripcion = $descripcion;
		$this->fechaLimite = $fechaLimite;
		$this->estado = 'pendiente';
	}

	public function mostrarDatos() {
		echo "Titulo: " . $this->titulo . "\n";
		echo "Descripción: " . $this->descripcion . "\n";
		echo "Fecha Limite: " . $this->fechaLimite . "\n";
		echo "Estado: " . $this->estado . "\n";
	}

	public function actualizarEstado($estado) {

		$estado = strtolower($estado);

		$estadosValidos = ["en progreso", "completada"];

		if (!in_array($estado, $estadosValidos)) {
			do {
				echo "El estado debe ser Completada o En progreso\n";
				$estado = readline("Escriba el nuevo estado: ");
			} while ($estado != 'Completada' && $estado != 'En progreso');
		}

		$this->estado = $estado;

	}

	public function completarTarea() {
		$this->estado = "completada";
	}
}

$tarea1 = new Tarea();
$tarea1->asignarDatos("Aprender PHP", "Completar el curso básico de PHP", "20024-12-01");

$tarea2 = new Tarea();
$tarea2->asignarDatos("Desarrollar API", "Crear una API REST con Laravel", "2024-12-10");

$tarea1->mostrarDatos();
echo "\n";
$tarea2->mostrarDatos();

$tarea1->actualizarEstado("en progreso");

$tarea2->completarTarea();

echo "\n";
$tarea1->mostrarDatos();
echo "\n";
$tarea2->mostrarDatos();
