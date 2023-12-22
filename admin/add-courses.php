<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <title>Teacher</title>
    <style>
        .popup {
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
</head>

<body>
    <?php

    //import database
    include("../connection.php");


    if ($_POST) {
        $courseName = $_POST['courseName'];
        $courseDescription = $_POST['courseDescription'];

        $result = $database->query("SELECT * FROM courses WHERE coursename='$courseName';");

        if ($result->num_rows == 0) {
            $sql = "INSERT INTO courses (coursename, coursedescription) VALUES ('$courseName', '$courseDescription');";
            $database->query($sql);

            // Additional actions or notifications can be added here

            $error = '4'; // Success
        } else {
            $error = '1'; // Course already exists
        }
    } else {
        $error = '3'; // No form submission
    }

    header("location: courses.php?action=add&error=" . $error);
    ?>

</body>

</html>