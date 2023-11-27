<?php
session_start();
require_once 'model/consultes_sql.php';


if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Wonderful Travel</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

  <script>
    var destiData = <?php echo json_encode($_SESSION['destiData']); ?>;
  </script>

  <!-- Bootstrap core CSS -->
  <link href="estils/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="estils/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="container">
        <?php if (!isset($_SESSION['email'])) : ?>
          <button type="button" class="login-btn" onclick="window.location.href='./vista/registre.vista.php'">Registre</button>
          <button type="button" class="login-btn" onclick="window.location.href='./vista/login.vista.php'">Login</button><br><br>
        <?php else : ?>
          <button type="button" class="tancarS-btn" onclick="window.location.href='controlador/controlador.tancarSessio.php'" id="closeSession">Tancar sessió</button>
        <?php endif; ?>
      </div>
      <div class="py-5 text-center">
        <h2 class="theme-title">Wonderful Travel</h2>
      </div>
      <div class="clock">
        <div class="hour"></div>
        <div class="min"></div>
        <div class="sec"></div>
      </div>
      <div class="switch-cont">
        <button class="switch-btn">Light</button>
        <button id="themeButton" class="switch-btn">Tema pàgina</button>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 theme-label">Dades del viatge</h4>

        <!-- Formulari principal dades viatge. -->
        <form class="needs-validation" method="post" action="controlador/form-validation.php" novalidate>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="dataReserva" class="form-label theme-label">Data</label>
              <input type="date" class="form-control" id="dataReserva" name="dataReserva" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required onchange='validarData()'>
            </div>

            <div class="col-md-5">
              <label for="destiLabel" class="form-label theme-label">Desti</label>
              <select class="form-select" name="desti" id="desti" required onchange="canviDesti()">
                <option value="Selecciona desti">Selecciona desti</option>
                <option value="europa">Europa</option>
                <option value="asia">Asia</option>
                <option value="america">Amèrica</option>
                <option value="africa">Àfrica</option>
                <option value="oceania">Oceania</option>
              </select>
            </div>

            <div class="col-md-5">
              <label for="destiPaisLabel" class="form-label"><br></label>
              <select class="form-select" id="destiPais" name="destiPais" required onchange="imatgePais(); preuDesti();">
              </select>
            </div>

            <div class="col-md-5">
              <label for="imgDesti" class="form-label"><br></label>
              <img id="imgDesti" width="100%">
              <input type="hidden" id="imgSrc" name="imgSrc" value="">
            </div>
          </div>

          <div class="col-sm-6">
            <label for="preuLabel" class="form-label theme-label">Preu</label>
            <input type="text" class="form-control" id="preu" name="preu" placeholder="" readonly>
          </div>

          <br>

          <div class="col-sm-6">
            <label for="nom" class="form-label theme-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="" value="" required onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" min="3">
          </div>

          <br>

          <div class="col-12">
            <label for="telf" class="form-label theme-label">Telèfon</label>
            <input type="text" class="form-control" id="telf" name="telf" placeholder="" required onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="9">
          </div>

          <br>

          <div class="col-12">
            <label for="numPersones" class="form-label theme-label">Persones</label>
            <input type="number" class="form-control" id="numPersones" name="numPersones" placeholder="" required onchange="canviPreu()" value="1">
          </div>
          <br>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="descompte" onchange="canviPreu()" disabled>
            <label class="form-check-label theme-label" for="descompte">Descompte 20%</label>
          </div>
          <br>
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Afegir</button>

          <?php
          //Si l'usuari ha iniciat sessió, es desbloqueja el botó d'afegir
          if (isset($_SESSION['email'])) {
            echo '<script language="javascript">document.getElementsByClassName("w-100 btn btn-primary btn-lg")[0].removeAttribute("disabled");</script>';
          } else {
            echo '<script language="javascript">document.getElementsByClassName("w-100 btn btn-primary btn-lg")[0].setAttribute("disabled", "true");</script>';
          ?> <p class="center"><i><u>Inicia sessió per poder afegir el teu vol !</u></i></p> <?php
          }
            ?>
          <hr class="my-4">
        </form>
      </div>
    </div>
    </main>
  </div>
  <div>
    <?php
      require_once 'model/model.mostrarReserves.php';
      //mostrar reserves
      mostrarReserves();
    ?>
  </div>

  <script src="controlador/form-validation.js"></script>
</body>

</html>