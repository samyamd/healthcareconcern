"use strict";
require('./bootstrap');

document.getElementById("main").style.display = "none";
window.addEventListener("load", function() {
    $(".loader").remove();
    document.getElementById("main").removeAttribute("style");

        $(".navbar-toggler").click(() => {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    });
    
    $("#sidebar-close").click(() => {
        closeNav();
    });
})

function closeNav() {
    document.getElementById("mySidenav").removeAttribute("style");
    document.body.removeAttribute("style");
}
