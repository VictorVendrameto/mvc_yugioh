<?php

class CartaDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_yugioh";
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }

    public function insert(CartaModel $model)
    {
        $sql = "INSERT INTO cartas_yugi (Nome, Nível, Atributo, Tipo, Ponto_atk, Ponto_def) VALUES(?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->Nível);
        $stmt->bindValue(3, $model->Atributo);
        $stmt->bindValue(4, $model->Tipo);
        $stmt->bindValue(5, $model->Ponto_atk);
        $stmt->bindValue(6, $model->ponto_def);

        $stmt->execute();
    }

    public function update(CartaModel $model)
    {
        $sql = "UPDATE cartas_yugi SET Nome=?, Nível=?, Atributo=?, Tipo=?, Ponto_atk=?, Ponto_def=? WHERE ID=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->Nível);
        $stmt->bindValue(3, $model->Atributo);
        $stmt->bindValue(4, $model->Tipo);
        $stmt->bindValue(5, $model->Ponto_atk);
        $stmt->bindValue(6, $model->ponto_def);
        $stmt->bindValue(7, $model->ID);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql =  "SELECT ID, Nome, Nível, Atributo, Tipo, Ponto_atk, Ponto_def FROM cartas_yugi";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        include_once 'Model/CartaModel.php';

        $sql = "SELECT ID, Nome, Nível, Atributo, Tipo, Ponto_atk, Ponto_def FROM cartas_yugi WHERE ID = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CartaModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM cartas_yugi WHERE ID = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CartaModel");
    }
}