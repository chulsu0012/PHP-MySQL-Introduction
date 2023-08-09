<?php
    session_start();

    if(isset($_SESSION["userid"])) {
        unset($_SESSION["userid"]);
    }
    if(isset($_SESSION["userid"])) {
        unset($_SESSION["username"]);
    }
    if(isset($_SESSION["userid"])) {
        unset($_SESSION["userlevel"]);
    }
?>