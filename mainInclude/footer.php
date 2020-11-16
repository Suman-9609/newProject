<!--///////////////////  Footer end ////////////////////-->
<footer class="bottom_footer">
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-md-10 col-11 text-white pt-2 mx-auto">
                <p align="center">Copyright@2020 iscool. All Right Reserved || <a href="" data-toggle="modal" data-target="#adminLogModalCenter">Admin Login</a></p>
            </div>
        </div>
    </div>
</footer>
<!--///////////////////  Footer end ////////////////////-->


<!-- Start Registration modal -->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="stuRegForm">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="student" class="pl-2 font-weight-bold">Name</label> <small id="statusMsg1"></small>
                        <input type="text" class="form-control" placeholder="Enter Name" name="stuname" id="stuname">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="student" class="pl-2 font-weight-bold">Email</label> <small id="statusMsg2"></small>
                        <input type="email" class="form-control" placeholder="Enter Email" name="stuemail" id="stuemail">
                        <small class="form-text"> We'll never share your email with anyone else </small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="student" class="pl-2 font-weight-bold">New Password</label> <small id="statusMsg3"></small>
                        <input type="password" class="form-control" placeholder="Enter Password" name="stupass" id="stupass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--///////////////////  End Registration Section ////////////////////-->

<!-- Start Login modal -->

<!-- Modal -->
<div class="modal fade" id="stuLogModalCenter" tabindex="-1" aria-labelledby="stuLogModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLogModalCenterLabel">Student Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="stuLogForm">

                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="student" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="stuLogemail" id="stuLogemail">

                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="student" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="stuLogpass" id="stuLogpass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLogBtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--///////////////////  End Login Section ////////////////////-->


<!-- Start Admin modal -->

<!-- Modal -->
<div class="modal fade" id="adminLogModalCenter" tabindex="-1" aria-labelledby="adminLogModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLogModalCenterLabel">Admin Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="adminLogForm">

                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="student" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="adminLogemail" id="adminLogemail">

                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="student" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="adminLogpass" id="adminLogpass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small id="statusAdminLogMsg"></small>
                <button type="button" class="btn btn-primary" id="adminLogBtn" onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--///////////////////  End Admin Section ////////////////////-->


<!-- Custome Javascript -->
<script src="js/app.js"></script>
<!-- Jquery and Bootstrap Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Font Awsome JS -->
<script src="js/all.min.js"></script>

<!-- Ajax Call Javascript -->
<script src="js/ajaxRequest.js"></script>

<!-- Admin Ajax Call Javascript -->
<script src="js/adminAjaxRequest.js"></script>

</body>

</html>