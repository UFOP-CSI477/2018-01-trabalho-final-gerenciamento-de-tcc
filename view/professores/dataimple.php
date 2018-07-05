
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->

  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>TCC</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="./public/css/linearicons.css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/nice-select.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.css">
    <link rel="stylesheet" href="./public/css/main.css">
  </head>
  <body>

    <header id="header" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
          <img src="public/img/tcc.png" alt="" title="" />
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="http://localhost:8000/router.php?op=7">Voltar</a></li>
              <li class="menu-active"><a href="http://localhost:8000/">logout</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->



      <!-- start banner Area -->
      <section class="align-items-center">
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">

              <h3>
                <br>Inserir data de apresentação
                <br>da implementação
              </h3><br><br>

              <!-- GRID //-->
    <div class="row">


    <div class="col-md-12">
        <form name="dados" method="post" action="router.php?op=12">

        <center>  <div class="form-group">
              <select name="id">
                <option value="">Selecione TCC:</option>
                <!-- Estados //-->
                <?php foreach( $lista as $e ): ?>
                  <option value="<?= $e['id'] ?>"><?= $e['nomeprojeto'] ?></option>
                <?php endforeach ?>
              </select>
        </div></center>


        <div class="form-group">
          <label for="data">Data de Entrega da Implementação:</label>
          <input type="text" name="data">
      </div>

    <input class="btn-primary" type="submit" value="Definir Data"><br><br>
    <input class="btn-danger" type="reset" value="Limpar">

  </form>
</div>
</div>



            </div>
          </div>
        </div>
      </section>
      <!-- End banner Area -->

    <script src="./public/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./public/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="./public/js/easing.min.js"></script>
    <script src="./public/js/hoverIntent.js"></script>
    <script src="./public/js/superfish.min.js"></script>
    <script src="./public/js/jquery.ajaxchimp.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.sticky.js"></script>
    <script src="./public/js/jquery.nice-select.min.js"></script>
    <script src="./public/js/parallax.min.js"></script>
    <script src="./public/js/mail-script.js"></script>
    <script src="./public/js/main.js"></script>
  </body>
</html>
