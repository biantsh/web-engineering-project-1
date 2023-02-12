<?php
    require('db.php');

    class UserProgress {
        private $username;
        private $finishedHTML;
        private $finishedCSS;
        private $finishedJS;

        public function __construct($username) {
            $this->username = username;
            
            $query = "SELECT * FROM `user_progress` WHERE `username` = `$username`";
            $result = mysqli_query($connection, $query);
            $userProgress = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];

            $this->finishedHTML = $userProgress['finished_html'] != 0;
            $this->finishedCSS = $userProgress['finished_css'] != 0;
            $this->finishedJS = $userProgress['finished_js'] != 0;
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
        }

        public function setFinishedCSS()) {
            $this->finishedCSS = $finishedCSS;
        }

        public function setFinishedJS($finishedJS) {
            $this->finishedJS = $finishedJS;
        }
?>
