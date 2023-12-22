<?php



//import database
include("../connection.php");




if ($_POST) {
    $courseName = $_POST['courseName'];
    $courseDescription = $_POST['courseDescription'];
    $oldCourseName = $_POST["oldCourseName"]; // Assuming you have an input field for the old course name

    // Add validation if needed

    $sql = "SELECT * FROM courses WHERE coursename='$courseName';";
    $result = $database->query($sql);

    if ($result->num_rows > 0 && $courseName != $oldCourseName) {
        // Course name already exists
        $error = '1';
    } else {
        // Update the course information
        $sqlUpdate = "UPDATE courses SET coursename='$courseName', coursedescription='$courseDescription' WHERE coursename='$oldCourseName';";
        $database->query($sqlUpdate);

        $error = '4'; // Success
    }
} else {
    $error = '3'; // No form submission
}

header("location: courses.php?action=edit&error=" . $error);
?>


</body>

</html>