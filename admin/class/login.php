<?php

require_once('conexao.php');

class Login{

    // Atributos
    public $idUsuario;
    public $nomeUsuario;
    public $fotoUsuario;
    public $emailUsuario;
    public $telefoneUsuario;
    public $senhaUsuario;
    public $statusUser;

    // Metodos
    public function VerificarLogin(){

        if(isset($this->emailUsuario)){
            $query = "SELECT * FROM tblusuario WHERE emailUsuario = '".$this->emailUsuario."' AND senhaUsuario = '".$this->senhaUsuario."'";
        }
        else{
            if(isset($this->idUsuario)){
                $query = "SELECT * FROM tblusuario WHERE idUsuario = ".$this->idUsuario ; 
            }
        }

        $query = "SELECT * FROM tblusuario WHERE emailUsuario = '".$this->emailUsuario."' AND senhaUsuario = '".$this->senhaUsuario."'";
        $conn = Conexao::abrirConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        return $lista;
    }
}