<?php
    include('connection.php');
    if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'a'){
        echo "<script>
                window.location.href = 'blogger_home.php';
              </script>";
    }
    if(isset($_POST['username_input']) && isset($_POST['password_input'])){
        $username = $_POST['username_input'];
        $password = $_POST['password_input'];

        $login_query = "SELECT * FROM `rsd_bloggers` WHERE `blogr_username` LIKE '".$username."' AND `blogr_password` LIKE '".$password."'";
        $result_login = mysqli_query($conn, $login_query);

        

        if(mysqli_num_rows($result_login) == 1){
            while($row = mysqli_fetch_assoc($result_login)){
                $blogr_id = $row['blogr_id'];
            }
            echo "<script>
                    document.cookie = 'login = a; expires=Fri, 31 Dec 9999 23:59:59 GMT';
                    document.cookie = 'blogr_id = ".$blogr_id."; expires=Fri, 31 Dec 9999 23:59:59 GMT';
                    alert('Login Successful');
                    window.location.href = 'blogger_home.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Login Unsuccessfull');
                  </script>";
        }
    }
?>

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
        <nav style="box-shadow:0px 0px 0px 0px rgba(0,0,0,0);">
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
            <a href="index.php">
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
            <a href="">
                <li style="font-size: 120%;">Login</li>
            </a>
            <a href="">
                <li style="font-size: 120%;">Sign up</li>
            </a>
            <a href="admin_login.php">
                <li style="font-size: 120%;">Admin Login</li>
            </a>
        </ul>
    </div>
    <div style="width: 15%; height:15%; position:absolute; left: 42vw; top: 10vh;">
        <img src="img/logo_72x72.png" style="width: 100%;" alt="">
    </div>
    <p id="ad_login_ht">Admin Login</p>
    <div id="admin_login_form">
        <form action="" method="post">
            <label for="username_input" id="username_input1">Username:</label>
            <input type="text" name="username_input" id="username_input" required><br>
            <label for="password_input" id="password_input1">Password:</label>
            <input type="password" name="password_input" id="password_input" required><br>
            <input type="submit" id="login_btn" value="Login">
        </form>
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
    </script>
</body>
</html>