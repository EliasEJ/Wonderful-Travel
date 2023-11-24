<?php
require_once '../controlador/controlador.registre.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Registre</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">


  <!-- Bootstrap core CSS -->
  <link href="../estils/bootstrap.min.css" rel="stylesheet">

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

<body>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registre</h3>

            <div class="form-outline mb-4">
                <label class="form-label" for="emailR">Correu electrònic</label>
                <input type="email" name="emailR" class="form-control form-control-lg" value="<?php echo saveEmailR();?>"/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="usernameR">Nom d'usuari</label>
                <input type="text" name="usernameR" class="form-control form-control-lg" value="<?php echo saveUsernameR();?>"/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="passwordR1">Contrasenya</label>
                <input type="password" name="passwordR1" class="form-control form-control-lg"/>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="passwordR2">Confirma la contrasenya</label>
                <input type="password" name="passwordR2" class="form-control form-control-lg"/>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-block" type="submit" name="register">Registre</button>
              <button class="btn btn-info btn-block" type="button" name="tornarR" onclick="window.location.href='../'">Tornar</button><br>
              <p>Tens una compte? <a href="./login.vista.php" class="link-info">Inicia sessió aquí</a></p>
            </div>
            <div class="pt-1 mb-4">
              <?php
              if(isset($_POST['register'])){
                  comprovacionsR();
              }
              ?>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>


</body>
</html>