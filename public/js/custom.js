(function ($) {

    "use strict";

    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".navbar").removeClass("py-3");
        } else {
            $(".navbar").addClass("py-3");
        }
    });

})(jQuery);

$('#calculatorForm').submit(function(e) {
    e.preventDefault();
    var wzrost = $("[name='wzrost']").val() / 100,
        waga = $("[name='waga']").val();

    var bmi = waga / (wzrost * wzrost) ;

    if(!Number.isNaN(bmi) && Number.isFinite(bmi) && bmi != 0 && bmi > 0) {
        $('#result').html(bmi.toFixed(1));
    }
});


$('#calculatorForm').on('reset', function(e) {
    $('#result').html('0.0');
});

$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});

$(window).scroll(function() {
    $("#carouselExampleCaptions").css("opacity", 1 - $(window).scrollTop() / 1000);
});