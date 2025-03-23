
$(".results button").on("click", function () {
    id     = $(this).data("id");
    $data  = $(this).parent().find("p");
    inputs = $("dialog input");

    inputs[0].value = $data.eq(0).text();
    inputs[1].value = $data.eq(1).text();
    inputs[2].value = $data.eq(2).text();
    inputs[3].value = $data.eq(3).text();
    inputs[4].value = id;
    
    $("dialog button").eq(2).on("click", function () { $("dialog form")[1].submit(); });
    $("dialog button").eq(1).on("click", function () {
        if ( confirm(`確認刪除資料 ${id}？`) ) {
            location.href = `./api/delete.php?id=${id}`;
        }
    });
    $("dialog")[0].showModal();
});
