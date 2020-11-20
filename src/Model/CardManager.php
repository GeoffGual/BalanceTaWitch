<?php


namespace App\Model;
const TABLE = 'witch';

class CardManager extends AbstractManager
{
    public function selectNameFirstnameImage()
    {
        $statement = $this->pdo->query("SELECT firstname,lastname,photo,reward FROM $this->table ");
        return $statement->fetchAll();
    }
}