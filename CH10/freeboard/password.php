<?php
    $mode = $_GET["mode"];
    $num = $_GET["num"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "user", "12345", "sample");

    $sql = "select pass from freeboard where num=$num";
    $result = mysqli_query($con, $sql); //SQL 명령 실행

    $row = mysqli_fetch_assoc($result);
    $db_password = $row["pass"];
    mysqli_close($con);

    //$pass: 입력 비밀번호, $db_password: DB 저장 비밀번호
    if ($pass == $db_password) {
        if ($mode == "modify")
            $url = "modify_form.php?num=$num";
        else
            $url = "delete.php?num=$num";

        echo "<script>
            self.close();
            opener.location.href = '$url';
            </script>";
    }
    else {
        echo "<script>
            location.href='password_form.php?num=$num&error=y';
            </script>";
    }
?>