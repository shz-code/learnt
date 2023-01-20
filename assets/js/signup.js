var reg = /^[A-Z0-9._%+-]+@([A-Z0-0-]+\.)+[A-Z]{2,4}$/i;
var btn = $("#user_submit_btn");

const alert = (type,msg)=>{
    $(".notification").html(`<div class="alert alert-${type}" role="alert">
    ${msg}
</div>`);
}

$("#email").on("input",()=>{
    var email = $("#email").val();
    if(!reg.test(email))
    {
        alert("danger","Wrong Email Format");
        btn.attr("disabled",true);
    }
    else{
        btn.attr("disabled",false);
        alert("success","Right Email Format");
    }
})

$(".signup_form").submit((e)=>{
    e.preventDefault();

    var username = $("#username").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    var conPass = $("#con_pass").val();

    $.ajax({
        url: "./services/_userSignup.php",
        method: "POST",
        type: "json",
        data: {
            newUser: "newUser",
            username: username,
            email: email,
            pass: pass,
        },
        success:(data)=>{
            alert("success", "Registered Successfully");
        },
        error:(data)=>{
            alert("danger", "Error! Try Again Later.");
        }
    })
});