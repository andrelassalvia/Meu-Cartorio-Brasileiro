// Script to reset all fields from a form
$(function () {
    $("#reset-button").on("click", function () {
        $("#form-search input").attr("value", "");
        $("#form-search option:selected").attr("selected", null);
    });
});
