<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    include "../include/db_connect.php";
    $sql = "select * from $table where num=$num";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $subject = $row["subject"];
    $content = $row["content"];
    $is_html = $row["is_html"];
    if ($is_html == 'y')
        $html_checked = "checked";
    else
        $html_checked = "";
    $regist_day = $row["regist_day"];
    $file_name = $row["file_name"];

    mysqli_close($con);
?>
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
    <form name="board" method="post" action="modify.php?table=<?=$table?>&num=<?=$num?>&page=<?=$page?>">
        <div class="board_form">
            <h2><?=$board_title?> > 글 수정하기</h2>
            <ul>
                <li>
                    <span class="col1">이름 : </span>
                    <span class="col2"><?=$name?>
                        <span class="is_html"><input type="checkbox" name="is_html" value="y" <?=$html_checked?>> HTML 쓰기</span>
                </span>
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
        </div>
        <ul class="buttons">
            <li><button type="button" onclick="check_input()">저장하기</button></li>
            <?php
                $list_url = "index.php?type=list&table=$table&page=$page";
            ?>
            <li><button type="button" onclick="location.href='<?=$list_url?>'">목록보기</button></li>
        </ul>
    </form>