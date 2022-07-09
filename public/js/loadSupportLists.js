$(function () {
    $(window).on("load", function () {
        const urls = $(".main--list").data("route");

        $.ajax({
            url: urls,
            type: "GET",
            success: function (response) {
                console.log(response);
                $("#listBody").html(response);
            },
            error: function (errors) {
                console.log(errors);
            },
        });
    });
});
