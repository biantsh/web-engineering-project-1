<?php
    require("../DATABASE/db.php");
    require("../DATABASE/user.php");
    include("../auth.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $user = new User($username, $password);
    if (!$user->existsInDB()) {
        $success = $user->addToDB($role);

        echo "<script> 
            alert('User has been created successfully!') 
        </script>";

    } else {
        echo "<script> 
            alert('User already exists!') 
        </script>";
    }

    echo "<script> 
        window.location.href='dashboard.php'
    </script>";
?>
