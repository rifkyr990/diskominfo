$.get(baseURL + "/anggaran-realisasi-cart", { 'tahun': $("#tahun-spbe").val() }, function (response) {
    spbe_realisasi_cart(response);
});

$("#tahun-spbe").change(function () {
    $("#loading-tahun").css('display', '');
    $("#tahun-spbe").css('display', 'none');
    $.get(baseURL + "/anggaran-realisasi-cart", { 'tahun': $(this).val() }, function (response) {
        $("#tahun-spbe").css('display', '');
        $("#loading-tahun").css('display', 'none');
        spbe_realisasi_cart(response);
    });
});