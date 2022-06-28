// Script to load list of cities form Brazil and out of Brazil
$(function () {
    const urlsLoadBrazilCities = [
        "http://192.168.1.85:8000/brazilCities/",
        "http://localhost:8000/brazilCities/",
    ];

    const urlsLoadCities = [
        "http://192.168.1.85:8000/cities/",
        "http://localhost:8000/cities/",
    ];

    const loadCities = function (id, url, cityId) {
        //
        let stateId = "";
        $(id).on("change", function () {
            stateId = $(this).val();
            $.each(url, function (i, u) {
                $.ajax(u + stateId, {
                    success: function (response) {
                        $(cityId).html(response);
                    },
                });
            });
        });
    };
    loadCities("#brazil-state", urlsLoadBrazilCities, "#brazil-city");
    loadCities("#country", urlsLoadCities, "#city");
});
