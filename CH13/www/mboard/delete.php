<?php
    $table = $_GET["table"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    include "../include/db_connect.php";
    $sql = "delete from $table where num=$num";
    mysqli_query($con, $sql);
    
    mysqli_close($con);

    echo "<script>
    location.href = 'index.php?type=list&table=$table&page=$page';
    </script>"
?>