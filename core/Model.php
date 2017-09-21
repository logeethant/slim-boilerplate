<?php

namespace Core;

use \App\Parameters;
use \Doctrine\DBAL;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $config = new DBAL\Configuration();
            $db = DBAL\DriverManager::getConnection(Parameters::DATABASE, $config);
        }

        return $db;
    }
}
