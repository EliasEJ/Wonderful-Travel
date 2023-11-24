<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperació de la contrasenya</title>
        <!-- Bootstrap core CSS -->
        <link href="../estils/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form method="post" style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Recuperació de la contrasenya</h3>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="emailRecuperar">Correu electrònic</label>
                        <input type="email" name="emailRecuperar" class="form-control form-control-lg" value="<?php echo saveEmailRecuperar();?>"/>
                        </div>

                        <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-block" type="submit" name="login">Login</button>
                        <button class="btn btn-info btn-block" type="button" name="tornar" onclick="window.location.href='../'">Tornar</button>
                        </div>

                        <div class="pt-1 mb-4">
                            <?php
                                if(isset($_POST['login'])){
                                    comprovacionsL();
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