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

    $(".order-modal__input-phone input").mask("+7 (999) 999-99-99", { placeholder: "+7 (xxx) xxx-xx-xx" });

    if ($.cookie("order-modal") == null) {
        $.cookie("order-modal", "true", { expires: 7 });
    }

    $(window).on("scroll", function () {
        if (window.pageYOffset > 300 && $.cookie("order-modal") == "true") {
            $.fancybox.open({
                src: "#order-modal",
                type: "inline",
                afterClose: function () {
                    $.cookie("order-modal", "false", { expires: 7 });
                },
            });
        }
    });
});
