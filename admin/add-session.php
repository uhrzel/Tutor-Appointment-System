<?php

session_start();

if (isset($_SESSION["user"])) {
    if (($_SESSION["user"]) == "" or $_SESSION['usertype'] != 'a') {
        header("location: ../login.php");
    }
} else {
    header("location: ../login.php");
}


if ($_POST) {
    //import database
    include("../connection.php");
    $title = $_POST["title"];
    $docid = $_POST["teacherid"];
    $nop = $_POST["nop"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $fee = $_POST["fee"];
    $sql = "insert into schedule (teacherid,title,scheduledate,scheduletime,nop,app_fee) values ($docid,'$title','$date','$time',$nop, $fee);";
    $result = $database->query($sql);
    header("location: schedule.php?action=session-added&title=$title");
}
