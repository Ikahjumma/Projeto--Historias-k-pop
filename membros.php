<?php

class Usuario {
	private $nome;
	private $email;
	private $senha;
	
	function __construct($nome,$email,$senha) {
		$this -> nome = $nome.
		$this -> email = $email;
		$this -> senha = $senha;
	}
	
	public function getNome() {
		return $this -> nome;
	}

	public function setNome($nome) {
		$this -> nome = $nome;
	}


	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($email) {
		$this -> email = $email;
	}


	public function getsenha() {
		return $this -> senha;
	}
	public function setSenha($senha) {
		$this -> senha = $senha;
	}
}

?>