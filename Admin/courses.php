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
?>


<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Courses</p>
    <?php $sql = "SELECT * FROM course";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['course_id']; ?></th>
                        <td><?php echo $row['course_name']; ?></td>
                        <td><?php echo $row['course_author']; ?></td>
                        <td>
                            <form action="editCourse.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
                                <button type="submit" class="btn btn-info" name="view" value="View">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </form>
                            <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
                                <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
</div>
<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
    if (mysqli_query($conn, $sql) == true) {
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    } else {
        echo "Unable to Deleted Data";
    }
}
?>
<div>
    <a href="addCourse.php" class="btn btn-danger box"> <i class="fas fa-plus fa-2x"></i> </a>
</div>
<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>