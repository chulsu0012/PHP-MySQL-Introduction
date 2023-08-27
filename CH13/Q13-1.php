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

    if (isset($_SESSION["userlevel"]))
        $userlevel = $_SESSION["userlevel"];
    else
        $userlevel = "";
?>
<!-- 생략 -->
<?php
    if (!$userid) {
        echo "<li>홈페이지에 오신 것을 환영합니다~~~ </li>";
    } 
    else {
        $logged = $username."(Level:".$userlevel.")님 환영합니다. ";
        echo "<li>$logged</li>";
    }
?>
<!-- 생략 -->