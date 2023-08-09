<?php
    session_start();
    if (isset($_SESSION["userid"])) {
        unset($_SESSION["userid"]);
    }
    if (isset($_SESSION["userid"])) {
        unset($_SESSION["username"]);
    }

    echo "<script>
            location.href = '2-session_page.php'
        </script>";
?>