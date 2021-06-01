<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Iniciar sesion</h3>
                        <p>Por favor inicie sesion para continuar</p>
                    </div>
                    <form method="post" action="control.php">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Nombre de usuario</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="usr" name="usr">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Contraseña</label>
                                <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Se te olvido la contraseña?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="passwd" name="passwd">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Recordar</label>
                            </div>
                            <div class="float-right">
                                <a href="auth-register.html">No tienes una cuenta?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Enviar</button>
                        </div>
                        <?php
                            if(isset($_GET['error'])){
                                $e=$_GET['error'];
                                if($e==1){
                                    echo "usuario o contraseña incorrecta";
                                }
                            }
                        ?>
                    </form>
                    <div class="divider">
                        <div class="divider-text">O</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
