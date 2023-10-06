<?php

session_start();

if ($_GET) {
    include("../connection.php");
    $id = $_GET["id"];
    $sql = $database->query("DELETE FROM appointment WHERE appoid='$id';");
    $stmt = $database->prepare($sql);
    header("location: appointment.php");
}
