<!-- Start including header  -->
<?php
include("./mainInclude/header.php");
?>
<!-- End including header  -->


<!--Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid__parent">
        <video playsinline autoplay muted loop>
            <source src="video/Islands - 2119.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>

    <div class="vid-content">
        <h1 class="my-content">Welcome to iscool</h1>
        <small class="my-content">Learn and implement</small><br>
        <?php 
        if(!isset($_SESSION['is_login'])){
            echo '<a href="/" class="btn btn-warning" data-toggle="modal" data-target="#stuRegModalCenter"> Get Started </a>';
        }else{
            echo '<a href="#" class="btn btn-success">My Profile</a>';
        }
        
        ?>
        
    </div>
</div>
<!--End Video Background -->


<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom__banner">
        <div class="col-sm">
            <h5><i class="fas fa-open mr-3"></i> 100% Online Course </h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors </h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access </h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Garantee </h5>
        </div>
    </div>
</div>
<!-- End Text Banner -->


<!-- Start Most Popular Course Section -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>

    <div class="card-deck">
        <!-- Start First Card -->
        <div class="card">
            <img src="./images/html.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Learn HTML Easy Way</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <p class="card-text d-inline">
                        Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span>
                        <a class="btn btn-primary float-right" href="courseDetails.php">Enroll</a>
                    </p>
                </small>
            </div>
        </div>
        <!-- End First Card -->

       <!-- Start second Card -->
       <div class="card">
            <img src="./images/css.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Learn CSS Easy Way</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <p class="card-text d-inline">
                        Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span>
                        <a class="btn btn-primary float-right" href="courseDetails.php">Enroll</a>
                    </p>
                </small>
            </div>
        </div>
        <!-- End second Card -->

        <!-- Start third Card -->
        <div class="card">
            <img src="./images/html.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Learn HTML Easy Way</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <p class="card-text d-inline">
                        Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span>
                        <a class="btn btn-primary float-right" href="courseDetails.php">Enroll</a>
                    </p>
                </small>
            </div>
        </div>
        <!-- End third Card -->

    </div>

</div>
<!-- End Most Popular Course Section -->


<!-- Start Contact Form Section -->
<?php
include("./contact.php");
?>
<!-- End Contact Form Section -->


<!-- Start feedback Section -->
<div class="cotainer-fluid mt-5" style="background-color: #487289;" id="Feedback">
    <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
</div>
<!-- End feedback Section -->


<!-- Start Social Follow -->
<div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a href="#" class="text-white social-hover"> <i class="fab fa-facebook-f"></i> Facebook </a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"> <i class="fab fa-twitter"></i> Twitter </a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"> <i class="fab fa-whatsapp"></i> Whatsapp </a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"> <i class="fab fa-instagram"></i> Instagram </a>
        </div>
    </div>
</div>
<!-- End Social Follow -->




<!-- Start About Section -->
<div class="container-fluid p-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <h6>Welcome To <span style="color: #152B98">ISCOOL</span></h6>
                <p>“ISCOOL- unit of “Dooars School for Computer Oriented Omnibus Literacy” Society is a self-explanatory educational organization which takes the obligation to spread computer oriented education among the learners.Every year a number of students get placement from our institute in many private or Government Association. Many of Govt. Officials appreciated the quality of our students after getting their employees from our institute. Our actual cue will be fulfilled when we will be able to provide placement to all of our students and expand the quality educational power over the Dooars and also up to whole India”.</p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a href="#" class="text-dark">Web Development</a><br />
                <a href="#" class="text-dark">Web Designing</a><br />
                <a href="#" class="text-dark">Android App Dev</a><br />
                <a href="#" class="text-dark">iOS Developement</a><br />
                <a href="#" class="text-dark">Data Analysis</a><br />
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <div class="footer_links ml-0">
                    <ul>
                        <li>+(91) 97353-32484 / 03564-257241</li>
                        <li>contact@iscool.org</li>
                        <li>iscool, Near Indian Overseas Bank, College Halt, Alipurduar, 736122, West Bengal, India</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End About Section -->

<!-- Start including Footer  -->
<?php
include("./mainInclude/footer.php");
?>
<!-- end including Footer  -->