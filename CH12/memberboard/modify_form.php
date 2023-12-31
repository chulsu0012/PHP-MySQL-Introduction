<?php
    include "session.php";

    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "select * from memberboard where num=$num";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $subject = $row["subject"];
    $content = $row["content"];
    $regist_day = $row["regist_day"];
    $file_name = $row["file_name"];

    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP+MySQL 입문</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function check_input() {
        if (!document.board.subject.value) {
            alert("제목을 입력하세요!");
            document.board.subject.focus();
            return;
        }
        if (!document.board.content.value) {
            alert("내용을 입력하세요!");
            document.board.content.focus();
            return;
        }
        document.board.submit();
    }
    </script>
</head>
<body>
    <h2>회원 게시판 > 글 수정하기</h2>
    <form name="board" method="post" action="modify.php?num=<?=$num?>&page=<?=$page?>">
        <ul class="board_form">
            <li>
                <span class="col1">이름 : </span>
                <span class="col2"><?=$name?></span>
            </li>
            <li>
                <span class="col1">제목 : </span>
                <span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
            </li>
            <li>
                <span class="col1">내용 : </span>
                <span class="col2"><textarea name="content"><?=$content?></textarea></span>
            </li>
            <li>
                <span class="col1"> 첨부 파일 : </span>
                <span class="col2"><?=$file_name?></span>
            </li>
        </ul>
        <ul class="buttons">
            <li><button type="button" onclick="check_input()">저장하기</button></li>
            <li><button type="button" onclick="location.href='list.php'">목록보기</button></li>
        </ul>
    </form>
</body>
</html>