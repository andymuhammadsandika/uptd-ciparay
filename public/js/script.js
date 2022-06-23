// event pada saat link di klik
$(".page-scroll").on("click", function (event) {
  // ambil isi href
  var tujuan = $(this).attr("href");
  // tangkap elemen yang bersangkutan
  var elemenTujuan = $(tujuan);

  // pindahkan scroll
  $("html,body").animate(
    {
      scrollTop: elemenTujuan.offset().top - 50,
    },
    1000,
    "easeInOutExpo"
  );

  event.preventDefault();
});

// parallax
// about
$(window).on("load", function () {
  $(".pKiri").addClass("pMuncul");
  $(".pKanan").addClass("pMuncul");
});

$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  // jumbotron
  $(".jumbotron img").css({
    transform: "translate(0px, " + wScroll / 4 + "%)",
  });

  $(".jumbotron h1").css({
    transform: "translate(0px, " + wScroll / 2 + "%)",
  });

  $(".jumbotron p").css({
    transform: "translate(0px, " + wScroll / 1.2 + "%)",
  });

  // portfolio - landing elemen
  if (wScroll > $(".galeri").offset().top - 250) {
    $(".galeri .img-thumbnail").each(function (i) {
      setTimeout(function () {
        $(".galeri .img-thumbnail").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });
  }
});
