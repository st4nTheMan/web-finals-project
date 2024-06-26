<?php

    class UserModel {
        public $db;

        public function checkUserLogin($username, $password) {
            $count = null;

            $query = "SELECT count(*) as count FROM users_table WHERE username=? AND password=?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();
        
            return $count;
        }
        
        public function userRegister($firstName, $lastName, $username, $password) {
            $query = "INSERT INTO users_table (first_name, last_name, username, password) VALUES ('".$firstName."', '".$lastName."','".$username."','".
            $password."')";
            $stmt = $this->db->query($query);
            if ($stmt) {
                return true; // Registration successful
            } else {
                return false; // Registration failed
            }
        }
    }

?>