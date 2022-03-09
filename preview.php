<?php
    include ('connection.php');

    $preview_query = "SELECT `content` FROM `rsd_blogs` WHERE `id` = 6";
  
    $result_preview = mysqli_query($conn,$preview_query);

    while($row = mysqli_fetch_assoc($result_preview)){
        $result = $row['content'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainisists</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div style="width:60vw; height:80vh; margin-top:10vh; margin-left:20vw; background-color:#c4c4c4;">
        <?php
            echo $result;
        ?>
    </div>
</body>
</html>