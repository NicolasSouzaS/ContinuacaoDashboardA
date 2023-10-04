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
        
        public function ListarStatusOn(){

            $query = "SELECT * FROM tblservico WHERE statusServico = 1 ORDER BY tituloBlocoServico ASC";
            $conn = Conexao::abrirConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }


        public function Inserir(){
            $query = "INSERT INTO tblservico (`tituloBlocoServico`,
                                            'iconServico', 
                                            `textoBlocoServico`, `linkSaiba`, `statusServico`)
            VALUES('".$this->tituloBlocoServico."',
                    '".$this->iconServico."',
                    '".$this->textoBlocoServico."',
                    'testeLink',
                    '1');";
            $conn = Conexao::abrirConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
        }
    };