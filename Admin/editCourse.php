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

//Update
if (isset($_REQUEST['updateBtn'])) {
    if (($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_original_price'] == "") || ($_REQUEST['course_price'] == "")) {

        $alertMsg = '<div class="col-sm-6 alert-warning mt-3 p-1 ml-3">Please fill All Fields...</div>';
    } else {
        $cid = $_REQUEST['course_id'];
        $cname = $_REQUEST['course_name'];
        $cdesc = $_REQUEST['course_desc'];
        $cauthor = $_REQUEST['course_author'];
        $cduration = $_REQUEST['course_duration'];
        $coriginalprice = $_REQUEST['course_original_price'];
        $cprice = $_REQUEST['course_price'];
        $course_img = $_FILES['course_img']['name'];
        $course_img_tmp = $_FILES['course_img']['tmp_name'];
        $cimg = '../images/courseImg/' . $course_img;
        move_uploaded_file($course_img_tmp, $cimg);

        $sql = "UPDATE course SET course_id = '$cid', course_name='$cname', course_desc='$cdesc', course_author='$cauthor', course_duration='$cduration', course_original_price='$coriginalprice', course_price='$cprice', course_img='$cimg' WHERE course_id='$cid'";

        if(mysqli_query($conn, $sql) == true){
            $alertMsg = '<div class="col-sm-6 alert-success mt-3 p-1 ml-5">Data inserted successfully.</div>';
        } else {
            $alertMsg = '<div class="col-sm-6 alert-danger mt-3 p-1 ml-5">Data not inserted...</div>';
        }
        }
    }

?>

<div class="col-md-6 mt-5 ml-3 jumbotron">
    <h3 class="text-center">Update Course</h3>

    <?php
    if (isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course Name</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if (isset($row['course_id']))  echo $row['course_id'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if (isset($row['course_name']))  echo $row['course_name'] ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Descrition</label>
            <textarea class="form-control" id="course_desc" name="course_desc" rows="2"><?php if (isset($row['course_desc']))  echo $row['course_desc'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php if (isset($row['course_author']))  echo $row['course_author'] ?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if (isset($row['course_duration']))  echo $row['course_duration'] ?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if (isset($row['course_original_price']))  echo $row['course_original_price'] ?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if (isset($row['course_price']))  echo $row['course_price'] ?>">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php if (isset($row['course_img']))  echo $row['course_img']  ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button class="btn btn-warning" id="updateBtn" name="updateBtn">Update</button>
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