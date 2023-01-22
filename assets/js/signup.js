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
// Confirmation message
const confirmation_message = (email)=>{
    return `We've just sent a verification link to <strong>${email}</strong>Please check your inbox and click on the link to get started. If you can't find this email check spam folder. After verification <a href="./login.php" class="text-secondary fw-bold fs-5">Login Here <i class='bx bx-party fs-5 text-primary'></i></a>`
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

// Signup form handler
$(".signup_form").submit((e)=>{
    e.preventDefault();
    alert(" ", " ");
    $("#user_submit_btn").html(`<img src="./assets/images/pre_loader_w.svg" alt="Spinner" class="img-fluid" style="height: 22px;">`);
    btn.attr("disabled",true);

    var username = $("#username").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    var conPass = $("#con_pass").val();

    if(pass != conPass)
    {
        alert("danger","Passwords Do Not Match!");
        $("#user_submit_btn").html(`Submit`);
        btn.attr("disabled",false);
    }
    else{
        $.ajax({
            url: "./services/_signup.php",
            method: "POST",
            type: "json",
            data: {
                newUser: "newUser",
                username: username,
                email: email,
                pass: pass,
            },
            success:(data)=>{
                console.log(data);
                alert("success", "Registered Successfully");
                $(".signup_form").html(confirmation_message(email));
            },
            error:(data)=>{
                if(data.statusText === "Email Exists")
                    alert("danger", "Email Already Exists.");
                else if(data.statusText === "Username Exists") alert("danger", "Username Already Exists.");
                else alert("danger", "Error! Try Again Later.");
                $("#user_submit_btn").html(`Submit`);
                btn.attr("disabled",false);
            }
        })
    }
});