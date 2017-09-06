<?php

namespace Core;

use \PDO;
use \App\Config;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $db = new PDO('mysql:host=' . Config::DATABASE['host'] . ';dbname=' . Config::DATABASE['dbname'] . ';charset=' .Config::DATABASE['charset'], Config::DATABASE['user'], Config::DATABASE['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        return $db;
    }
}
