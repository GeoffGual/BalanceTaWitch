<?php


namespace App\Model;
const TABLE = 'witch';

class CardManager extends AbstractManager
{
    public function addLike($witchid)
    {
        $statement = $this->pdo->prepare("UPDATE witch SET counter= counter + 1 where id=:id");
        $statement->bindValue('id', $witchid, \PDO::PARAM_INT);
        $statement->execute();
    }
    public function deleteLike($witchid)
    {
        $statement = $this->pdo->prepare("UPDATE witch SET counter= counter - 1 where id=:id");
        $statement->bindValue('id', $witchid, \PDO::PARAM_INT);
        $statement->execute();
    }
}