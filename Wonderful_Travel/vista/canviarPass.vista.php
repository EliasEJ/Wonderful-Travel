<?php
require_once '../controlador/controlador.canviarPass.php';
require_once '../model/model.recuperarContrasenya.php';

if($_GET['token']){
    $token = $_GET['token'];
    $id = $_GET['id'];
    if(comprovarToken($token, $id)){
        
    }else{
        echo header('Location: errorToken.vista.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Canviar contrasenya</title>

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
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form method="post" style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="actualPass">Contrasenya actual</label>
                        <input type="password" name="actualPass" class="form-control form-control-lg"/>
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="newPass">Contrasenya nova</label>
                        <input type="password" name="newPass" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="confirmNewPass">Confirmar contrasenya nova</label>
                        <input type="password" name="confirmNewPass" class="form-control form-control-lg" />
                        </div>

                        <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-block" type="submit" name="canviar">Canviar</button>
                        <button class="btn btn-info btn-block" type="button" name="tornar" onclick="window.location.href='../'">Tornar</button>
                        </div>

                        <div class="pt-1 mb-4">
                            <i><u class="errorMessage">
                                <?php
                                    if(isset($_POST['canviar'])){
                                        comprovacionsCanviarPass();
                                    }
                                ?>
                            </u></i>
                        </div>
                    </form>
                    </div>

                </div>
                </div>
            </div>
        </section>
    </body>
</html>