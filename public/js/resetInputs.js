// Script to reset all fields from a form
$(function () {
    $("#reset-button").on("click", function () {
        $("#form-search input").not("[type = hidden]").attr("value", "");
        $("#form-search option:selected").attr("selected", null);
        $("#form-search input:checked").attr("checked", null);
    });
});
