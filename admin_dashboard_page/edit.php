<?php
    require("../DATABASE/db.php");
    require("../DATABASE/user.php");
    include("../auth.php");

    $id = $_GET['id'];
    $user = User::getUserByID($id);
    $username = $user->getUsername();

    $isAdmin = $user->getRole() == 'admin';
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn Front-end Development</title>
        <link rel="stylesheet" href="edit.css">
    </head>

    <body>
        <form action="" method="POST">
            <h3>ID</h3>
            <input type="text" name="id" value="<?=$id?>" readonly>

            <h3>Username</h3>
            <input type="text" name="username" value="<?=$username?>">

            <h3>Password</h3>
            <input type="text" name="password" value="">

            <h3>Role</h3>
            <select id="role" name="role" >
                <?php
                    if ($isAdmin) {
                        echo
                        "
                        <option value='user'>User</option>
                        <option value='admin' selected>Admin</option>
                        ";
                    } else {
                        echo
                        "
                        <option value='user' selected>User</option>
                        <option value='admin'>Admin</option>
                        ";
                    }
                ?>
            </select>

            <br><br>

            <input type="submit" name="Submit" value="Submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "UPDATE users SET username='$username', password='".md5($password)."', role='$role' WHERE id='$id'";
    mysqli_query($connection, $query);
    
    echo "<script> 
        alert('User has been updated successfully!') 
        window.location.href='dashboard.php';
    </script>";
}

?>
