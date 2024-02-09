$(document).ready(function () {
    const onLoadAnimation = () => {
        setInterval(() => {
            $(".welcome-description-container").css(
                "transform",
                "translateY(0)"
            );
        }, 100);

        setInterval(() => {
            $(".welcome-description-container, .abouts-container").css(
                "opacity",
                "1"
            );
        }, 400);

        setInterval(() => {
            $(".endpoints-main-container").css("transform", "translateY(0)");
        }, 400);
    };

    $("#btnCloseDescription").click(function (e) {
        e.preventDefault();
        $(".welcome-description-container").hide();
    });

    onLoadAnimation();
});
