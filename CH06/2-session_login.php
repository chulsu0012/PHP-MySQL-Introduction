<?php
    session_start();
    $_SESSION['userid'] = "hong123";
    $_SESSION["username"] = '홍길동';

    echo "<script>
            location.href='2-session_page.php';
        </script>";
?>