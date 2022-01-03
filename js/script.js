document.addEventListener('DOMContentLoaded', function() {

    // $('.carrousel').slick({
    //     arrows: true
    // });

    $("#jour1").on("click", function () {
        $("#jour1").addClass("jourChoisi");
        $("#jour2").removeClass("jourChoisi");
        $("#jour3").removeClass("jourChoisi");

    });

    $("#jour2").on("click", function () {
        $("#jour1").removeClass("jourChoisi");
        $("#jour2").addClass("jourChoisi");
        $("#jour3").removeClass("jourChoisi");

    });

    $("#jour3").on("click", function () {
        $("#jour1").removeClass("jourChoisi");
        $("#jour2").removeClass("jourChoisi");
        $("#jour3").addClass("jourChoisi");

    });

});



