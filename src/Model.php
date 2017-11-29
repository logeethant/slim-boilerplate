<?php

namespace Source;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Source\Parameters;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $config = new Configuration();
            $db = DriverManager::getConnection(Parameters::get('database'), $config);
        }

        return $db;
    }
}
