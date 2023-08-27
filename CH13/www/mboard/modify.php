<?php
    session_start();

    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = ""; 

    if (!$userid) {
        echo "<script>
        alert('게시판 글 수정은 로그인 후 이용해 주세요!');
        history.go(-1)
        </script>";
        exit;
    }

    $table = $_GET["table"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

    if (isset($_POST["is_html"]))
        $is_html = $_POST["is_html"];
    else
        $is_html = "";
    $regist_day = date("Y-m-d (H:i)");

    include "../include/db_connect.php";
    $sql = "update $table set subject='$subject', is_html='$is_html', ";
    $sql .= "content='$content', regist_day='$regist_day' where num=$num";
    
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "<script>
    location.href = 'index.php?type=list&table=$table&page=$page';
    </script>";
?>