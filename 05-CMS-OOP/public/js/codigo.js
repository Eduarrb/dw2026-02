const btnMenu = document.querySelector(".nav__contenedor__actions--menuBox");

const menu = document.querySelector(".nav__contenedor__menu");

btnMenu.addEventListener("click", function(){
    // console.log("hiciste click");
    // menu.classList.add("active");
    menu.classList.toggle("active");
})