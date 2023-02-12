<!DOCTYPE html>
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
                <p class="intro-paragraph">Here you can find useful resources for HTML, CSS and JavaScript. They are very straight-forward tools 
                                that you can quite quickly apply to your real-life projects. </p>
            </div>
            <div class="destination-logos" >
                    <a href="#learnmoreabouthtml"><img src="../resources/logo_html.png" alt="html" class="html"  id="html"></a>
                    <a href="#learnmoreaboutcss"><img src="../resources/logo_css.png" alt="css" class="css"></a><br>
                    <a href="#learnmoreaboutjs"><img src="../resources/logo_js.png" alt="js"  class="javascript"></a>
            </div>
        </main> 
        
        <div class="learn-section">        
            <div class="card" id="learnmoreabouthtml">        
                <h3 style="color: orange;">Html</h3>
                <p>...stands for Hyper Text Markup Language and is the standard markup language for creating webpages. In simple terms, 
                it describes the <i>structure</i> of a webpage. HTML consists of a series of elements such as buttons or labels, 
                where each element tells the browser how it wants to be displayed.</p>
                <a href="https://www.geeksforgeeks.org/html/" target="_blank"><button>More about HTML</button></a>
            </div>

            <div class="card" id="learnmoreaboutcss">
                <h3 style="color: lightblue;">Css</h3>
                <p>...is the language that describes the <i>presentation</i> of webpages, including colors, layout, and fonts. It allows 
                the page to be responsive to different types of devices, such as computers, tablets or phones. CSS can be used with 
                any XML-based markup language, but is most commonly paired with HTML.</p>
                <a href="https://www.geeksforgeeks.org/css/" target="_blank"><button>More about CSS</button></a>
            </div>

            <div class="card" id="learnmoreaboutjs">       
                <h3 style="color: yellow;">JavaScript</h3>
                <p>...is used by programmers across the world to create dynamic and interactive web content like applications and browsers. 
                Due to being the main scripting language used in the web by a wide margin, JavaScript is the most popular programming 
                language in the world.</p>
            <a href="https://www.geeksforgeeks.org/javascript/" target="_blank"><button>More about JS</button></a>
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