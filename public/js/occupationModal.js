// {{-- Script to show a modal when delete or edit button are triggered --}}

$(function () {
    const urlsShowOccupation = [
        "http://192.168.1.85:8000/occupations/",
        "http://localhost:8000/occupations/",
    ];
    const urlsEditOccupation = [
        "http://192.168.1.85:8000/occupations/",
        "http://localhost:8000/occupations/",
    ];

    const showModal = function (button, url, edit) {
        $("#listBody").on("click", button, function () {
            var id = $(this).data("id");
            $.each(url, function (i, u) {
                $.ajax(u + id + edit, {
                    type: "GET",
                    success: function (response) {
                        $("#message").html(response);
                    },
                });
            });
        });
    };

    showModal("#deleteButton", urlsShowOccupation, "");
    showModal("#editButton", urlsEditOccupation, "/edit");
});
