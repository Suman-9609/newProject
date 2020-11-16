<!-- Admin header include -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
include("adminInclude/header.php");
include("../dbconn.php");

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['$adminLogemail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}


if (isset($_REQUEST['stuSubmitBtn'])) {
    // Checking for Empty Fields
    if (($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")) {
        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_pass = $_REQUEST['stu_pass'];

        $sql = "INSERT INTO student (stu_name,stu_email,stu_pass) VALUES ('$stu_name','$stu_email','$stu_pass')";

        if (mysqli_query($conn, $sql) == true) {
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Data inserted successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Data not inserted...</div>';
        }
    }
}

?>

<div class="col-md-6 mt-5 ml-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass">
        </div>

        <div class="text-center">
            <button class="btn btn-danger" id="stuSubmitBtn" name="stuSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($alertMsg)) {
            echo $alertMsg;
        } ?>
    </form>
</div>
</div>





<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>