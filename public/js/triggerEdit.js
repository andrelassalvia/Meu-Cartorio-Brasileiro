// Script to edit an occupation when ok button is triggered
$(function () {
    $("#editModalBlade form").on("change", function () {
        const formData = $("#editModalBlade form").serialize();
        $("#okButton").on("click", function () {
            const id = $("#okButton").data("id");

            $.ajax($("#editModalBlade form").attr("action") + id, {
                method: $("#editModalBlade form").attr("method"),
                accepts: "application/json",
                type: "PATCH",
                data: formData,
                success: function (data) {
                    window.location.href =
                        "http://localhost:8000/occupations-main/";
                },
                error: function (errors) {
                    console.log(errors);
                },
            });
        });
    });
});
