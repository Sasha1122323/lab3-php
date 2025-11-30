<?php
namespace App;

class MagicClass {
    public function __construct() {
        echo "__construct вызван\n";
    }

    public function __destruct() {
        echo "__destruct вызван\n";
    }

    public function __toString() {
        return "__toString вызван\n";
    }

    public function __invoke() {
        echo "__invoke вызван\n";
    }

    public function __get($name) {
        echo "__get вызван для $name\n";
    }

    public function __set($name, $value) {
        echo "__set вызван для $name = $value\n";
    }

    public function __call($name, $arguments) {
        echo "__call вызван для $name\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "__callStatic вызван для $name\n";
    }

    public function __clone() {
        echo "__clone вызван\n";
    }
}
