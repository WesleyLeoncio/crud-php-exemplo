<?php

class Regiao {
    private $id_regiao;
    private $nome;
    private $descricao;

    public function __construct($id_regiao, $nome, $descricao) {
        $this->id_regiao = $id_regiao;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getIdRegiao() {
        return $this->id_regiao;
    }

    public function setIdRegiao($id_regiao) {
        $this->id_regiao = $id_regiao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}

