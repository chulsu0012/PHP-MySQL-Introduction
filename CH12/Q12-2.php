<ul class = "board_list">
    <li>
        <span class="col1">번호</span>
        <span class="col2">제목</span>
        <span class="col3">글쓴이</span>
        <span class="col4">첨부</span>
        <span class="col5">등록일</span>
    </li>
    <?php
        include "session.php";

        if (isset($_GET["page"]))
            $page = $_GET["page"];
        else
            $page = 1;
        
        $con = mysqli_connect("localhost", "user", "12345", "sample");
        $sql = "select * from memberboard order by num desc";

        $result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($result);

        $scale = 4;

        if (!$total_record % $scale == 0)
            $total_page = floor($total_record/$scale);
        else
            $total_page = floor($total_record/$scale) + 1;

        $start = (intval($page) - 1) * $scale;

        $number = $total_record - $start;
        for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
            mysqli_data_seek($result, $i);
            $row = mysqli_fetch_assoc($result);

            $num = $row["num"];
            $id = $row["id"];
            $name = $row["name"];
            $subject = $row["subject"];
            $regist_day = $row["regist_dat"];
            if ($row["file_name"])
                $file_image = "<img src='./file.png'>";
            else
                $file_image = "";
        ?>
        <li>
            <span class="co1"><?=$number?></span>
            <span class="co2"><a href="view.php?num=<?=$num?>&page=<?$page?>"><?=$subject?></a></span>
            <span class="co3"><?=$name?></span>
            <span class="co4"><?=$file_image?></span>
            <span class="co5"><?=$regist_day?></span>
        </li>
        <?php
        $number--;
    }
    mysqli_close($con);
    ?>
</ul>