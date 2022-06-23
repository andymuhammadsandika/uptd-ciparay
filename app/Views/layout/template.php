<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/font/css/fontawesome.min.css">
    <link rel="stylesheet" href="/font/css/fontawesome.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <!-- navbar -->
    <?= $this->include('layout/navbar'); ?>
    <!-- akhir dari navbar -->

    <?= $this->renderSection('content'); ?>

    <!-- berita -->
    <?= $this->include('layout/berita'); ?>

    <!-- sikm -->
    <?= $this->include('layout/sikm'); ?>

    <!-- galeri -->
    <?= $this->include('layout/galeri'); ?>

    <!-- contact -->
    <?= $this->include('layout/contact'); ?>

    <!-- footer -->
    <?= $this->include('layout/footer'); ?>


    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/font/js/fontawesome.min.js"></script>

    <script src="/js/script.js"></script>

    <script>
      // const myCarouselElement = document.querySelectorAll('#myCarousel');
      // const carousel = new bootstrap.Carousel(myCarouselElement, {
      // interval: 2000,
      // wrap: false
      // });
    </script>
  </body>
</html>