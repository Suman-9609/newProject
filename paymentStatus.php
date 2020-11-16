<!-- Start including header  -->
<?php
include("./mainInclude/header.php");
?>
<!-- End including header  -->

<!-- Start Course page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/banner/web-1935737_1920.png" style="height: 450px; width: 100%; box-shadow:10px;" alt="">
    </div>
</div>
<!-- End Course page banner -->


<!-- Start Main Content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order Id</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-success mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!-- End Main Content -->


<!-- Start Contact Form Section -->
<div class="container">
    <?php
    include("./contact.php");
    ?>
</div>
<!-- End Contact Form Section -->


<!-- Start including Footer  -->
<?php
include("./mainInclude/footer.php");
?>
<!-- End including Footer  -->