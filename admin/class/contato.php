<?php

    require_once('conexao.php');

    class ContatoClass{
        // ATRIBUTOS | ELEMENTOS - BANCO
        public $nomeContato;
        public $emailContato;
        public $telefoneContato;
        public $mensContato;
        public $dataContato;
        public $hora;
    
        public function InserirContato(){
            $sql = "INSERT INTO tblcontato (nomeContato,emailContato,telefoneContato,mensContato,dataContato,hora)
            VALUES ('".$this->nomeContato."',
            '".$this->emailContato."',
            '".$this->telefoneContato."',
            '".$this->mensContato."',
            '".$this->dataContato."',
            '".$this->hora."')";

            $conn = Conexao::abrirConexao();
            $conn->exec($sql);
        }
        
    }