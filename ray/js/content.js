
$("[type=file]").on("change", function () {
    $id = this.id;
    const fr = new FileReader();
    fr.readAsDataURL(this.files[0]);
    fr.onload = () => { localStorage.setItem($id, fr.result); }
});

$("[type=text]").on("input", function () {
    localStorage.setItem(this.id, this.value);
});

$("[type=text]").each(function () {
    this.value = localStorage.getItem(this.id);
});
