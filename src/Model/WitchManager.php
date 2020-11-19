<?php


namespace App\Model;


class WitchManager extends AbstractManager
{
    const TABLE = 'witch';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectAll(): array
    {
        return $this->pdo->query('SELECT witch.firstname, witch.lastname, witch.counter, GROUP_CONCAT(attribute.name)
            FROM ' . self::TABLE . '
            JOIN witch_attribute ON witch.id = witch_attribute.witch_id
            JOIN attribute ON attribute.id = witch_attribute.attribute_id
            GROUP BY witch.id;')->fetch();
    }

    public function insert(array $witch)
    {
        $statement = $this->pdo->prepare("INSERT INTO witch(`firstname`, `lastname`) 
        VALUES (:firstname, :lastname);
        INSERT INTO witch_attribute (`witch_id`, `attribute_id`)
        VALUES (LAST_INSERT_ID(),:attribute_id)");
        $statement->bindValue('firstname', $witch['firstname'], \PDO::PARAM_STR);
        $statement->bindValue('lastname', $witch['lastname'], \PDO::PARAM_STR);
        $statement->bindValue('attribute_id', $witch['attribute_id'], \PDO::PARAM_INT);


        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }
}