<?php
    require("../DATABASE/db.php");
    include("../auth.php");

    $id = $_GET['id'];
    
    $query = "DELETE FROM users where id='$id'";
    mysqli_query($connection, $query);
    echo "<script> 
        alert('User has been deleted successfully!') 
        window.location.href='dashboard.php';
    </script>";
?>
