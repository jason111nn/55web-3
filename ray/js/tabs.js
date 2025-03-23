
$(window).on("hashchange", function (e) {
    e.preventDefault();
    hash = location.hash.slice(1) == "content" ? "content" : "data";
    console.log(hash);

    $("main").removeClass("active");
    $("main#" + hash).addClass("active");
});

$(window).trigger("hashchange");
