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


if (isset($_REQUEST['lessonSubmitBtn'])) {
    // Checking for Empty Fields
    if (($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "")) {

        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        

        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_tmp = $_FILES['lesson_link']['tmp_name'];
        $lesson_link_folder = '../lessonvid/' . $lesson_link;
        move_uploaded_file($lesson_link_tmp, '../lessonvid/' . $lesson_link);


        $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES ('$lesson_name', '$lesson_desc', '$lesson_link_folder', '$course_id', '$course_name')";

        if (mysqli_query($conn, $sql) == true) {
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Lesson Added successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Unable to add lesson...</div>';
        }
    }
}

?>

<div class="col-md-6 mt-5 ml-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if (isset($_SESSION['course_id'])) echo $_SESSION['course_id'];  ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if (isset($_SESSION['course_name'])) echo $_SESSION['course_name'];  ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Descrition</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
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