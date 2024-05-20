<?php
include_once("Usuario.php");
include_once("Conexao.php");

class UsuarioDao {

	public function inserir(Usuario $Usuario) {
		global $connect;
		$sql=$connect->prepare("INSERT INTO usuarios VALUES(?,?,?)");
		$p1 = $Usuario->getNome();
		$p2 = $Usuario->getEmail();
		$p3 = $Usuario->getSenha();
		$sql->bind_param("sss", $p1,$p2,$p3);
		$sql->execute();
		if($sql->affected_rows>0) {
			return true;
		}
	}

	public function excluir(Usuario $Usuario) {
		global $connect;
		$sql=$connect->prepare("DELETE FROM usuarios WHERE EMAIL=?");
		$p1 = $Usuario->getEmail();
		$sql->bind_param("s",$p1);
		$sql->execute();
		if($sql->affected_rows>0) {
			return true;
		}
	}
	
	public function alterar(Usuario $Usuario) {
	global $connect;
	$sql=$connect->prepare("UPDATE USUARIOS SET NOME=?,SENHA=? WHERE EMAIL=?");
	$p1 = $Usuario->getNome();
	$p2 = $Usuario-> getSenha();
	$p3 = $Usuario-> getEmail();
	$sql->bind_param("sss", $p1,$p2,$p3);
	$sql->execute();
	if($sql->affected_rows>0) {
		return true;
	}
  }
  
  public function listar() {
	  global $connect;
	  $sql = "SELECT nome, email, senha FROM usuarios";
	  $result = mysqli_query ($connect, $sql);
	  $lista = array();
	  while( $row = $result -> fetch_assoc()) {
		array_push($lista, new Usuario($row["nome"], $row["email"],$row["senha"]));
	  }
	  return $lista;
  }
  

    public function buscarPeloEmail($email) {
        global $connect;
        $nome="";
        $senha="";
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $query = $connect->prepare($sql);
        $result = $query-> bind_param ("s", $email);
        $query->execute();
        $query->bind_result($nome, $email, $senha);
        if( $query->fetch()) {
            return new Usuario ($nome, $email, $senha);
        }
    }


  

}

?>