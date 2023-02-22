var reg = /^[A-Z0-9._%+-]+@([A-Z0-0-]+\.)+[A-Z]{2,4}$/i;
var btn = $("#user_submit_btn");

// Alert Box Handler
const alert = (type,msg)=>{
    $(".notification").html(`<div class="alert alert-${type}" role="alert">
    ${msg}
</div>`);
}

// Email Satus Handler
const emailStatus = (type,msg)=>{
    $("#email_status").html(`<span class="text-${type}">
    ${msg}
</span>`);
}

// Disable submit button based on email
$("#email").on("input",()=>{
    var email = $("#email").val();
    if(email === "")
    {
        btn.attr("disabled",true);
        emailStatus(" "," ");
    }
    else if(!reg.test(email))
    {
        emailStatus("danger","Wrong Email Format.");
        btn.attr("disabled",true);
    }
    else{
        btn.attr("disabled",false);
        emailStatus(" "," ");
    }
});
// Show password function
$(".show_password").click((e) => {
    var passType = $("#pass").attr("type");
    if(passType === "text")
    {
        $("#pass").attr("type","password");
        $("#con_pass").attr("type","password");
    }
    else 
    {
        $("#pass").attr("type","text");
        $("#con_pass").attr("type","text");
    }
});

// Login form handler
$(".login_form").submit((e)=>{
    e.preventDefault();

    alert(" ", " ");
    $("#user_submit_btn").html(`<img src="./assets/images/pre_loader_w.svg" alt="Spinner" class="img-fluid" style="height: 22px;">`);
    btn.attr("disabled",true);

    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url: "./services/_login.php",
        method: "POST",
        type: "json",
        data: {
            loginUser: "loginUser",
            email: email,
            pass: pass,
        },
        success:(data)=>{
            window.location.replace("./index.php");
        },
        error:(data)=>{
            if(data.statusText === "User Not Found")
                alert("danger", "No User Found Using This Email & Password.");
            else if(data.statusText === "Forbidden")
                alert("danger", "Check Your Email For Verification Mail.");
            else alert("danger", "Error! Try Again Later.");
            $("#user_submit_btn").html(`Login`);
            btn.attr("disabled",false);
        }
    })
});