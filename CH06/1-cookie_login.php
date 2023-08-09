<?php
    // 30일 후 쿠키 만료
    setcookie("userid", "hong123", time() + 24*60*60 * 30);

    echo "<script>
            location.href = '1-cookie_page.php';
        </script>";
?>