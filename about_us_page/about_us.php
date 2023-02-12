<!DOCTYPE html>

<?php
    require("../DATABASE/db.php");

    $query = "SELECT * FROM `dev_info`";
    $result = mysqli_query($connection, $query);
    $dev_info = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="about_us.css">
    </head>

    <body>
        <header>
            <ul class="navbar">
                <a href="../login.php"><li>Home</li></a>
                <a href="../learn_page/learn.php"><li>Learn</li></a>
                <a href="about_us.php"><li>About us</li></a>
            </ul>
        </header>

        <main>
            <h1 class="title-bar">Our team</h1>
                <div class="team">
                    <?php foreach($dev_info as $info) : ?>
                        <div class="member-card">
                            <div class="member-card-header">
                                <img src="<?php echo $info['image_path']?>" alt="Image not found" style="border-radius: 50%;">
                                <h3><?php echo $info['name'] ?></h3>
                                <p><?php echo $info['occupation'] ?></p>
                            </div>
                            <p><?php echo $info['description'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
        </main>
        
        <footer>
            <table>
                <tr>
                    <td rowspan="2"><h1>Contact Info</h1></td>
                    <td rowspan="2"><img src="../resources/logo_email.png" alt="Email logo"></td>
                    <td><a href="https://www.ubt-uni.net/">bs56072@ubt-uni.net</a></td>
                    <td rowspan="2"><img src="../resources/logo_instagram.png" alt="Instagram logo"></td>
                    <td><a href="https://www.instagram.com/bianti16/">instagram.com/bianti16</a></td>
                    <td rowspan="2"><img src="../resources/logo_phone.png" alt="Phone logo"></td>
                    <td>+383 44 889 604</td>
                </tr>
                    <td><a href="https://www.ubt-uni.net/">sb00000@ubt-uni.net</a></td>
                    <td><a href="https://www.instagram.com/shpatbrahimaj_/">instagram.com/shpatbrahimaj_</a></td>
                    <td>+383 44 000 000</td>
            </table>
        </footer>
    </body>
</html>
