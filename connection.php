<?php

$database = new mysqli("localhost", "root", "", "tutor");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}
