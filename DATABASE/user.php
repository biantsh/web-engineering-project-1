<?php
    require('db.php');

    class User {
        private $username;
        private $password;

        public function __construct($username, $password) {
            global $connection;
            $this->connection = $connection;

            $username = stripslashes($username);
            $username = mysqli_real_escape_string($connection, $username);
            $this->username = $username;

            $password = stripslashes($password);
            $password = mysqli_real_escape_string($connection, $password);
            $this->password = $password;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setUsername($username) {
            $username = stripslashes($username);
            $username = mysqli_real_escape_string($this->connection, $username);
            $this->username = $username;
        }

        public function setPassword($password) {
            $password = stripslashes($password);
            $password = mysqli_real_escape_string($this->connection, $password);
            $this->password = $password;
        }

        public function existsInDB() {
            // Check whether the user exists in the database.
            $query = "SELECT * FROM `users` WHERE username='$this->username' and password='$this->password'";
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection));
            
            return mysqli_num_rows($result) == 1;
        }

        public function addToDB() {
            // Add the user to the database and returns a boolean success indicator.
            $query = "INSERT into `users` (username, password) VALUES ('$this->username', '$this->password')";
            $result = mysqli_query($this->connection, $query);

            return $result;
        }
    }
?>
