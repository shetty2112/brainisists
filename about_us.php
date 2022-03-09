<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Brainisists</title>
      <link rel="stylesheet" href="css/home.css">
      <link rel="shortcut icon" type="image/png" href="img/logo_72x72.png">
</head>
<body>
    <div>
        <nav>
            <h1 id="logo_name">Brainisists</h1>
            <button id="menu-button" onclick="open_menu()"></button>
            <ul>
                <li><a class="nav_a" href="team.php">Team</a></li>
                <li><a class="nav_a" href="#about us">Contact</a></li>
                <li><a class="nav_a" href="articles.php">Articles</a></li>
                <li><a class="nav_a" href="about_us.php">About us</a></li>
                <li><a class="nav_a" href="index.php">Home</a></li>
            </ul>
        </nav>
        <ul id="ul-class" class="ul-class">
        <?php
                if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'a'){
            ?>
            <a href="blogger_home.php">
            <?php
                }else{
            ?>
            <a href="index.php">
            <?php
            }
            ?>
                <li style="font-size: 120%;">Home</li>
            </a>
            <a href="articles.php">
                <li style="font-size: 120%;">Articles</li>
            </a>
            <a href="">
                <li style="font-size: 120%;">About us</li>
            </a>
            <a href="">
                <li style="font-size: 120%;">Contact</li>
            </a>
            <?php
                if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'a'){
                   ?>
                    <a href="logouta.php">
                        <li style="font-size: 120%;">Logout</li>
                    </a>
            <?php 
                }else{
                    ?>
                    <a href="">
                        <li style="font-size: 120%;">Login</li>
                    </a>
                    <a href="">
                        <li style="font-size: 120%;">Sign up</li>
                    </a>
                    <a href="admin_login.php">
                        <li style="font-size: 120%;">Admin Login</li>
                    </a>
            <?php
                }
            ?>
        </ul>
    </div>
    <h1 class="articles_head">About Us</h1>
    <div>
        <div class="our_box" style="margin-top: 1%;" id="our_story"><h2>Our Story</h2></div>
        <div class="our_box" style="margin-top: 1%;" id="our_essence"><h2>Our Essence</h2></div>
        <div class="our_box" id="our_vision"><h2>Our Vision</h2></div>
        <div class="our_box" id="our_mission"><h2>Our Mission</h2></div>
    </div>
    <div id="myModal" class="modal">
    
    </div>
    <script type="text/javascript">
    window.onclick = function(event) {
            if (event.target == ulClass) {
                modal.style.display = "block";
                ulClass.style.right = "0";
            } else if (event.target == modal) {
                modal.style.display = "none";
                ulClass.style.right = "-100%";
            } else if (event.target == modal) {
                modal1.style.display = "block";        
            }
        }

    var modal = document.getElementById("myModal");
    var article_container = document.getElementsByClassName("article");
    var ulClass = document.getElementById("ul-class");

    function open_menu(){
        modal.style.display = "block";
        ulClass.style.right = "0";
                
    }

    function display_blog(id){
        var article = document.getElementById("article"+id);
        modal.style.display = "block";
        article.style.display = "block";
        window.onclick = function(event) {
             if (event.target == modal) {
                article.style.display = "none";
                modal.style.display = "none";
            }
        }
    }
</script>
</body>
</html>