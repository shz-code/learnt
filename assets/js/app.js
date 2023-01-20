// Mobile HamBtn Navbar
$(".hambtn").click(()=>{
    if($(".nav_links").hasClass("nav_toggle"))
    {
        $(".nav_links").removeClass("nav_toggle");
    }
    else $(".nav_links").addClass("nav_toggle");
});


