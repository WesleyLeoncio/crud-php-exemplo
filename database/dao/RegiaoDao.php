<?php

class RegiaoDao
{
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {
        $query = "SELECT * FROM regioes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($regiao)
    {
        $query = "INSERT INTO regioes (nome, descricao) VALUES (:nome, :descricao)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $regiao->getNome());
        $stmt->bindParam(":descricao", $regiao->getDescricao());
        try {
            $stmt->execute();
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    public function update($regiao)
    {
       $query = "UPDATE regioes SET nome = :nome, descricao = :descricao WHERE id_regiao = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $regiao->getNome());
        $stmt->bindParam(":descricao", $regiao->getDescricao());
        $stmt->bindParam(":id", $regiao->getIdRegiao());
        try {
            $stmt->execute();
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    public function findById(int $id)
    {
        $query = "SELECT * FROM regioes WHERE id_regiao = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM regioes WHERE id_regiao = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }
}
