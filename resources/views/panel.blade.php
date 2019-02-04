<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                        <!-- Notifications-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="/img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="/img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item"><a href="/cerrar" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">

                @if($users->rol > 1)
                    <li class=""><a onclick="$('#gestionarConductor').css('display','block');$('#gestionarBus').css('display','none');$('#gestionarTicket').css('display','none');$('#addfondos').css('display','none');" href="#"> <i class="icon-user"></i>Gestionar Conductor</a></li>
                    <li class=""><a onclick="$('#gestionarConductor').css('display','none');$('#gestionarBus').css('display','block');$('#gestionarTicket').css('display','none');$('#addfondos').css('display','none');" href="#"> <i class="icon-form"></i>Gestionar Bus</a></li>
                    <li class=""><a onclick="$('#gestionarConductor').css('display','none');$('#gestionarBus').css('display','none');$('#gestionarTicket').css('display','block');$('#addfondos').css('display','none');" href="#"> <i class="icon-form"></i>Gestionar tiquetes</a></li>
                    <li><a href="#" onclick="$('#gestionarConductor').css('display','none');$('#gestionarBus').css('display','none');$('#gestionarTicket').css('display','none');$('#addfondos').css('display','block');"> <i class="icon-user"></i>Usuarios</a></li>
                @else
                    <li><a href="#" onclick="$('#comprarTicket').css('display','block');$('#historia').css('display','none');"><i class="icon-grid"></i>Gestionar Ticket </a></li>
                    <li><a href="#" onclick="$('#comprarTicket').css('display','none');$('#historia').css('display','block');"> <i class="icon-grid"></i>Historial </a></li>
                @endif
                <li><a  onclick="delete(localStorage.idbc)" href="/cerrar"> <i class="icon-close"></i>Cerrar Session </a></li>
            </ul>
        </nav>
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Dashboard</h2>
                </div>
            </header>
            <!-- Dashboard Counts Section-->


            <section class="forms">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        <div class="col-lg-12">

                            @if($users->rol>1)
                                <div class="card" id="gestionarConductor" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Gestionar Conductor</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Registro conductor.</p>
                                        <form id="formConductor">
                                            <div class="form-group">
                                                <label class="form-control-label">Cedula</label>
                                                <input type="number" id="cedula" placeholder="Cedula" class="form-control" required="" maxlength="10" minlength="10">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nombre</label>
                                                <input type="text" id="nombre" placeholder="Nombre" class="form-control" required="">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label">Telefono</label>
                                                <input type="number" id="telefono" placeholder="Telefono" class="form-control" required="" minlength="10" maxlength="10">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Registrar" class="btn btn-primary">
                                            </div>
                                        </form>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Cedula</th>
                                                <th class="bdwT-0">Nombre</th>
                                                <th class="bdwT-0">Telefono</th>
                                                <th class="">Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableConductor">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card" id="gestionarBus" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Gestionar Bus</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Registro conductor.</p>
                                        <form id="formBus">
                                            <div class="form-group">
                                                <label class="form-control-label">Placa</label>
                                                <input type="text" id="placa" placeholder="Placa" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Marca</label>
                                                <input type="text" id="marca" placeholder="Marca" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Modelo</label>
                                                <input type="text" id="modelo" placeholder="Modelo" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">numero Asiento</label>
                                                <input type="text" id="asiento" placeholder="Numero Asiento" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Registrar" class="btn btn-primary">
                                            </div>
                                        </form>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Placa</th>
                                                <th class="bdwT-0">Marca</th>
                                                <th class="bdwT-0">Modelo</th>
                                                <th class="bdwT-0">Numero De Asiento</th>
                                                <th class="">Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableBus">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card" id="gestionarTicket" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Gestionar Tiquetes</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Registro Tiquetes.</p>
                                        <form id="formTiquetes">
                                            <div class="form-group">
                                                <label class="form-control-label">Conductor</label>
                                                <select id="conductor" class="form-control">
                                                    @foreach($conductor as $row)
                                                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label">Origen</label>
                                                <select class="form-control" id="salida">
                                                    @foreach($municipio as $row)
                                                        <option value="{{$row->id}}">{{$row->municipio}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Destino</label>
                                                <select class="form-control" id="destino">
                                                    @foreach($municipio as $row)
                                                        <option value="{{$row->id}}">{{$row->municipio}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="form-control-label">Bus</label>
                                                <select class="form-control" id="bus">
                                                    @foreach($buse as $row)
                                                        <option value="{{$row->id}}">{{$row->placa}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="form-control-label">Fecha Salida</label>
                                                <input type="date" id="fsalida1"  placeholder="Fecha Salida" class="form-control" required="">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label">Hora Salida</label>
                                                <input type="text" id="horaSalidad1" placeholder="Hora Salida" class="form-control" required="">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label">Precio</label>
                                                <input type="number" id="precio" placeholder="Precio" class="form-control" required="">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Registrar" class="btn btn-primary">
                                            </div>
                                        </form>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Conductor</th>
                                                <th class="bdwT-0">Origen</th>
                                                <th class="bdwT-0">Destino</th>
                                                <th class="">Placa Bus</th>
                                                <th class="">Fecha de Salida</th>
                                                <th class="">Hora salida</th>
                                                <th class="">Precio</th>
                                                <th>Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablebc">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card" id="addfondos" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Informacion de Usuario</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Datos Usuario.</p>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Usuario</th>
                                                <th class="bdwT-0">Email</th>
                                                <th class="bdwT-0">Rol</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablaUsuario">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            @else
                                <div class="card" id="comprarTicket" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Comprar Ticket</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Registro conductor.</p>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Conductor</th>
                                                <th class="bdwT-0">Origen</th>
                                                <th class="bdwT-0">Destino</th>
                                                <th class="">Placa Bus</th>
                                                <th class="">Fecha de Salida</th>
                                                <th class="">Hora salida</th>
                                                <th class="">Precio</th>
                                                <th>Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablebc">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="card" id="historia" style="display: none;">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Historial Compra Ticket</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Registro conductor.</p>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">ciudad de origen</th>
                                                <th class="bdwT-0">ciudad de destino</th>
                                                <th class="bdwT-0">Fecha de viaje</th>
                                                <th class="">Fecha de Compra</th>
                                                <th class="">Valor</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablehistorial">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </section>

            <!-- Page Footer-->
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/popper.js/umd/popper.min.js"> </script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="/js/charts-home.js"></script>
<!-- Main File-->
<script src="/js/front.js"></script>
<!-- //write us -->
<script src="/js/custom.js"></script>
<script src="/js/notify.min.js"></script>

<script>

    var csrf_token = '{{csrf_token()}}';
    var url = '{{url('')}}';

    function eliminarConductor(id){
        var obj = new Object();
        obj.id = id;
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }
        post(url+"/eliminarConductor",obj,"POST",csrf_token).then(data => {
            post(url+"/getConductor",{},"POST",csrf_token).then(data => {
                loaderConductor(data);
            });
        });
    }


    function eliminarBus(id){
        var obj = new Object();
        obj.id = id;
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }
        post(url+"/eliminarBus",obj,"POST",csrf_token).then(data => {
            post(url+"/getBus",{},"POST",csrf_token).then(data => {
                loaderBus(data);
            });
        });
    }

    function eliminarBC(id){
        var obj = new Object();
        obj.id = id;
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }
        post(url+"/eliminarBC",obj,"POST",csrf_token).then(data => {
            post(url+"/getBC",{},"POST",csrf_token).then(data => {
                loaderBC(data);
            });
        });
    }

    $("#formConductor").on("submit",function (form) {
        form.preventDefault();
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }
        var obj = new Object();
        obj.cedula = $("#cedula").val();
        obj.nombre = $("#nombre").val();
        obj.telefono = $("#telefono").val();


        post(url+"/registerConductor",obj,"POST",csrf_token).then(data => {
            if(data.length>0){
                loaderConductor(data);
            } else{
                $.notify("error al momento de guardar conductor");
            }
        });

    });

    $("#formBus").on("submit",function (form) {
        form.preventDefault();
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }
        var obj = new Object();
        obj.placa = $("#placa").val();
        obj.modelo = $("#modelo").val();
        obj.marca = $("#marca").val();
        obj.asientos = $("#asiento").val();

        post(url+"/registerBus",obj,"POST",csrf_token).then(data => {
            if(data.length>0 && data != false){
                loaderBus(data);
                $.notify("Bus Guardado","success");
            } else{
                $.notify("error al momento de guardar conductor o ya existe el vehiculo");
            }
        });

    });


    $(document).ready(function () {
        post(url+"/getConductor",{},"POST",csrf_token).then(data => {
            loaderConductor(data);
        });

        post(url+"/getBus",{},"POST",csrf_token).then(data => {
            loaderBus(data);
        });


        post(url+"/historialTicket",{},"POST",csrf_token).then(data => {
            loaderHistorial(data);
        });


        post(url+"/getUsuario",{},"POST",csrf_token).then(data => {
            loaderUsuario(data);
        });

        @if(!empty($idbc))
            var obj = new Object();
            obj.id = ' {{$idbc}}';
            post(url+"/getBC",obj,"POST",csrf_token).then(data => {
                loaderBC(data);
            });
        @else
            post(url+"/getBC",{},"POST",csrf_token).then(data => {
                loaderBC(data);
            });
        @endif




    });

    function loaderConductor(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].cedula+"</td>";
            string += "<td>"+data[i].nombre+"</td>";
            string += "<td>"+data[i].telefono+"</td>";
            string += "<td><a class='btn btn-sm' onclick='eliminarConductor("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tableConductor").html(string);
    }

    function loaderBus(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].placa+"</td>";
            string += "<td>"+data[i].marca+"</td>";
            string += "<td>"+data[i].modelo+"</td>";
            string += "<td>"+data[i].asientos+"</td>";
            string += "<td><a class='btn btn-sm' onclick='eliminarBus("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tableBus").html(string);
    }

    function loaderBC(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].namec+"</td>";
            string += "<td>"+data[i].msM+"</td>";
            string += "<td>"+data[i].mdM+"</td>";
            string += "<td>"+data[i].placa+"</td>";
            string += "<td>"+data[i].fsalida+"</td>";
            string += "<td>"+data[i].horaSalida+"</td>";
            string += "<td>"+data[i].precio+"</td>";
            @if($users->rol>1)
                string += "<td><a href='#' class='btn btn-sm' onclick='eliminarBC("+data[i].id+")'>Eliminar</a></td>";
            @else
                string += "<td><a href='#' class='btn btn-sm' onclick='comprarticket("+data[i].id+")'>Comprar</a></td>";
            @endif
            string += "</tr>";
        }
        $("#tablebc").html(string);
    }


    function comprarticket(id) {
        var obj = new Object();
        obj.idbc = id;
        if(!confirm("Desea Realizar la operacion")){
            return false;
        }

        post(url+"/comprarTicket",obj,"POST",csrf_token).then(data => {
            if(data){
                loaderHistorial(data);
                delete(localStorage.idbc);
                $.notify("Compra Realizada con exito","success");
            }else{
                $.notify("Error al realizar la compra");
            }
        });
        delete(localStorage.idbc);

    }

    $("#formTiquetes").on("submit",function (form) {
        form.preventDefault();

        if(!confirm("Desea Realizar la operacion")){
            return false;
        }

        var obj = new Object();
        obj.conductor = $("#conductor").val();
        obj.salida = $("#salida").val();
        obj.destino = $("#destino").val();
        obj.bus = $("#bus").val();
        obj.fsalida = $("#fsalida1").val().split("-");
        obj.fsalida = obj.fsalida[1]+"/"+obj.fsalida[2]+"/"+obj.fsalida[0];

        if(obj.salida == obj.destino){
            $.notify("el origen y destino no pueden ser iguales","error");
            return false;
        }

        obj.horaSalida = $("#horaSalidad1").val();
        obj.precio = $("#precio").val();

        post(url+"/registerBC",obj,"POST",csrf_token).then(data => {
            if(data.length>0 && data != false){
                loaderBC(data);
                $.notify("Registro realizado","success");
            } else{
                $.notify("error al momento de guardar conductor o ya existe el vehiculo");
            }
        });
    });



    function loaderHistorial(data){
        var string = "";
        for(var i in data) {
            string += "<tr>";
            string += "<td>" + data[i].msM + "</td>";
            string += "<td>" + data[i].mdM + "</td>";
            string += "<td>" + data[i].fsalida + "</td>";
            string += "<td>" + data[i].fechaCompra + "</td>";
            string += "<td>$ "+ data[i].precio + "</td>";
            string += "</tr>";
        }
        $("#tablehistorial").html(string);
    }



    function loaderUsuario(data){
        var string = "";
        var addFondo = $("#addFondo");

        for(var i in data) {
            string += "<tr>";
            string += "<td>" + data[i].username + "</td>";
            string += "<td>" + data[i].email + "</td>";
            if(data[i].rol == 1){
                string += "<td>Administrador</td>";
            }else{
                string += "<td>Usuario</td>";
            }
            string += "</tr>";
        }
        $("#tablaUsuario").html(string);
    }



</script>

</body>
</html>
