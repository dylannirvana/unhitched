<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Are you unhitched?</title>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Raleway' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

  </head>
  <body id="home">
    <section class="container">
        <?php include '_/components/php/header.php';  ?>
        <?php include '_/components/php/carousel.php';  ?>
        <div class="content row">
            <section class="main col col-lg-8">
            <?php include '_/components/php/article-intro.php';  ?>
            <?php include '_/components/php/article-authors.php';  ?>
            </section> <!-- main 8 col -->
            <section class="sidebar col col-lg-4">
            <?php include '_/components/php/aside-intro.php'; ?>
            </section> <!-- sidebar -->
           <?php include '_/components/php/footer.php';  ?>
        </div> <!-- content -->
    </section> <!-- container -->
    
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscripts.js"></script>
  </body>
</html>