<?php

namespace App\Models;

class User extends \Source\Model
{
    public function getAll()
    {
        $db = static::getDB();
        $stmt = $db->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
