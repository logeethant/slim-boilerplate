<?php

namespace Source;

class Parameters
{
    public static function get($parameter)
    {
        $parsed = \Symfony\Component\Yaml\Yaml::parse(file_get_contents('../app/Parameters.yaml'));
        return $parsed[$parameter];
    }
}
