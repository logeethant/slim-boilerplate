<?php

namespace Source;

class Model
{
    public function getDB()
    {
        static $db = null;

        if ($db === null) {
            $config = new \Doctrine\DBAL\Configuration();
            $db = \Doctrine\DBAL\DriverManager::getConnection(\Source\Parameters::get('database'), $config);
        }

        return $db;
    }
}
