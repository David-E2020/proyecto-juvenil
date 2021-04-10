<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiantes</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="../assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Menu</li>
                        <li class="sidebar-item  ">
                            <a href="../index.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Listar</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="../listar/lista_clientes.php">Cliente</a>
                                </li>
                                <li>
                                    <a href="../listar/lista_proveedor.php">Proveedor</a>
                                </li>
                                <li>
                                    <a href="../listar/lista_cargo.php">Cargo</a>
                                </li>
                                <li>
                                    <a href="../listar/lista_empleado.php">Empleado</a>
                                </li>
                                <li>
                                    <a href="../listar/lista_producto.php">Producto</a>
                                </li>
                            </ul>
                        </li>
                        <li class='sidebar-title'>Estras</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Becas</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="#l">Postulantes</a>
                                </li>
                                <li>
                                    <a href="#l">Estudiantes becados</a>
                                </li>
                                <li>
                                    <a href="#">Requisitos becas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>Torneos</span>
                            </a>
                            <ul class="submenu ">

                                <li>
                                    <a href="#">Torneos realizados</a>
                                </li>

                                <li>
                                    <a href="#">Lista de todos los torneos</a>
                                </li>

                                <li>
                                    <a href="#">Torneos pendientes</a>
                                </li>

                            </ul>
                        </li>




                        <li class="sidebar-item  ">
                            <a href="form-editor.html" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Administrativo</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="#">Lista Personal</a>
                                </li>

                                <li>
                                    <a href="#">Agregar personal</a>
                                </li>

                            </ul>

                        </li>





                        <li class='sidebar-title'>Usuarios</li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Login</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="#">Administrador</a>
                                </li>

                                <li>
                                    <a href="#">Instructores</a>
                                </li>

                                <li>
                                    <a href="#">Estudiantes</a>
                                </li>

                            </ul>

                        </li>




                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="alert-circle" width="20"></i>
                                <span>Errors</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="error-403.html">403</a>
                                </li>

                                <li>
                                    <a href="error-404.html">404</a>
                                </li>

                                <li>
                                    <a href="error-500.html">500</a>
                                </li>

                            </ul>

                        </li>




                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="../assets/images/avatar/foto.jpg" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">David</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>