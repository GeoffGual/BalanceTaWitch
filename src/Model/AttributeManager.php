<?php

namespace App\Model;

class AttributeManager extends AbstractManager
{
    const TABLE = 'attribute';
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
