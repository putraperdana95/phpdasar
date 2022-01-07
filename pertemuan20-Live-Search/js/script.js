$(document).ready(function () {
  // hilangkan id tombol cari
  $("#tombol-cari").hide();

  // membuat even ketika keyword diketikkan
  $("#keyword").on("keyup", function () {
    // munculkan icon loading
    $("loader").show();

    // $.get()
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });

    // ajax menggunakan load
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
  });
});
