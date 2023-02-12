<!DOCTYPE html>
<html>
<head>
    <title>Learn Front-end Development</title>
    <link rel="stylesheet" href="login.css">
    <script defer src="form_validation_signup.js"></script>
</head>

<body>
    <header>
        <ul class="navbar">
            <a href="../login.php"><li>Home</li></a>
            <li class="disabled-nav-button">Learn</li>
            <li class="disabled-nav-button">About us</li>
        </ul>
    </header>

    <div class="container">

        <div class="logos">
            <img src="../resources/logos.png" alt="Logos">
        </div>

        <div class="login">
            <label id="login-signup-label">Sign up</label>

            <form id="login-form" action="" method="post" name="login">
                <label for="userName">Username</label><br>
                <input id="userName" type="text" name="username" required><br>
                <label for="userPassword">Password</label><br>
                <input id="userPassword" type="password" name="password" required><br>
                <label for="userConfirmPassword">Confirm password</label><br>
                <input id="userConfirmPassword" type="password" name="confirmPassword" required></input>

                <p id="user-not-exist"></p>
            </form>

            <button id="submit-button" type="submit" form="login-form">Submit</button>
            <a href="../login.php"><button id="login-signup-button">Log in</button></a>
        
            <div id="errorMessage"></div>
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

    <?php
        require('../DATABASE/user.php');
        include("../auth.php");

        // Register user
        if (isset($_POST['username'])) {
            $user = new User($_REQUEST['username'], $_REQUEST['password']);

            if (!$user->existsInDB()) {
                $success = $user->addToDB();
                if ($success) {
                    echo '<script>
                        console.log("User added!");
                    </script>';
                } else {
                    echo '<script>
                        console.log("User could not be added!");
                    </script>';
                }
            } else {
                echo '<script>
                        console.log("User already exists!");
                    </script>';
            }
        }
    ?>
</body>
</html>
