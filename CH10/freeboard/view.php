<?php
    if (isset($_GET["num"])) //$GET["num"] : 레코드 번호
        $num = $_GET["num"];
    else
        $num = "";
    
    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "select * from freeboard where num=$num"; //레코드 검색
    $result = mysqli_query($con, $sql); //SQL 명령 실행

    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $subject = $row["subject"];
    $regist_day = $row["regist_day"];
    $content = $row["content"];
    $content = str_replace(" ","&nbsp;", $content); //공백 변환
    $content = str_replace("\n", "<br>", $content); //줄바꿈 변환
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>PHP+데이터베이스 입문</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function check_password(mode, num) {
        // mode : modify(수정) delete(삭제), num: 레코드 번호
        window.open("password_form.php?mode=" + mode + "&num=" + num, "pass_check",
            "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
    }
    </script>
</head>

<body>
    <h2>자유게시판 > 내용보기</h2>
    <ul class="board_view">
        <li class="row1">
            <span class="col1"><b>제목 :</b><?=$subject?></span>
            <span class="col1"><?=$name?> | <?=$regist_day?></span>
        </li>
        <li class="row2">
            <?=$content?>
        </li>
    </ul>
    <ul class="buttons">
        <li><button onclick="location.href='list.php'">목록보기</button></li>
        <li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>
        <li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
        <li><button onclick="location.href='form.php'">글쓰기</button></li>
    </ul>
</body>

</html>