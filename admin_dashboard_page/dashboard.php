<!DOCTYPE html>

<?php
    require("../DATABASE/db.php");
    include("../auth.php");

    $technologies_query = "SELECT * FROM `technologies`";
    $result = mysqli_query($connection, $technologies_query);
    $technologies = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $technology_names = [];
    foreach($technologies as $technology) {
        array_push($technology_names, $technology["name"]);
    }

    $devs_query = "SELECT * FROM `dev_info`";
    $result = mysqli_query($connection, $devs_query);
    $dev_info = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $dev_names = [];
    foreach($dev_info as $developer) {
        array_push($dev_names, $developer['name']);
    }

    $users_query = "SELECT * FROM `users`";
    $result = mysqli_query($connection, $users_query);
    $user_info = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn Front-end Development</title>
        <link rel="stylesheet" href="dashboard.css">
    </head>

    <body>
        <header>
            <ul class="navbar">
                <a href="../login.php"> <li>Home</li></a>
                <a href="../learn_page/learn.php"><li>Learn</li></a>
                <a href="../about_us_page/about_us.php"><li>About us</li></a>
            </ul>
        </header>

        <div class="main">
            <h3>Admin Dashboard Page (Secure)</h3>
            <p>Number of technologies supported: <p class="highlighted-text"><?php echo count($technologies) ?></p></p>
            <p>Technologies: <p class="highlighted-text"><?php echo implode(", ", $technology_names) ?></p></p>

            <br>

            <p>Number of developers/contributors: <p class="highlighted-text"><?php echo count($dev_info) ?></p</p>
            <p>Developers: <p class="highlighted-text"><?php echo implode(", ", $dev_names) ?></p></p>

            <br>

            <p>Number of registed users: <p class="highlighted-text"><?php echo count($user_info) ?></p></p>
        </div>

    </div>
    </body>
</html>
