$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 600) {
            $(".navbar").addClass("scrolled");
        } else {
            $(".navbar").removeClass("scrolled");
        }
    });
});