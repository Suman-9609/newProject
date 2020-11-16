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

//Update
if (isset($_REQUEST['stuUpdateBtn'])) {
    //    echo "<script>console.log('click me')</script>" ;
    if (($_REQUEST['stu_id'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")) {
        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {
        $sid = $_REQUEST['stu_id'];
        $sname = $_REQUEST['stu_name'];
        $semail = $_REQUEST['stu_email'];
        $spass = $_REQUEST['stu_pass'];

        $sql = "UPDATE student SET stu_id = '$sid', stu_name = '$sname', stu_email = '$semail', stu_pass = '$spass' WHERE stu_id = '$sid'";

        if (mysqli_query($conn, $sql) == true) {
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Update Student successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Data cannot updated...</div>';
        }
    }
}

?>

<div class="col-md-6 mt-5 ml-3 jumbotron">
    <h3 class="text-center">Update Student Details</h3>

    <?php
    if (isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if (isset($row['stu_id'])) echo $row['stu_id'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if (isset($row['stu_name'])) echo $row['stu_name'] ?>">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if (isset($row['stu_email'])) echo $row['stu_email'] ?>">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if (isset($row['stu_pass'])) echo $row['stu_pass'] ?>">
        </div>

        <div class="text-center">
            <button class="btn btn-warning" id="stuUpdateBtn" name="stuUpdateBtn">Update</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($alertMsg)) {
            echo $alertMsg;
        } ?>
    </form>
</div>



<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>