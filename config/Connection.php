<?php

    class Connection {
        public static $connection = false;

        private function __construct() {
            
        }

        public static function connect($config) {
            try {
                if(!self::$connection) {
                    $conn = new mysqli($config['db']['server'], $config['db']['dbuser'], $config['db']['dbpass'], $config['db']['dbname']);
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