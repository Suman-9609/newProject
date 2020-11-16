// Ajax call for Admin Login 

function checkAdminLogin(){
    // console.log("click login");
    let adminLogemail = $("#adminLogemail").val();
    let adminLogpass = $("#adminLogpass").val();

    $.ajax({
        url: 'Admin/admin.php',
        method: 'POST',
        data: {
            adminLogemail : adminLogemail,
            adminLogpass : adminLogpass,
        },
        success:function(data){
            // console.log(data);
            if(data == 0){
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email Id & Password !</small>');
                clearLogForm();
            }
            else if(data == 1){
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading...</small>');
                setTimeout( () => {
                    window.location.href = "Admin/adminDashBoard.php";
                },1000)
            }
        },
    });
}

//  clear Login form