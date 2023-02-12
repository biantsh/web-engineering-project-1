<!DOCTYPE html>

<?php
    require("../DATABASE/db.php");
    include("../auth.php");

    $query = "SELECT * FROM `technologies`";
    $result = mysqli_query($connection, $query);
    $technologies = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learn Front-end Development</title>
        <link rel="stylesheet" href="learn.css">
    </head>

    <body>
        <header>
            <ul class="navbar">
                <a href="../login.php"> <li>Home</li></a>
                <a href="learn.php"><li>Learn</li></a>
                <a href="../about_us_page/about_us.php"><li>About us</li></a>
            </ul>
        </header>
        
        <main>
            <div>
                <p class="intro-paragraph">Here you can find useful resources for different technologies used on the web. They are very straight-forward tools 
                                           that you can quite quickly apply to your real-life projects. </p>
            </div>
            <div class="destination-logos" >
                    <a href="#card0"><img src="../resources/logo_html.png" alt="html" class="html"  id="html"></a>
                    <a href="#card1"><img src="../resources/logo_css.png" alt="css" class="css"></a><br>
                    <a href="#card2"><img src="../resources/logo_js.png" alt="js"  class="javascript"></a>
            </div>
        </main> 
        
        <div class="learn-section">
            <?php foreach($technologies as $technology) : ?>
                <div class="card" id="<?php echo $technology['element_id'] ?>">
                    <h3 style="color: <?php echo $technology['title_color'] ?>;"><?php echo $technology['name'] ?></h3>
                    <p><?php echo $technology['description'] ?></p>
                    <a href="<?php echo $technology['resource_link']?>" target="_blank"><button>More about <?php echo $technology['acronym'] ?></button></a>
                </div>
            <?php endforeach; ?>
        </div>
    
        <div class="track-progress">
            <a href="../track_progress_page/track_progress.php"><button>Track progress</button></a>
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
