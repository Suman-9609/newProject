
$(document).ready(function () {
    // Ajax call form aleady exists email varification
    $("#stuemail").on("keypress blur", function () {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        let stuemail = $("#stuemail").val();
        $.ajax({
            url: "RecordData/addStudent.php",
            method: "POST",
            data: {
                stuemail: stuemail,
            },
            success: function (data) {
               
                // console.log(data);
                if (data != 0) {
                    $("#statusMsg2").html('<small style="color:red;">This email is already exist.</small>');
                    $("#signup").attr("disabled", true);
                }
                else if (data == 0 && reg.test(stuemail)) {
                    $("#statusMsg2").html('<small style="color:green;"> Go on.</small>');
                    $("#signup").attr("disabled", false);
                   

                }
                else if (!reg.test(stuemail)){
                    $("#statusMsg2").html('<small style="color:red;">Please enter valid email id.</small>');
                    $("#signup").attr("disabled", false);
                }
                else {
                    $("#signup").attr("disabled", true);
                }
            }
        });
    });
});



function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    let stuname = $("#stuname").val();
    let stuemail = $("#stuemail").val();
    let stupass = $("#stupass").val();

    // console.log(stuname);
    // console.log(stuemail);
    // console.log(stupass);


    // Checking Form Validation 
    if (stuname.trim() == "") {
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name!</small>');
        $("#stuname").focus();
        return false;
    }
    else if (stuemail.trim() == "") {
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email!</small>');
        $("#stuemail").focus();
        return false;
    }
    else if (stuemail.trim() != "" && !reg.test(stuemail)) {
        $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g. example@gmail.com </small>');
    }
    else if (stupass.trim() == "") {
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password!</small>');
        $("#stupass").focus();
        return false;
    }
    else {

        $.ajax({
            url: 'RecordData/addStudent.php',
            method: 'POST',
            dataType: 'json',
            data: {
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass,
            },
            success: function (data) {
                // console.log(data);
                if (data == "OK") {
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successful</span>");
                    clearstuRegField();
                }
                else if (data == "Failed") {
                    $("#successMsg").html("<span class='alert alert-danger'>Registration Unsuccessful</span>");
                }
            }
        })
    }
}

// Clear Fields 
function clearstuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");
    $("#successMsg").fadeOut(5000);
}


// Ajax call for Student Login varification

function checkStuLogin(){
    // console.log("click login");
    let stuLogEmail = $("#stuLogemail").val();
    let stuLogpass = $("#stuLogpass").val();

    $.ajax({
        url: 'RecordData/addStudent.php',
        method: 'POST',
        data: {
            stuLogEmail : stuLogEmail,
            stuLogpass : stuLogpass,
        },
        success:function(data){
            // console.log(data);
            if(data == 0){
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email Id & Password !</small>');
                clearLogForm();
            }
            else if(data == 1){
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout( () => {
                    window.location.href = "index.php";
                },1000)
            }
        },
    });
}

//  clear Login form

function clearLogForm() {
    $("#stuLogForm").trigger("reset");
    $("#statusLogMsg").fadeOut(3000);
}