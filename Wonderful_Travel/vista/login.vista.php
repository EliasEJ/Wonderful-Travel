<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Login | Register</title>

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

          <form style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="emailL">Correu electrònic</label>
              <input type="email" id="emailL" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="passwordL">Contrasenya</label>
              <input type="password" id="passwordL" class="form-control form-control-lg" />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-block" type="button" id="login">Login</button>
              <button class="btn btn-info btn-block" type="button" id="tornar" onclick="window.location.href='../'">Tornar</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">T'has oblidat de la contrasenya?</a></p>
            <p>No tens compte? <a href="./registre.vista.php" class="link-info">Registrat aquí</a></p>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>


</body>
</html>