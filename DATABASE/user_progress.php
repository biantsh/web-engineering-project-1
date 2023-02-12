<?php
    require('db.php');
    include("../auth.php");

    class UserProgress {
        private $username;
        private $finishedHTML;
        private $finishedCSS;
        private $finishedJS;

        public function __construct($username) {
            global $connection;
            $this->connection = $connection;
            $this->username = $username;
            
            $query = "SELECT * FROM `user_progress` WHERE `username` = '$username'";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($result)) {
                $this->finishedHTML = $row['finished_html'] != 0;
                $this->finishedCSS = $row['finished_css'] != 0;
                $this->finishedJS = $row['finished_js'] != 0;
            }
        }

        public function getFinishedHTML() {
            return $this->finishedHTML;
        }

        public function getFinishedCSS() {
            return $this->finishedCSS;
        }

        public function getFinishedJS() {
            return $this->finishedJS;
        }

        public function setFinishedHTML($finishedHTML) {
            $this->finishedHTML = $finishedHTML;
            $this->update();
        }

        public function setFinishedCSS() {
            $this->finishedCSS = $finishedCSS;
            $this->update();
        }

        public function setFinishedJS($finishedJS) {
            $this->finishedJS = $finishedJS;
            $this->update();
        }

        private function update() {
            // Write the current finished states to the corresponding database row
            $query = "UPDATE `user_progress` SET finished_html = '$this->finishedHTML', finished_css = '$this->finishedCSS', finished_js = '$this->finishedJS' WHERE username = '$this->username'";
            mysqli_query($this->connection, $query);
        }
    }
?>
