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

        public static function getUserByID($id) {
            global $connection;
            
            $query = "SELECT * FROM `users` WHERE id='$id'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            $user = mysqli_fetch_assoc($result);
            $username = $user['username'];
            $password = $user['password'];

            return new User($username, $password);
        }

        public static function getNextID() {
            // Return the first unused ID, that would be assigned to the next created user.
            global $connection;

            $query = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'web_project' AND TABLE_NAME = 'users'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $next_id = $row['AUTO_INCREMENT'];

            return $next_id;
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
            $query = "SELECT * FROM `users` WHERE username='$this->username' and password='".md5($this->password)."'";
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection));
            
            return mysqli_num_rows($result) == 1;
        }

        public function addToDB($role) {
            // Add the user to the database.
            $query = "INSERT into `users` (username, password, role) VALUES ('$this->username', '".md5($this->password)."', '$role')";
            mysqli_query($this->connection, $query);

            // Add row in `user_progress` defaulting to all false values (no content finished yet)
            $query = "INSERT into `user_progress (username, finished_html, finished_css, finished_js) VALUES ('$this->username', 0, 0, 0)`";
            mysqli_query($this->connection, $query);
        }

        public function getRole() {
            // Get the role of a person (user/admin) based on the username and password.
            $query = "SELECT * FROM `users` WHERE username='$this->username'";
            $result = mysqli_query($this->connection, $query) or die(mysqli_error($this->connection));
            $matched_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
            return $matched_users[0]['role'];
        }

        public function getLandingPage() {
            // Returns the path to 'Learn' page for normal users, and the path to 'Dashboard' for admins.
            $role = $this->getRole();

            if ($role == "admin") {
                return "admin_dashboard_page/dashboard.php";
            }

            return "learn_page/learn.php";
        }
    }
?>
