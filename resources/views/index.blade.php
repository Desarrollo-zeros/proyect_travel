<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href=""><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>

        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Toll Number : 123-4568790</li>
            @if(empty($users))
                <li class="sig"><a href="#" data-toggle="modal" data-target="#registerModal" >Registrarme</a></li>
                <li class="sigi"><a href="#" data-toggle="modal" data-target="#loginModal" >/ Iniciar Sesíon</a></li>
            @else
                <li class="sigi"><a onclick="delete(localStorage.idbc)" href="/cerrar" data-toggle="modal">Cerrar Session/</a></li>
                <li class="sigi"><a href="/panel" data-toggle="modal">/Panel</a></li>
            @endif
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="">Proyect <span>Travel</span></a>
        </div>
        <div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="#" class="buses active">BUSES</a>
        </div>
        <div class="lock fadeInDown animated" data-wow-delay=".5s">
            <li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->

<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Tu Viaje Ideal</h1>
    </div>
</div>

<div class="container">

    <form id="formSearhB">
        <div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
            <i class="fa fa-columns"></i>
            <h3>Viaja Por Todo el Cesar</h3>
        </div>
        <div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
            <h2>Tiquetes De Buses Al Mejor Precio</h2>
            <div class="ban-top">
                <div class="bnr-left">
                    <label class="inputLabel">De</label>
                    <select id="dCiudad" name="dCiudad" class="city form-control">
                       @foreach($municipio as $row)
                           <option value="{{$row->id}}">{{$row->municipio}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="bnr-left">
                    <label class="inputLabel">Para</label>
                    <select id="aCiudad" name="aCiudad" class="city form-control">
                        @foreach($municipio as $row)
                            <option value="{{$row->id}}">{{$row->municipio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="ban-bottom">
                <div class="bnr-right">
                    <label class="inputLabel">Fecha de Viaje</label>
                    <input class="date" id="datepicker" name="fsalidad" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required="">
                </div>


                <div class="clearfix"></div>
                <!---start-date-piker---->
                <link rel="stylesheet" href="css/jquery-ui.css" />
                <script src="js/jquery-ui.js"></script>
                <script>
                    $(function() {
                        $( "#datepicker,#datepicker1" ).datepicker();
                    });
                </script>
                <!---/End-date-piker---->
            </div>
            <div class="sear">
                <input type="submit" class="seabtn btn btn-info" value="Buscar Disponibilidad">
            </div>
        </div>
    </form>
    <div class="clearfix"></div>
</div>
<!--- /banner ---->
<!--- rupes ---->

<div class="container">
        <div class="bus-btm">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="bdwT-0">Origen</th>
                        <th class="bdwT-0">Destino</th>
                        <th class="bdwT-0">Fecha Salida</th>
                        <th class="bdwT-0">Hora Salida</th>
                        <th class="">Valor</th>
                        <th class="">Accion</th>
                    </tr>
                    </thead>
                    <tbody id="tableDisponible">
                    </tbody>
                </table>
            </div>
        </div>
</div>



<!--- /rupes ---->
<!---holiday---->
<div class="container">
    <div class="holiday">
        <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="images/4.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 holiday-mid animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <h3>Travel Holiday Packages</h3>
            <p>Private Guide and Driver in any language and in any departure date. For more information please contact us....</p>
        </div>
        <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="images/5.jpg" class="img-responsive" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---/holiday---->
<!---track---->
<div class="container">
    <div class="track">
        <div class="col-md-6 track-right wow fadeInLeft animated" data-wow-delay=".5s">
            <a href="track.html"><img src="images/map1.png" class="img-responsive" alt=""></a>
        </div>
        <div class="col-md-6 track-left wow fadeInRight animated" data-wow-delay=".5s">
            <h3>TRACK MY BUS</h3>
            <p>First of its own kind,bus tracking feature on bus</p>
            <a href="track.html" class="learn">Learn More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
        <!--- /track ---->
<!--- routes ---->
<div class="routes">
    <div class="container">
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
            <div class="rou-left">
                <a href="#"><i class="fa fa-truck"></i></a>
            </div>
            <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                <h3>80000</h3>
                <p>ROUTES</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left">
            <div class="rou-left">
                <a href="#"><i class="fa fa-user"></i></a>
            </div>
            <div class="rou-rgt">
                <h3>1900</h3>
                <p>BUS OPERATORS</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
            <div class="rou-left">
                <a href="#"><i class="fa fa-ticket"></i></a>
            </div>
            <div class="rou-rgt">
                <h3>7,00,00,000+</h3>
                <p>TICKETS SOLD</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /routes ---->
<!--- footer-top ---->
<div class="footer-top">
    <div class="container">
        <div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>Bus Operators</h3>
            <ul>
                <li><a href="bus.html">New York  Charter </a></li>
                <li><a href="bus.html">Washington Charter</a></li>
                <li><a href="bus.html">Los Angeles Charter</a></li>
                <li><a href="bus.html">Chicago Charter</a></li>
                <li><a href="bus.html">Orlando Charter</a></li>
                <li><a href="bus.html">New Orleans Charter</a></li>
                <li><a href="bus.html">Houston Charter</a></li>
                <li><a href="bus.html">Nashville Charter</a></li>
                <li><a href="bus.html">Charlotte Charter</a></li>
                <li><a href="bus.html">Toronto Charter</a></li>
                <li><a href="bus.html">Washington Charter</a></li>
                <li><a href="bus.html">Los Angeles Charter</a></li>
                <li><a href="bus.html">Chicago Charter</a></li>
                <li><a href="bus.html">Orlando Charter</a></li>
                <li><a href="bus.html">New Orleans Charter</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
            <h3>Bus Routes</h3>
            <ul>
                <li><a href="travels.html">Alabama-California</a></li>
                <li><a href="travels.html">Alaska-Colorado</a></li>
                <li><a href="travels.html">Arizona-Delaware</a></li>
                <li><a href="travels.html">Arkansas-Florida</a></li>
                <li><a href="travels.html">Kansas-Georgia</a></li>
                <li><a href="travels.html">Iowa-Hawaii</a></li>
                <li><a href="travels.html">Indiana-Illinois</a></li>
                <li><a href="travels.html">Illinois-Florida</a></li>
                <li><a href="travels.html">Idaho-Indiana</a></li>
                <li><a href="travels.html">Hawaii-Iowa</a></li>
                <li><a href="travels.html">Georgia-Kansas</a></li>
                <li><a href="travels.html">Florida-Arkansas</a></li>
                <li><a href="travels.html">Delaware-Arizona</a></li>
                <li><a href="travels.html">Colorado-Alaska</a></li>
                <li><a href="travels.html">California-Alabama</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
    <div class="container">

        <div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <ul>
                <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
            </ul>
        </div>
        <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!--- /copy-right ---->
<!-- sign -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-left">
                                <ul>
                                    <li><a class="fb" onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Facebook</a></li>
                                    <li><a class="goog" onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Google</a></li>
                                    <li><a class="linkin" onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="login-right">
                                <form id="formRegister">
                                    <h3>Create your account </h3>
                                    <input type="text" placeholder="Usuario" id="usernamer" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                    <input type="text" placeholder="Correo electronico" id="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                    <input type="password" placeholder="Contraseña" id="passwordr" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                    <input type="submit" value="CREATE ACCOUNT">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //sign -->
<!-- signin -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-left">
                            <ul>
                                <li><a class="fb" onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Facebook</a></li>
                                <li><a class="goog"  onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Google</a></li>
                                <li><a class="linkin" onclick="$.notify('En mantenimiento')" href="#"><i></i>Sign in with Linkedin</a></li>
                            </ul>
                        </div>
                        <div class="login-right">
                            <form id="formLogin">
                                <h3>Signin with your account </h3>
                                <input type="text" id="username" value="" placeholder="Usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                <input type="password" id="password" value="" placeholder="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                                <h4><a href="#">Forgot password</a></h4>
                                <div class="single-bottom">
                                    <input type="checkbox" id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <input type="submit" value="SIGNIN">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //signin -->
<!-- write us -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="writ">
                        <h4>HOW CAN WE HELP YOU</h4>
                        <ul>
                            <li class="na-me">
                                <input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            </li>
                            <li class="na-me">
                                <input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            </li>
                            <li class="na-me">
                                <input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
                            </li>
                            <li class="na-me">
                                <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null">Select Issue</option>
                                    <option value="null">Booking Issues</option>
                                    <option value="null">Bus Cancellation</option>
                                    <option value="null">Refund</option>
                                    <option value="null">Wallet</option>
                                </select>
                            </li>
                            <li class="na-me">
                                <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null">Select Issue</option>
                                    <option value="null">Booking Issues</option>
                                    <option value="null">Bus Cancellation</option>
                                    <option value="null">Refund</option>
                                    <option value="null">Wallet</option>
                                </select>
                            </li>
                            <li class="descrip">
                                <input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="sub-bn">
                            <form>
                                <button class="subbtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //write us -->
<script src="/js/custom.js"></script>
<script src="/js/notify.min.js"></script>

<script>

    var csrf_token = '{{csrf_token()}}';
    var url = '{{url('')}}';
    $("#formSearhB").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.salida = $("#dCiudad").val();
        obj.destino = $("#aCiudad").val();
        obj.fsalida = $("#datepicker").val();


        if(obj.salida == obj.destino) {
            $.notify("No puede destino y salida iguales", "error")
            return false;
        }

        post(url+"/buscarBus",obj,"POST",csrf_token).then(
            data => {

                var string = "";
                for(var i in data){
                    string += "<tr>";
                    string += "<td>"+data[i].msM+"</td>";
                    string += "<td>"+data[i].mdM+"</td>";
                    string += "<td>"+data[i].fsalida+"</td>";
                    string += "<td>"+data[i].horaSalida+"</td>";
                    string += "<td>$ "+data[i].precio+"</td>";
                    string += "<td><a href='#' onclick='comprarticket("+data[i].id+")' class='btn btn-info btn-sm'>Comprar tiquete</a></td>";
                    string += "</tr>";
                }
                $("#tableDisponible").html(string);
            }
        )
    });

    function comprarticket(id) {
        localStorage.idbc = id;
        @if(!empty($users))
            window.location.href = "/panel/"+id;
        @else
        $("#loginModal").modal();
        @endif
    }

    $("#formLogin").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.username = $("#username").val();
        obj.password = $("#password").val();

        post(url+"/login",obj,"POST",csrf_token).then(
          data => {
              if(data.status){
                  window.location.href = "/";
              }else{
                  $.notify("Usuario y/o contraseña incorrecta")
              }
          }
        );
    })

    $("#formRegister").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.username = $("#usernamer").val();
        obj.password = $("#passwordr").val();
        obj.email = $("#email").val();

        post(url+"/register",obj,"POST",csrf_token).then(
            data => {
                if(data){
                   $.notify("Usuario registrado con exito","success");
                }else{
                    $.notify("Correo y/o Usuario ya existen")
                }
            }
        );
    })

    $(document).ready(function () {
        if(localStorage.idbc != undefined){
            window.location.href = url+"/panel/"+localStorage.idbc;
        }
    })

</script>

</body>
</html>