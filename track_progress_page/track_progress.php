<!DOCTYPE html>

<?php
    require("../DATABASE/db.php");
    include("../DATABASE/user_progress.php");

    $user_progress = new UserProgress($_SESSION["username"]);
?>

<html>
<head>
    <title>Track Progress</title>
    <link rel="stylesheet" href="track_progress.css">
</head>

<body>
    <header>
        <ul class="navbar">
            <a href="../login.php"><li>Home</li></a>
            <a href="../learn_page/learn.php"><li>Learn</li></a>
            <a href="../about_us_page/about_us.php"><li>About us</li></a>
        </ul>
    </header>

    <div>
        <p class="intro-paragraph">Use this page to keep note of which technologies you have already read up on. Boxes you click
                                   are saved automatically.</p>
    </div>

    <div class="progress-box-container">
        <div class="progress-box">
            <input type="checkbox" <?php echo $user_progress->getFinishedHTML() != 0 ? 'checked' : '' ?>><p>HTML</p>
            
        </div>

        <div class="progress-box">
            <input type="checkbox" <?php echo $user_progress->getFinishedCSS() != 0 ? 'checked' : '' ?>><p>CSS</p>
        </div>

        <div class="progress-box">
            <input type="checkbox" <?php echo $user_progress->getFinishedJS() != 0 ? 'checked' : '' ?>><p>JS</p>
        </div>
    </div>

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
