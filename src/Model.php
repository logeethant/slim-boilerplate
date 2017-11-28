<?php

namespace Source;

use \Doctrine\DBAL;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $config = new DBAL\Configuration();
            $db = DBAL\DriverManager::getConnection(\Source\Parameters::get('database'), $config);
        }

        return $db;
    }
}
