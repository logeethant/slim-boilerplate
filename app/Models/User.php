<?php

namespace App\Models;

use Source\Model;

class User extends Model
{
    public function getAll()
    {
        $db = static::getDB();
        $stmt = $db->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
