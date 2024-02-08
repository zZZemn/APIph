$(document).ready(function () {
    $("#btnCloseDescription").click(function (e) {
        e.preventDefault();
        $(".welcome-description-container").css(
            "transform",
            "translateY(-200%)"
        );

        $(".endpoints-main-container").css("opacity", "0");

        setInterval(() => {
            $(".welcome-description-container").hide();
            $(".endpoints-main-container").css("opacity", "1");
        }, 400);
    });
});
