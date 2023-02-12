<?php
$connection = mysqli_connect("localhost:3306", "root", "", "web_project");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
?>
