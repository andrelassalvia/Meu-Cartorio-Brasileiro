$(function () {
    var loading = $(".spinner-border");
    $(document).ajaxStop(function () {
        loading.hide();
    });
});
