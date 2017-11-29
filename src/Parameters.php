<?php

namespace Source;

use Symfony\Component\Yaml\Yaml;

class Parameters
{
    public static function get($parameter)
    {
        $parsed = Yaml::parse(file_get_contents('../app/Parameters.yaml'));
        return $parsed[$parameter];
    }
}
