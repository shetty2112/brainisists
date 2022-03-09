<?php
    include("connection.php");

    if(!isset($_COOKIE['login']) && $_COOKIE['login'] != 'a'){
        echo "<script>
                window.location.href = 'index.php';
              </script>";
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
      <div id="editor_div">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <label style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold;" for="title_input">Title:</label>
            <input type="text" name="title_input" id="title_input" placeholder="Enter Title" required>
            <label style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bold; margin-left: 5%;" for="category_input">Category:</label>
            <select name="category_input" id="categories" required>
                  <option value="">Select a Category</option>
                  <option value="Technology">Technology</option>
                  <option value="Sports">Sports</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Entertainment">Entertainment</option>
                  <option value="Food">Food</option>
                  <option value="Culture">Culture</option>
                  <option value="History">History</option>
                  <option value="Science">Science</option>
                  <option value="Literature">Literature</option>
                  <option value="Clothing">Clothing</option>
            </select>
            <input type="file" name="article_dp" id="article_dp" required>
            <div id="editor_con"><textarea class="ckeditor" name="editor" id="editor"></textarea></div>
            <br>
            <button type="submit" name="submit" id="submit">Submit</button>
            </form>
            
      </div>
      
      <script src="ckeditor_full/ckeditor.js"></script>
      <script>
            CKEDITOR.replace('editor', {
        filebrowserUploadUrl: 'ckeditor_full/ck_upload.php',
        filebrowserUploadMethod: 'form'
    });
      </script>
</body>
</html>

