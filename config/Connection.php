<?php

    class Connection {
        public static $connection = false;

        private function __construct() {
            
        }

        public static function connect($config) {
            try {
                if(!self::$connection) {
                    $conn = new mysqli($config['server'], $config['dbuser'], $config['dbpass'], $config['dbname']);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    self::$connection = $conn;
                    return self::$connection;
                }
            } catch(Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }
?>