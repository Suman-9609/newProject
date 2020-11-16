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
?>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course ID: </label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger"> Search </button>
    </form>


    <?php
    $sql = "SELECT course_id FROM course";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']) {
            $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (($row['course_id']) == $_REQUEST['checkid']) {
                $_SESSION['course_id'] = $row['course_id'];
                $_SESSION['course_name'] = $row['course_name'];
    ?>
                <h4 class="bg-dark text-white p-2 mt-4">Course Id : <?php if (isset($row['course_id'])) echo $row['course_id'] ?> Course Name : <?php if (isset($row['course_name'])) echo $row['course_name'] ?></h4>
    <?php
            }
        }
    }
    ?>
</div>

<?php
if (isset($_SESSION['course_id'])) {
    echo '<div>
    <a href="addLesson.php" class="btn btn-danger box"> <i class="fas fa-plus fa-2x"></i> </a>
    </div>';
}
?>


<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>