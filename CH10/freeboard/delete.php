<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user", "12345", "sample");
    //삭제 명령
    $sql = "delete from freeboard where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    // 목록 페이지로 이동
    echo "<script>
        location.href = 'list.php';
        </script>";
?>