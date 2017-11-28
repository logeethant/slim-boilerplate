<?php

namespace Source;

use \Symfony\Component\Yaml\Yaml;
use \Symfony\Component\Yaml\ParseException;

class Parameters
{
    public static function get($parameter) {
        try {
            $parsed = Yaml::parse(file_get_contents('../app/Parameters.yaml'));
            return $parsed[$parameter];
        } catch (ParseException $e) {
            printf('Unable to parse the YAML string: %s', $e->getMessage());
        }
    }
}
