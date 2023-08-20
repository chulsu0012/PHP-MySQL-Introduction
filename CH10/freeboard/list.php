<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP+SQL 입문</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>자유게시판 > 목록보기</h2>
    <ul class="board_list">
        <li>
            <span class="col1">번호</span>
            <span class="col2">제목</span>
            <span class="col3">글쓴이</span>
            <span class="col4">등록일</span>
        </li>
        <?php
            $con = mysqli_connect("localhost", "user", "12345", "sample");
            $sql = "select * from freeboard order by num desc";
            $result = mysqli_query($con, $sql); //SQL 명령 실행
            $total_record = mysqli_num_rows($result); //전체 글 수

            $number = $total_record; //글 번호 매김
            for($i=0; $i<$total_record; $i++) {
                mysqli_data_seek($result, $i); //레코드 포인터 이동
                $row = mysqli_fetch_assoc($result);

                $num = $row["num"];
                $name = $row["name"];
                $subject = $row["subject"];
                $regist_day = $row["regist_day"];
        ?>
            <li>
                <span class="col1"><?=$number?></span>
                <span class="col2"><a href="view.php?num=<?=$num?>"><?=$subject?></a></span>
                <span class="col3"><?=$name?></span>
                <span class="col4"><?=$regist_day?></span>
            </li>
        <?php
                $number--;
            }
            mysqli_close($con);
        ?>
    </ul>
    <ul class="buttons">
        <li><button onclick="location.href='list.php'">목록</button></li>
        <li><button onclick="location.href='form.php'">글쓰기</button></li>
    </ul>
</body>
</html>