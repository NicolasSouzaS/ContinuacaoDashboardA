<?php

require_once('conexao.php');

class PortfolioClass{

    // ATRIBUTOS
    public $idPortfolio;
    public $imgProjeto;
    public $statusPortfolio;

    // METODOS

    // METODO CONSTRUTOR
    public function __construct($id = false){
        if($id){
            $this->idPortfolio = $id;
            $this->Carregar();
        }
    }


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
        $query = "INSERT INTO tblportfolio (`imgProjeto`,`statusPortfolio`) VALUES
        ('".$this->imgProjeto."','".$this->statusPortfolio."');
        ";
        $conn = Conexao::abrirConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }

    

    // METODO CRUD (UPDATE)

    public function Carregar(){
        $query = 'SELECT * FROM tblportfolio WHERE idPortfolio = '.$this->idPortfolio;
        $conn = Conexao::abrirConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            $this->imgProjeto = $linha['imgProjeto'];
            $this->statusPortfolio = $linha['statusPortfolio'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblportfolio SET
                imgProjeto = '".$this->imgProjeto."',
                statusPortfolio = '".$this->statusPortfolio."'
            WHERE idPortfolio = " .$this->idPortfolio;
        $conn = Conexao::abrirConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblportfolio SET
        statusPortfolio = '".$this->statusPortfolio."'
        WHERE idPortfolio = ".$this->idPortfolio;
        $conn = Conexao::abrirConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }

}