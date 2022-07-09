// Script to show create form
$(function () {
    $(window).on("load", function () {
        const urlsOccupationCreate = [
            "http://localhost:8000/occupations/create",
            "http://192.168.1.85:8000/occupations/create",
        ];
        $.each(urlsOccupationCreate, function (i, u) {
            $.ajax(u, {
                type: "GET",
                success: function (response) {
                    $("#occupationBody").html(response);
                },
                error: function (errors) {
                    console.log(errors);
                },
            });
        });
    });
});
