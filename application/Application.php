<?php

declare(strict_types=1);

namespace application;

use application\exception\ClassMethodNotFoundException;
use application\exception\ClassNotFoundException;
use application\exception\FileOrDirectoryNotFoundException;

class Application
{
    private const CLASS_NAMESPACE = "application\\service\\";

    public static function run(int $argc, array $argv) {
        if ($argc < 2) {
            throw new \application\exception\TooFewParametersException();
        }
        if ($argc > 3) {
            throw new \application\exception\TooManyParametersException();
        }
        $callingClassName = $argv[1];
        $callingMethodName = $argv[2];
        $pathToScan = __DIR__."/../".str_replace("\\", "/", self::CLASS_NAMESPACE);
        $dirContent = scandir($pathToScan);
        if ($dirContent === false) {
            throw new FileOrDirectoryNotFoundException($pathToScan);
        }
        $classNames = array_filter($dirContent, function ($dirName) {
            return (strcmp($dirName, ".") != 0) && (strcmp($dirName, "..") != 0)
                && strcmp(substr($dirName, -4), ".php") == 0;
        });
        array_walk($classNames, function (&$className) {
            $className = substr($className, 0, -4);
        });
        $className = array_values(array_filter($classNames, function ($className) use ($callingClassName) {
            return strcmp(strtolower($callingClassName), strtolower($className)) == 0;
        }))[0];
        $fullClassName = "\\".self::CLASS_NAMESPACE.$className;
        if (!class_exists($fullClassName)) {
            throw new ClassNotFoundException($fullClassName);
        }
        $class = new $fullClassName();
        $methodName = strtolower($callingMethodName);
        if (!method_exists($fullClassName, $methodName)) {
            throw new ClassMethodNotFoundException($methodName, $fullClassName);
        }
        return $class->$methodName();
    }
}