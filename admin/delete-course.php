<?php
session_start();

if (isset($_SESSION["user"])) {
    if (($_SESSION["user"]) == "" or $_SESSION['usertype'] != 'a') {
        header("location: ../login.php");
    }
} else {
    header("location: ../login.php");
}

if ($_GET) {
    // Import database
    include("../connection.php");
    $id = $_GET["id"];

    // Check if the course exists before fetching data
    $result001 = $database->query("SELECT * FROM courses WHERE courseid=$id");
    if ($result001) {
        $row = $result001->fetch_assoc();
        $courseName = $row["coursename"];

        // Delete the course
        $sql = $database->query("DELETE FROM courses WHERE courseid=$id");

        if ($sql) {
            header("location: courses.php");
        } else {
            // Handle deletion error
            echo "Error deleting course.";
        }
    } else {
        // Handle query error or course not found
        echo "Error fetching course information.";
    }
}
