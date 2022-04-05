// Sticky Navbar
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

let navMenu = document.querySelector("header .navigation-menu");
let navMenus = document.querySelector(".sticky .navigation-menu");
let menuToggle = document.querySelector(".fa-bars");

menuToggle.onclick = () => {
    menuToggle.classList.toggle("fa-times");
    navMenu.classList.toggle('active');
    navMenus.classList.toggle('active');
};
