// DELETE ITEM WHEN OK BUTTON IS CLICKED

$(function () {
    $("#okButton").on("click", function () {
        console.log("okButton");
        const urlsDeleteOccupation = [
            "http://192.168.1.85:8000/occupations/",
            "http://localhost:8000/occupations/",
        ];
        var id = $("#message p").data("id");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.each(urlsDeleteOccupation, function (i, u) {
            $.ajax({
                type: "DELETE",
                url: u + id,
                success: function (data) {
                    window.location.href =
                        "http://localhost:8000/occupations-main/";
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
                },
            });
        });
    });
});
