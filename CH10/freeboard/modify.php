<?php
    $num = $_GET["num"];

    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)"); //UTC 기준 '년-월-일 (시:분)'

    $con = mysqli_connect("localhost", "user", "12345", "sample");

    //수정 명령
    $sql = "update freeboard set name='$name', pass='$pass', subject='$subject',
            content='$content', regist_day='$regist_day' where num=$num";

    mysqli_query($con, $sql);

    mysqli_close($con); // DB 연결 끊기

    // 목록 페이지로 이동
    echo "<script>
        location.href = 'list.php';
        </script>";
?>