<?php

class Autentication {
	// Atributos
	private $usuario;
	private $password;

	// Métodos(getters y setters)
	// Setter (Asignar valor)
	public function setUsuario($usuario) {
		return $this->usuario = $usuario;
	}

	// Getter (Leer valor)
	public function getUsuario() {
		return $this->usuario;
	}

	public function setPassword($password) {
		return $this->password = $password;
	}

	public function getPassword() {
		return $this->password;
	}

	public function login() {
		// Este metodo se tendria que conectar a una base de datos
		// Se puede usar con datos fijos para el login (posterior cambiar los datos)
		if ($this->usuario == 'admin' && $this->password == '12345') {
			echo "Usuario logueado";
		} else {
			echo "Usuario no logueado";
		}
	}

	public function logout() {
		echo "Sesión cerrada";
	}
}

$auth = new Autentication();
$auth->setUsuario('admin');
$auth->setPassword('12345');
$auth->login();

?>
