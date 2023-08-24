<?php
    $num = $_GET["num"];

    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "delete from memberboard where num='$num'";
    mysqli_query($con, $sql);

    mysqli_close($con);
?>