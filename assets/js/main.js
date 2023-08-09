$(function () {
    $(".test__form-phone").mask("+7 (999) 999-9999");

    $(".test__form-btn").click(function (e) {
        e.preventDefault();

        let formJson = $(".test__form").serialize();
        let params = new URLSearchParams(formJson);

        let hameUrl = location.protocol + "//" + location.hostname;
        let url = hameUrl + "/wp-content/themes/test/inc/ajax.php";

        let data = {
            method: "POST",
            body: params,
        };

        fetch(url, data)
            .then((res) => res.json())
            .then((data) => {
                console.log(data);
                result("username", data.username.text, data.username.state);
                result("message", data.message.text, data.message.state);
                result("phone", data.phone.text, data.phone.state);
            });

        function result(dataName, text, code) {
            if (code == 1) {
                $(".test__form-" + dataName).removeClass("error");
                $(".result__" + dataName + " .result__block-text").text(text);
            } else if (code == 0) {
                $(".test__form-" + dataName).addClass("error");
                $(".result__" + dataName + " .result__block-text").text(text);
            }
        }
    });
});
