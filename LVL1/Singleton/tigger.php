<?php

class Tigger {

    private static $instances = null;
    private static $counter = 0;

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            self::$counter = self::$counter + 1;

    }

    public static function getInstance() {
        if(self::$instances == null)
        {
            self::$instances = new Tigger;
        }

        return self::$instances;
    }

    public function getCounter() {
        return self::$counter;
    }

}