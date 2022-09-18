
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style>
      body {
  padding-top: 5rem;
}
.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}
    </style>
  </head>

  <body>
<!-- untuk menambahkan navbar -->
  <?= $this->include('navbar'); ?>
  <!-- =============== -->
    <main role="main" class="container">
      <!-- render section untuk menangkap view dari controller secara parsial-->

      <?= $this->renderSection('content'); ?>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="href='<?= base_url('js/bootstrap.min.js'); ?>'"></script>
    <script src="href='<?= base_url('jquery-3.6.1.min.js'); ?>'"></script>
  </body>
</html>
