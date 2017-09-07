<?php

namespace Core;

use \PDO;
use \App\Parameters;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $db = new PDO('mysql:host=' . Parameters::DATABASE['host'] . ';dbname=' . Parameters::DATABASE['dbname'] . ';charset=' .Parameters::DATABASE['charset'], Parameters::DATABASE['user'], Parameters::DATABASE['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        return $db;
    }
}
