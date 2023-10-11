<?php

    require_once('conexao.php');

    class ServicoClass{

        //ATRIBUTOS
        public $idServico;
        public $iconServico;
        public $tituloBlocoServico;
        public $textoBlocoServico;
        public $linkSaiba;
        public $statusServico;

        //METODOS

        public function __construct($id = false){
            if($id){
                $this->idServico = $id;
                $this->Carregar();
            }
        }
        
        public function ListarStatusOn(){

            $query = "SELECT * FROM tblservico ORDER BY tituloBlocoServico ASC";
            $conn = Conexao::abrirConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }


        public function Inserir(){
            $query = "INSERT INTO tblservico (`tituloBlocoServico`, `iconServico`, `textoBlocoServico`, `statusServico`)
            VALUES ('".$this->tituloBlocoServico."', '".$this->iconServico."', '".$this->textoBlocoServico."','".$this->statusServico."');";
            $conn = Conexao::abrirConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
        }

        public function Carregar(){

            $query = 'SELECT * FROM tblservico WHERE
            idServico ='.$this->idServico;
            $conn = Conexao::abrirConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
            
            foreach($lista as $linha){
                $this->tituloBlocoServico = $linha['tituloBlocoServico'];
                $this->iconServico = $linha['iconServico'];
                $this->textoBlocoServico = $linha['textoBlocoServico'];
                $this->linkSaiba = $linha['linkSaiba'];
                $this->statusServico = $linha['statusServico'];
            }
        }

        public function Atualizar(){
            $query = "UPDATE tblservico SET      

                      iconServico         ='".$this->iconServico."',
                      tituloBlocoServico  ='".$this->tituloBlocoServico."',
                      textoBlocoServico   ='".$this->textoBlocoServico."',
                      linkSaiba           ='".$this->linkSaiba."',
                      statusServico       ='".$this->statusServico."'
                      WHERE idServico =" .$this->idServico;

            $conn = Conexao::abrirConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
        }

        public function Desativar(){
            $query = "UPDATE tblservico SET      
                      statusServico       ='0'
                      WHERE servico.idServico =" .$this->idServico;
                      
            $conn = Conexao::abrirConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
        }
    };