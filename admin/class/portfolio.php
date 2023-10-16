<?php

require_once('conexao.php');

class PortfolioClass{

    // ATRIBUTOS
    public $idPortfolio;
    public $imgPortfolio;
    public $statusPortfolio;

    // METODOS

    // METODO CRUD (READ)
    public function ListarImgs(){
        $query = "SELECT * FROM tblportfolio WHERE statusPortfolio = 1";
        $conn = Conexao::abrirConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // METODO CRUD (CREATE)
    public function InserirImg(){
        $query = "INSERT INTO tblportfolio (`imgPortfolio`,`statusPortfolio`) VALUES
        ('".$this->imgPortfolio."','".$this->statusPortfolio."');
        ";
        $conn = Conexao::abrirConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }
}