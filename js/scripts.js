$(document).ready(function () {


    $(function () {
        var page = $('body > div').data("page");

        $('body').addClass(page);

    });

    /*animation barre de nav*/
    $("#imageSpectacle").mouseenter(function () {
        $("#navigationSpectacle", this).css("display", "block");

        //        $(".titreprojet", this).animate({
        //            fontSize: "2em"
        //        });
    });
    $("#imageSpectacle").mouseleave(function () {
        $("#navigationSpectacle", this).css("display", "none");

    });
    /*animation pour zoom image, à faire mieux*/
    $("#gallery").mouseenter(function () {
        $("#gallery img", this).animate({
            height: '600px'
        });
    });
    $("#gallery").mouseleave(function () {
        $("#gallery img", this).animate({
            fontSize: "1em"
        });

    });
});
