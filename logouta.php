<?php
    if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'a'){

        echo "<script>
                document.cookie = 'login = ; expires=Thu, 18 Dec 2013 12:00:00 UTC';
                document.cookie = 'blogr_id = ; expires=Thu, 18 Dec 2013 12:00:00 UTC';
                window.location.href = 'index.php';
              </script>";
    }

    echo "<script>
                window.location.href = 'index.php';
              </script>";
?>