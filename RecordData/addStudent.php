<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('../dbconn.php');

// Checking Email Already Registered
if (isset($_POST["stuemail"])) {
    $stuemail = $_POST["stuemail"];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '" . $stuemail . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    echo json_encode($row);
}





// Insert Student

if (isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])) {

    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode("OK");
    } else {
        echo json_encode("Failed");
    }
}





// <!-- Student Login Varification -->
if (!isset($_SESSION['is_login'])) {
    if (isset($_POST['stuLogEmail']) && isset($_POST['stuLogpass'])) {
        $stuLogEmail = $_POST['stuLogEmail'];
        $stuLogpass = $_POST['stuLogpass'];

        $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '" . $stuLogEmail . "' AND stu_pass = '" . $stuLogpass . "'";

        $result = mysqli_query($conn, $sql) or die("Query unsuccessful..");
        $row = mysqli_num_rows($result);

        if ($row == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['$stuLogEmail'] = $stuLogEmail;
            echo json_encode($row);
        } else if ($row == 0) {
            echo json_encode($row);
        }
    }
}
