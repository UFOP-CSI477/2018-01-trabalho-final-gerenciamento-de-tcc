
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

                <div class="bg-1">
                      <div class="alert alert-success">
                      <strong>Atenção!</strong> Dados Exibidos com sucesso.
                    </div>

              <h3>
                <br>TCC's
              </h3>

              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover table-condensed table-responsive-lg">
                    <tr>
                      <th>Nome do Projeto</th>
                      <th>Ano</th>
                      <th>Semestre</th>
                      <th>Nome do Aluno</th>
                      <th>Dados pesquisa</th>
                      <th>Data para apresentação da Pesquisa</th>
                      <th>Diretorio da Implementação</th>
                      <th>Data para entrega da Implementação</th>
                      <th>Status do TCC(Selecione para Alterar)</th>
                    </tr>

                    <?php
                    use Model\professor;
                    use Model\alunos;
                    $alunos = new alunos;
                    $professor = new professor;
                    ?>


                  <?php foreach( $lista as $linha ): ?>

                      <tr>
                        <td> <?= $linha['nomeprojeto'] ?> </td>
                        <td><?= $linha['ano'] ?> </td>
                        <td><?= $linha['semestre'] ?></td>

                        <?php
                        $lista2 = $alunos->all();
                        ?>

                        <?php foreach( $lista2 as $linha2 ): ?>
                        <?php if ($linha2['id'] == $linha['id_aluno']): ?>
                              <td><?= $linha2['nome'] ?></td>
                          <?php endif; ?>
                        <?php endforeach ?>
                        <td> <a href="http://localhost:8000/router.php?op=21&id=<?= $linha['id'] ?>">Listar Pesquisa</td>
                        <td><?= $linha['data_pesquisa'] ?></td>
                        <td> <a href="<?= $linha['p_imple'] ?>"target="_blank"><?= $linha['p_imple'] ?></a>  </td>
                        <td><?= $linha['data_imple'] ?></td>
                        <?php if ($linha['status'] == 1): ?>
                            <td> <a href="http://localhost:8000/router.php?op=22&id=<?= $linha['id'] ?>">Ativo</a> </td>
                        <?php endif; ?>
                        <?php if ($linha['status'] == 2): ?>
                          <td> <a href="http://localhost:8000/router.php?op=22&id=<?= $linha['id'] ?>">Em pausa</a> </td>
                        <?php endif; ?>
                        <?php if ($linha['status'] == 3): ?>
                          <td> <a href="http://localhost:8000/router.php?op=22&id=<?= $linha['id'] ?>">Cancelado</a> </td>
                        <?php endif; ?>
                    </tr>

                      <?php endforeach ?>

                  </table>
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
