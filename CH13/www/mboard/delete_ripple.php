<?php
    $table = $_GET["table"];
    $table_ripple = $table."_ripple";
    $num = $_GET["num"];
    $ripple_num = $_GET["ripple_num"];
    $page = $_GET["page"];

    include "../include/db_connect.php";
    $sql = "delete from $table_ripple where num=$ripple_num";
    mysqli_query($con, $sql);
    
    mysqli_close($con);

    echo "<script>
    location.href = 'index.php?type=view&table=$table&num=$num&page=$page';
    </script>"
?>