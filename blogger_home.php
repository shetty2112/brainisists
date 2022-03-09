<?php
    include("connection.php");

    if(!isset($_COOKIE['login']) && $_COOKIE['login'] != 'a'){
        echo "<script>
                window.location.href = 'index.php';
              </script>";
    }
    $blogr_id = $_COOKIE['blogr_id'];
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
        <nav>
            <h1 id="logo_name">Brainisists</h1>
            <button id="menu-button" onclick="open_menu()"></button>
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

    <div id="blogger_profile_sec">
         <div id="blogger_profile_box">
            <h1 id="categories_ht">Profile</h1><br>
            <button id="newpost_btn" onclick="window.location.href = 'editor.php'">+ New Post</button>
        </div> 
    </div>

    <h1 class="articles_head">Welcome Writer</h1>

    <div id="articles_sec1">
        <?php
        
            $preview_query = "SELECT * FROM `rsd_blogs` WHERE `blogr_id` = $blogr_id";
            $result_preview = mysqli_query($conn,$preview_query);

            if(mysqli_num_rows($result_preview) == 0){
                echo "<h1 style='text-align: center; margin-top:20%;'>No Blogs posted yet</h1>";
            }else{
            while($row = mysqli_fetch_assoc($result_preview)){
                $result = $row["content"];
                $title = $row["title"];
                $id = $row["id"];
                $img = $row["img"];
        ?>
        <div id="article_box<?php echo $id;?>" class="blogger_articles_1" onclick='display_blog("<?php echo $id; ?>")' >
            <img src="<?php echo $img; ?>" class="blogger_article_pic" alt="">
            <div id="article_title">
                <h1><?php echo $title; ?></h1>
            </div>
        </div>
        <div id="article<?php echo $id; ?>" class="article">
            <?php echo $result; ?>
        </div>
        <?php
            }
        }
        ?>
        
    </div>
    <div id="blogger_trending_sec">
        <div id="blogger_trending_box">
            <h1 id="trending_ht">Trending</h1><br>
            <br><br><br><br><br><br><hr>
            <h1 id="popular_ht">Popular</h1>
        </div>
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
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        }
    </script>
</body>
</html>