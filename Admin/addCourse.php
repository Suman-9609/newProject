<!-- Admin header include -->
<?php
if(!isset($_SESSION)){
    session_start();
}
include("adminInclude/header.php");
include("../dbconn.php");

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['$adminLogemail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}


if (isset($_REQUEST['courseSubmitBtn'])) {
    // Checking for Empty Fields
    if (($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_original_price'] == "") || ($_REQUEST['course_price'] == "")) {
        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {

        $course_name = $_REQUEST['course_name'];
        $course_desc = $_REQUEST['course_desc'];
        $course_author = $_REQUEST['course_author'];
        $course_duration = $_REQUEST['course_duration'];
        $course_original_price = $_REQUEST['course_original_price'];
        $course_price = $_REQUEST['course_price'];

        $course_img = $_FILES['course_img']['name'];
        $course_img_tmp = $_FILES['course_img']['tmp_name'];
        $course_img_folder = '../images/courseImg/'.$course_img;
        move_uploaded_file($course_img_tmp, '../images/courseImg/'.$course_img);
        

        $sql = "INSERT INTO course (course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price) VALUES ('$course_name', '$course_desc', '$course_author', '$course_img_folder', '$course_duration', '$course_price', '$course_original_price')";

        if (mysqli_query($conn, $sql) == true) {
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Data inserted successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Data not inserted...</div>';
        }
    }
}

?>

<div class="col-md-6 mt-5 ml-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Descrition</label>
            <textarea class="form-control" id="course_desc" name="course_desc" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
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