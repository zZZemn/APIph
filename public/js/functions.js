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

const copyToClipboard = (text) => {
    const tempTextArea = document.createElement("textarea");
    tempTextArea.value = text;
    document.body.appendChild(tempTextArea);

    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999);

    document.execCommand("copy");

    document.body.removeChild(tempTextArea);

    alert("Copied to clipboard: " + text);
};

const pasteFromClipboard = (targetId) => {
    navigator.clipboard
        .readText()
        .then(function (text) {
            $("#" + targetId).val(text);
        })
        .catch(function (err) {
            console.error("Failed to read clipboard contents: ", err);
        });
};

const functionCall = () => {
    onLoadAnimation();
};
// End of functions