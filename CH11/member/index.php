<?php
    session_start();
    if (isset($_SESSION["userid"]))
        $userid = $_SESSION["userid"];
    else
        $userid = "";

    if (isset($_SESSION["username"]))
        $username = $_SESSION["username"];
    else
        $username = "";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP+MySQL 입문</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h3 class="logo">
            <a href="index.php">PHP+MySQL 입문</a>
        </h3>
        <div class="top">
<?php
    if (!$userid) {
?>
        <span><a href="form.php">회원가입</a></span>
        <span> | </span>
        <span><a href="login_form.php">로그인</a></span>
<?php
    }
    else {
        $logged = $username."(".$userid.")";
?>
        <span><?=$logged?></span>
        <span> | </span>
        <span><a href="logout.php">로그아웃</a></span>
        <span> | </span>
        <span><a href="modify_form.php">정보수정</a></span>
<?php
    }
?>
        </div>
    </div>
</body>
</html>