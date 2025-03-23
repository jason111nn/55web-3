
var ans = "123456789".split("").sort((a, b) => Math.floor(Math.random() - 0.5)).splice(0, 4);

$("#drag span").each(function (idx) {
    $(this).text(ans[idx]);
});

ans = ans.sort((a, b) => a - b);

$("#veri").on("input", function () {
    this.setCustomValidity(
        this.value == ans.join("") ? "" : "請將驗證碼由小到大排序"
    )
});

$("#drag span").draggable({ revert: true, containment: "main" });
$("#veri").droppable({ drop: function (e, ui) {
    $elem = $(ui.draggable);
    this.value += $elem.text();
    $elem.remove();
    $("#veri").trigger("input");
} });

$("#veri").trigger("input");
