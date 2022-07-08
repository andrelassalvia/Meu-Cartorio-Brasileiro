// when tiggered delete button show modal with the correct occupation name

$(function () {
    $("#listBody").on("click", "tr", "#deleteButton", function () {
        const urlsShowOccupation = [
            "http://192.168.1.85:8000/occupations/",
            "http://localhost:8000/occupations/",
        ];

        var id = $(this).data("id");
        $.each(urlsShowOccupation, function (i, u) {
            $.ajax(u + id, {
                type: "GET",
                success: function (response) {
                    $("#message").html(response);
                },
            });
        });
    });
});
