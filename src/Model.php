<?php

namespace Source;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Config\Parameters;

class Model
{
    public static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $config = new Configuration();
            $db = DriverManager::getConnection(Parameters::DATABASE, $config);
        }

        return $db;
    }
}
