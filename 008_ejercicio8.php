<?php

class Autentication {
	// Atributos
	private $usuario;
	private $password;

	// Métodos(getters y setters)
	// Setter (Asignar valor)
	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	// Getter (Leer valor)
	public function getUsuario() {
		return $this->usuario;
	}

	public function login() {}

	public function logout() {}
}

$auth = new Autentication();
$auth->setUsuario('admin');

echo $auth->getUsuario();

?>
