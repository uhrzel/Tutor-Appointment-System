<?php

$database = new mysqli("localhost", "root", "arzelzolina10", "tutor");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}
