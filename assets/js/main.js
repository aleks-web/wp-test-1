$(function () {
    $(".card-has-child").click(function (e) {
        $(".card-has-child").each(function () {
            if (!$(this).hasClass("card-open")) {
                $(this).removeClass("card-open");
            }
        });

        if (!$(this).hasClass("card-open")) {
            $(this).addClass("card-open");
        } else {
            $(this).removeClass("card-open");
        }
    });
});
