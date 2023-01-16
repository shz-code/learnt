const hamBtn = document.querySelector(".hambtn");

hamBtn.addEventListener("click", ()=> {
    const navTog = document.querySelector(".nav_links");
    if(navTog.classList.contains("nav_toggle"))
    {
        navTog.classList.remove("nav_toggle");
    }
    else navTog.classList.add("nav_toggle");
});