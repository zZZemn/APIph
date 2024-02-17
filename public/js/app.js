$(document).ready(function () {
    $("#btnCloseDescription").click(function (e) {
        e.preventDefault();
        $(".welcome-description-container").hide();
    });

    $(".btnCopyUrl").click(function (e) {
        e.preventDefault();
        copyToClipboard($(this).data("url"));
    });

    $("#btnCopyRespose").click(function (e) {
        e.preventDefault();
        copyToClipboard($("#txtResponse").val());
    });

    $("#btnClearRespose").click(function (e) {
        e.preventDefault();
        $("#txtResponse").val("");
        $("#testUrl").val("");
    });

    $("#btnPasteUrl").click(function (e) {
        e.preventDefault();
        pasteFromClipboard("testUrl");
    });

    $("#frmSendRequest").submit(function (e) {
        e.preventDefault();
        var requestMethod = $("#requestMethod").val();
        var url = $("#testUrl").val();
        $.ajax({
            type: requestMethod,
            url: url,
            dataType: "json",
            contentType: "application/json",
            data: {},
            success: function (response) {
                $("#txtResponse").val(JSON.stringify(response, null, 2));
            },
            error: function (xhr, status, error) {
                $("#txtResponse").val("Error: Not Found");
            },
        });
    });

    functionCall();
});
