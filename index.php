<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Are you Living Unhitched?</title>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Raleway' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100' rel='stylesheet' type='text/css'>
    
  </head>
  <body id="home">
        <?php include '_/components/php/header.php';  ?>
        <?php include '_/components/php/carousel.php';  ?>
    <section class="container">
        <div class="content row">
            <section class="main col-lg-8 col-md-7">
            <?php include '_/components/php/article-intro.php';  ?>
            <?php include '_/components/php/article-authors.php';  ?>
            <?php include '_/components/php/article-about.php';  ?>
            
            </section> <!-- main 8 col -->
            <section class="sidebar col-lg-4 col-md-5">
            <?php include '_/components/php/aside-intro.php'; ?>
            <?php include '_/components/php/aside-register.php'; ?>
                <!-- modal -->
                <section>
                    <?php include '_/components/php/aside-services.php'; ?>
                </section> <!-- modal -->
            <?php include '_/components/php/aside-events.php'; ?>
            </section> <!-- sidebar 4 -->
           <?php include '_/components/php/footer.php';  ?>
        </div> <!-- content -->
    </section> <!-- container -->
    
                <!-- modal -->
            <!-- <section id="modal" class="modal fade">
                <div class="modal-body">

                    <img id="modalimage" src="" alt="something" />
                </div>
            </section> <!-- modal --> 
    
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscripts.js"></script>
  </body>
</html>