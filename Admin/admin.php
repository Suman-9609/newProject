<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('../dbconn.php');


// <!-- Student Login Varification -->
if (!isset($_SESSION['is_admin_login'])) {
    if (isset($_POST['adminLogemail']) && isset($_POST['adminLogpass'])) {
        $adminLogemail = $_POST['adminLogemail'];
        $adminLogpass = $_POST['adminLogpass'];

        $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '" . $adminLogemail . "' AND admin_pass = '" . $adminLogpass . "'";

        $result = mysqli_query($conn, $sql) or die("Query unsuccessful..");
        $row = mysqli_num_rows($result);

        if ($row == 1) {
            $_SESSION['is_admin_login'] = true;
            $_SESSION['$adminLogemail'] = $adminLogemail;
            echo json_encode($row);
        } else if ($row == 0) {
            echo json_encode($row);
        }
    }
}
