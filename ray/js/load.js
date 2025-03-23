
$("[load]").each(function () {
    id = $(this).attr("load");
    val = localStorage.getItem(id)
    if (this.nodeName == "IMG") {
        $(this).attr("src", val);
    } else {
        $(this).text(val);
    }
});