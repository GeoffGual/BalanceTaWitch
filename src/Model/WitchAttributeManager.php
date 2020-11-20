<?php

namespace App\Model;

class WitchAttributeManager extends AbstractManager
{
    const TABLE = 'witch_attribute';
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function insertAttribute($attribute,$idwitch)
    {
        $statement = $this->pdo->prepare(" INSERT INTO witch_attribute (`witch_id`, `attribute_id`)
        VALUES (:witch_id,:attribute_id)");

        $statement->bindValue('attribute_id', $attribute, \PDO::PARAM_INT);
        $statement->bindValue('witch_id', $idwitch, \PDO::PARAM_INT);

        if($statement->execute()){
            return (int)$this->pdo->lastInsertId();
        }
        }

}
