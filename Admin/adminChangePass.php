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

$adminEmail = $_SESSION['$adminLogemail'];
if (isset($_REQUEST['adminPassBtn'])) {
    // echo "<script>console.log('click me')</script>" ;
    if ($_REQUEST['adminPass'] == "") {
        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {
        $admin_email = $_REQUEST['admin_email'];
        $adminPass = $_REQUEST['adminPass'];
        $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$admin_email'";
        if(mysqli_query($conn, $sql) == true){
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Passward changed successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Password not changed...</div>';
        }
    }
}
?>


<div class="jumbotron col-sm-5 mt-5 ml-3 mr-3" style="border-radius: 10px;">
    <form action="" method="POST">
        <?php
        $sql = "SELECT * FROM admin";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        $row = mysqli_fetch_assoc($result);
        ?>
        <h3 class="text-center mb-4">Change Password</h3>
        <div class="form-group">
            <label for="">Email Id</label>
            <input type="text" class="form-control" name="admin_email" id="admin_email" value="<?php echo $adminEmail; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Password </label>
            <input type="text" class="form-control" name="adminPass" id="adminPass">
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-warning" name="adminPassBtn" id="adminPassBtn"> Change Password </button>
        </div>
        <?php
        if (isset($alertMsg)) {
            echo $alertMsg;
        }
        ?>
    </form>
</div>

<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>