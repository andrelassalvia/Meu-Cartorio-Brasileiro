$(function () {
    $(window).on("load", function () {
        const urlsOccupations = [
            "http://192.168.1.85:8000/occupations/",
            "http://localhost:8000/occupations/",
        ];
        $.each(urlsOccupations, function (i, u) {
            $.ajax(u, {
                success: function (response) {
                    $("#listBody").html(response);
                },
            });
        });
    });
});
