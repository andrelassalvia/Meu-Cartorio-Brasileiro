// Script to show create form
$(function () {
    $(window).on("load", function () {
        const url = $(".main--create").data("create");

        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                $("#create-body").html(response);
            },
            error: function (errors) {
                console.log(errors);
            },
        });
    });
});
