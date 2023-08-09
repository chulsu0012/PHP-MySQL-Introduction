<?php
    // 쿠키 삭제
    setcookie("userid", "", time() - 3600);

    echo "<script>
            location.href = '1-cookie_page.php';
        </script>";
?>