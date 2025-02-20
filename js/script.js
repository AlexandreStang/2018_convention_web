document.addEventListener('DOMContentLoaded', function() {

    document.getElementById("show-menu").addEventListener("click", function () {
        document.getElementById("nav-mobile").style.display = "block";
        document.body.classList.add('lock-scroll');
    });

    document.getElementById("show-menu-2").addEventListener("click", function () {
        document.getElementById("nav-mobile").style.display = "none";
        document.body.classList.remove('lock-scroll');
    });

});