<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bar la Felicidad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  /*#carta #menudiario {
  width     : 100%;
  height    : 100%; 
  background-image: url('lafeli.png');     
  background-repeat: no-repeat;     
  background-position: center;     
  background-size: cover;
  }
  #carta .menufelicidad{
  }
  #carta #menucarta {
  }*/
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  h2 {
   font-weight: bold;
   color:#0b58f1;

  }
  .centerimg {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  }
  .container {
    padding: 40px 40px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    /* make all photos black and white */
    height:200px; 
    width: 500px; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #0b58f1 !important;
    #background: transparent;
  }
  .bg-1 {
    #background: transparent;
   background: #2d2d30;
    color: #bdbdbd;
  }
   .bg-2 {
    #background: transparent;
    background: #2d2d30;
    color: #bdbdbd;
  } 
  .bg-1 h3 {color: #000;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    #background: transparent;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn2 {
    padding: 10px 60px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
 
  }
  .btn {
    padding: 10px 20px;
    #background: transparent; 
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    #background: transparent;
    color: #000;
  }
  .g-recaptcha{
   width: 100%;	
	
}
  .modal .modal-body form #nombre-comida,.modal .modal-body form #precio-comida {
	color: #000 !important;
        text-transform: uppercase;
	text-weight: bold; 
	}
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #000;
  }
  #carta .container ul {
    list-style: none;
  }
  
  #carousel1 .container ul {
    list-style: circle;
    #background: transparent;
  }

  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #caf1f6;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #0b58f1 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #0b58f1 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .navbar-toggle: checked + nav .navbar {   display: block; }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="lafelicidad" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="lafeli4.png" width="50" height="50" >
      <a class="navbar-brand" href="#lafelicidad"><b>BAR LA FELICIDAD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#llevar" class="scroll cerrarMenu">LLEVAR</a></li>
        <li><a href="#carta" class="scroll cerrarMenu">CARTA</a></li>
        <li><a href="#menucarta" class="scroll cerrarMenu">MENÚ</a></li>
        <li><a href="#promociones" class="scroll cerrarMenu"  >PROMOCIONES</a></li>
        <li><a href="#contacto" class="scroll cerrarMenu"  >CONTACTO</a></li>     
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      
     <div class="item active">
        <img src="torti.jpg" alt="barin" width="1200" height="1000">
        <div class="carousel-caption">
          <h3>TORTILLA A SOLO 8,60 EUROS</h3>
          <p>Nuestra riquísima e inigualable tortilla llama ya!! 915345020</p>
           <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>

        </div> 
      </div>


      <div class="item">
        <img src="bbe.png" alt="salchi" width="1200" height="1000">
        <div class="carousel-caption">
          <h3> Nuestra cerveza Mahou bien fria  2.90 EUROS !!!</h3>
          <p> Nuestra cerveza bien fria Mahou!!! llama al 915345020</p>
         <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>

        </div>      
      </div>

      <div class="item">
        <img src="boca.jpg" alt="lacon" width="1200" height="1000">
        <div class="carousel-caption">
          <h3>BOCADILLOS A 4 Y MONTADOS A 3 EUROS</h3>
          <p>Unos bocadillos que te dejaran satisfechos al más puro estilo de la feli llama ya!! 915345020</p>
          <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>

        </div>      
      </div>
    
      <div class="item">
        <img src="croke.jpg" alt="tortilla" width="1200" height="1000">
        <div class="carousel-caption">
          <h3>CROQUETAS A SOLO 8 EUROS</h3>
          <p>Buenísimas croquetas al más puro estilo de la feli, has tu pedido ya!!! llamando al  915345020</p>
           <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>

        </div>      
      </div>

      <div class="item">
        <img src="albon.jpg" alt="albon" width="1200" height="1000">
        <div class="carousel-caption">
          <h3>ALBONDIGAS A SOLO 9.50 EUROS</h3>
          <p>Buenísimas albondigas al más puro estilo de la feli, has tu pedido ya! llama al  915345020</p>
          <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>

        </div>
      </div>


	
    </div>

    <!-- Left and right controls -->
    <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a-->
</div>

<!-- Container (The Band Section) -->
<div id="llevar" class="container text-center">
  <h2 style="color:red;"><em>FELIZ NAVIDAD Y PROSPERO AÑO NUEVO</em> </h2>
  <p style="color:red;"><em>ORGANIZA TU CENA DE AÑO NUEVO O NAVIDAD CON NOSOTROS!</em></p>
  <p>El Bar la Felicidad estará encantado de atenderte siguiendo la normativa establecida, solo debes acercarte a <b>Av Reina Victoria 19 </b>ó llamar al teléfono <b>915345020</b>  <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>
 . Tenemos todo tipo de bebidas y platos combinados y/o aperitivos varios, por cada bebida como tenemos acostumbrados a nuestra clientela, aquí presentamos tres ejemplos desde luego hay muchos más... Te esperamos!!! </p>
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center" ><strong  id="filete">FILETE PLANCHA C/PATATAS FRITAS Ó ENSALADA</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="filpa.jpg"  alt="Random Name" width="255" height="255" class= "centerimg">
      </a>
      <div id="demo" class="collapse" >
        <p>Abundantes patatas fritas y un filete en condiciones. Acercate al local y verfícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal" data-description="filete plancha" data-precio="8.5 euros">8.50 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="cinta">CINTA DE LOMO, HUEVO FRITO Y PATATAS FRITAS</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="huepa.jpg"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo2" class="collapse">
        <p>Abundantes patatas fritas y dos buenos filetes en condiciones. Acercate al local o llama y verifícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal"  data-description="cinta lomo, huevo frito y patatas fritas" data-precio="6 euros">6 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="pollo">FILETE DE POLLO C/ ABUNDANTE PATATAS FRITAS</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="poll.png"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo3" class="collapse">
        <p>Un buenísimo y bien preparado filete de pollo con abundantes patatas. Acercate al local u llama y verifícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal"  id="preciop" data-description="filete pollo con patatas fritas" data-precio="8 euros" >8 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="tortilla">NUESTRA INSUPERABLE TORTILLA DE PATATA </strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="torti.jpg"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo4" class="collapse">
        <p>Nuestra insuperable tortilla de patata a un precio normal</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal" data-description="tortilla de patata" data-precio="8,60 euros">8,60 euros</button>
    </div>
	</div>
	<div class="row">
	<div class="col-sm-3">
      <p class="text-center" ><strong  id="sepia">SEPIA PLANCHA C/PATATAS FRITAS Ó ENSALADA</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="sepia.jpg"  alt="Random Name" width="255" height="255" class= "centerimg">
      </a>
      <div id="demo5" class="collapse" >
        <p>Abundantes patatas fritas y una Sepia en condiciones. Acercate al local y verfícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal" data-description="filete plancha" data-precio="11 euros">11 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="huroto">HUEVOS ROTOS</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="huevosrotos.jpg"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo6" class="collapse">
        <p>Abundantes patatas fritas y huevos en condiciones. Acercate al local o llama y verifícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal"  data-description="cinta lomo, huevo frito y patatas fritas" data-precio="8,50 euros">8,50 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="calamar">CALAMARES</strong></p><br>
      <a href="#demo7" data-toggle="collapse">
        <img src="calamar.jpg"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo7" class="collapse">
        <p>Un buen plato de calamares. Acercate al local u llama y verifícalo</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal"  id="preciop" data-description="filete pollo con patatas fritas" data-precio="9.50 euros" >9.50 euros</button>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong id="campera"> ENSALADA MIXTA </strong></p><br>
      <a href="#demo8" data-toggle="collapse">
        <img src="campera.jpg"  alt="Random Name" width="255" height="255" class="centerimg">
      </a>
      <div id="demo8" class="collapse">
        <p>Una buena y fresca ensalada campera.</p>
      </div>
       <button class="btn" data-toggle="modal" data-target="#myModal" data-description="tortilla de patata" data-precio="7 euros">7 euros</button>
    </div>

  </div>
</div>
<!-- menu diario -->
<!-- Container (TOUR Section) -->

  <div class="container text-center" id="carta">
  <div class="container">
    <h2 class="text-center"><b>CARTA LA FELICIDAD</b></h2>
    <img src="images.png" alt="menu" width="50" height="50">
    <p class="list-group"></p>
      <h3 class="list-group-item text-center"><strong>BOCADILLOS</strong> </h3>
        <ul>
           <li>LOMO CON QUESO     <span class="label label-danger">4.00 euros !</span> </li>
           <li>BACON CON QUESO    <span class="label label-danger">4.00 euros !</span> </li>
           <li>CALAMARES          <span class="label label-danger">4.50 euros !</span></li>
           <li>SALCHICHA     <span class="label label-danger">4.00 euros !</span> </li>
           <li>PANCETA    <span class="label label-danger">4.00 euros !</span> </li>
           <li>CHISTORRA          <span class="label label-danger">4.00 euros !</span></li>
           <li>PEPITO DE TERNERA     <span class="label label-danger">5.50 euros !</span> </li>
           <li>TORTILLA ESPAÑOLA    <span class="label label-danger">3.80 euros !</span> </li>
           <li>TORTILLA FRANCESA          <span class="label label-danger">3.80 euros !</span></li>

        </ul>
      <h3 class="list-group-item text-center"><strong>MONTADOS</strong></h3>
        <ul>
          <li>LOMO CON QUESO     <span class="label label-danger">3.00 euros !</span> </li>
           <li>BACON CON QUESO    <span class="label label-danger">3.00 euros !</span> </li>
           <li>CALAMARES          <span class="label label-danger">3.50 euros !</span></li>
           <li>SALCHICHA     <span class="label label-danger">3.00 euros !</span> </li>
           <li>PANCETA    <span class="label label-danger">3.00 euros !</span> </li>
           <li>CHISTORRA          <span class="label label-danger">3.00 euros !</span></li>
           <li>TORTILLA ESPAÑOLA    <span class="label label-danger">2.80 euros !</span> </li>
           <li>TORTILLA FRANCESA          <span class="label label-danger">2.80 euros !</span></li>

        </ul>
      
      <h3 class="list-group-item text-center"><strong>RACIONES</strong></h3>
        <ul>
           <li>ALITAS DE POLLO 1 , 1/2     <span class="label label-danger">9.50 , 6.50 euros</span>  </li>
           <li>ALBÓNDIGAS CASERAS 1 , 1/2   <span class="label label-danger">9.50 , 6.50 euros</span> </li>
           <li>BOQUERONES FRITOS 1 , 1/2    <span class="label label-danger">9.50 , 6.50 euros</span></li>
           <li>CHISTORRA CON PATATAS Y PIMIENTOS 1 , 1/2     <span class="label label-danger">9.50 euros , 6.50</span> </li>
           <li>CALAMARES A LA ANDALUZA    <span class="label label-danger">9.50 , 6.50 euros </span> </li>
           <li>FINGERS DE POLLO          <span class="label label-danger">8.00 euros </span></li>
           <li>CROQUETAS    <span class="label label-danger">8.00 euros </span> </li>
           <li>ENSALADILLA RUSA 1 , 1/2          <span class="label label-danger">7.00 , 4.50 euros </span></li>
           <li>ENSALADA CAMPERA  1 , 1/2          <span class="label label-danger">7.00 , 4.50 euros </span></li>
           <li>ENSALADA MIXTA          <span class="label label-danger">6.70 euros </span></li>
           <li>EMPANADILLAS 1           <span class="label label-danger">8.00  </span></li>
           <li>FILETE DE POLLO CON PATATAS          <span class="label label-danger">8.00 euros </span></li>
           <li>FILETE DE TERNERA CON PATATAS          <span class="label label-danger">8.50 euros </span></li>
           <li>GAZPACHO         <span class="label label-danger">4.50 euros </span></li>
           <li>LACON A LA GALLEGA 1 , 1/2          <span class="label label-danger">9.50 , 6.80 euros </span></li>
           <li>MORCILLA A LA PLANCHA 1           <span class="label label-danger">8.00  </span></li>
           <li>OREJA A LA PLANCHA 1 , 1/2         <span class="label label-danger">8.00 , 4.80 euros </span></li>
            <li>PATATAS BRAVAS 1 , 1/2          <span class="label label-danger">6.00 , 4.50 euros </span></li>
            <li>PATATAS ALI OLI 1 , 1/2          <span class="label label-danger">6.00 , 4.50 euros </span></li>
             <li>QUESO MANCHEGO 1 , 1/2          <span class="label label-danger">9.50 , 6.50 euros </span></li>
            <li>SALCHIPAPAS CON PATATAS Y PIMIENTOS 1, 1/2          <span class="label label-danger">9.50 , 6.50 euros </span></li>
            <li>TORTILLA ESPAÑOLA  1, 1/2          <span class="label label-danger">8.60 , 4.30 euros </span></li>
             <li>HUEVOS ROTOS         <span class="label label-danger">8.00 euros </span></li>



        </ul>
      
       <h3 class="list-group-item text-center"><strong>BEBIDAS</strong></h3>
        <ul>
           <li>COCA COLA    <span class="label label-danger">2.60 euros</span>  </li>
           <li>FANTA NARANJA   <span class="label label-danger">2.60 euros</span> </li>
           <li>SPRITE   <span class="label label-danger">2.60 euros</span></li>
           <li>SCHWEPPES NARANJA    <span class="label label-danger">2.60</span> </li>
           <li>SCHWEPPES LIMÓN   <span class="label label-danger">2.60 euros </span> </li>
           <li>BITTER KASS   <span class="label label-danger">2.60 euros </span> </li>
           <li>NESTE   <span class="label label-danger">2.60 euros </span> </li>
           <li>ACUARIUS   <span class="label label-danger">2.60 euros </span> </li>
           <li>MOSTO   <span class="label label-danger">2.60 euros </span> </li>
           <li>ZUMO PIÑA, MELOCOTÓN, TOMATE   <span class="label label-danger">2.60 euros </span> </li>

        </ul>

       <h3 class="list-group-item text-center"><strong>CERVEZA</strong></h3>
        <ul>
           <li>CAÑA    <span class="label label-danger">2.00 euros</span>  </li>
           <li>JARRA    <span class="label label-danger">2.60 euros</span>  </li>
           <li>CHAMPION CERVEZA    <span class="label label-danger">4.00 euros</span>  </li>
           <li>TERCIO   <span class="label label-danger">2.90 euros</span>  </li>
            <li>TERCIO SIN GLUTEN  <span class="label label-danger">3.10 euros</span>  </li>
           <li>TOSTADA SIN    <span class="label label-danger">2.90 euros</span>  </li>
           <li>ALHAMBRA   <span class="label label-danger">3.20 euros</span>  </li>
           <li>CERVEZA 1906   <span class="label label-danger">3.50 euros</span>  </li>
           <li>ESTRELLA GALICIA <span class="label label-danger">2.50 euros</span>  </li>

        </ul>

      
  </div>

</div>

<div id="menucarta"  class="container text-center" >
  
   
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
      <li data-target="#myCarousel1" data-slide-to="3"></li>
      <li data-target="#myCarousel1" data-slide-to="4"></li>
      <li data-target="#myCarousel1" data-slide-to="5"></li>
    </ol-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      
     <div class="item active">
        <br>
        <img src="lafelilogo.png" alt="lunes" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('LENTEJAS CON CHORIZO','PISTO','ENSALADA CAMPERA','ESPARRAGOS CON MAYONESA','ESTOFADO DE CARNE','FILETE DE POLLO','EMPERADOR','CALAMARES ANDALUZA','MENÚ LUNES','11 euros!')" >LUNES</button>
      </div>


      <div class="item">
        <br>
        <img src="lafelilogo.png" alt="martes" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('SOPA DE COCIDO','ALCACHOFAS CON JAMÓN','ENSALADILLA RUSA','ENSALADA MIXTA','SEGUNDO DE COCIDO','HIGADO ENCEBOLLADO','LUBINA PLANCHA','CALAMARES A LA ANDALUZA','MENÚ MARTES','11 euros!' )" >MARTES</button>     
      </div>

      <div class="item">
        <br>
        <img src="lafelilogo.png" alt="miercoles" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('ESPAGUETI BOLONESA','GUISANTES CON JAMÓN','ENSALADA CAMPERA','ESPARRAGOS CON MAYONESA','ALBONDIGAS CASERAS','FILETE DE POLLO','CINTA DE LOMO CON HUEVO','CALAMARES ANDALUZA','MENÚ MIERCOLES','11 euros!' )" >MIERCOLES</button>     
      </div>
    
      <div class="item">
        <br>
        <img src="lafelilogo.png" alt="jueves" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('PAELLA MIXTA','JUDÍAS VERDES CON JAMÓN','ENSALADILLA RUSA','ENSALADA CAMPERA','CODILLO AL HORNO','BISTEC DE TERNERA','EMPERADOR','CALAMARES ANDALUZA','MENÚ JUEVES','11 euros!' )" >JUEVES</button>
      </div>

      <div class="item">
        <br>
        <img src="lafelilogo.png" alt="viernes" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('LENTEJAS CON CHORIZO','REVUELTO DE GULAS','ENSALADA CAMPERA','ESPARRAGOS CON MAYONESA','POLLO ASADO','BISTEC','HIGADO ENCEBOLLADO','CALAMARES ANDALUZA','MENÚ VIERNES','11 euros!' )" >VIERNES</button>
      </div>
      <div class="item">
        <br>
        <img src="lafelilogo.png" alt="sabado" width="1200" height="1000">
        <div class="carousel-caption">
          <p style="background:blue;">Click abajo para ver el menú del día </p>
        </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" onclick="menudisplay('PAELLA DE MARISCO','ALCACHOFA CON JAMON','ENSALADA CAMPERA','ENSALADA MIXTA','ALBONDIGAS CASERAS','FILETE DE POLLO','BISTEC','EMPERADOR','MENÚ SABADO','12 euros!' )" >SABADO</button>
      </div>


	
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
   
  
  </div>


<!-- Container (TOUR Section) -->
<div id="promociones" class="bg-1">
  <div class="container">
    <h2 class="text-center"><b>PROMOCIONES LA FELICIDAD</h2>
    <p class="text-center">Cuando se pueda quedar con los amiguetes, el equipo de la Felicidad tiene promociones insuperables.<br> Que no te puedes permitir perderte!!</p>
    <video class="centerimg" src="lafeli.mp4" poster="lafeli.jpg" controls></video>
    <ul class="list-group">
      <li class="list-group-item">Fase 1 o más <span class="label label-danger">Para 15 personas!</span></li>
      <li class="list-group-item">Fase 3 o más <span class="label label-danger">Para 30 personas !</span></li>
      <li class="list-group-item">Fase 3 o más <span class="label label-danger">Copas jueves, viernes y sabado !</span></li>
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="terra.jpg" alt="Promoción" width="400" height="300">
          <p><strong>PARA 15 PERSONAS</strong></p>
          <p style= "Brush Script MT">2 tortillas, 2 salchipapas, 2 huevos rotos, 2 finger de pollo, 10 jarras de litro cerveza o sangria</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"  data-description="para 15 personas" data-precio="150 euros" >150 EUROS</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="30per.jpg" alt="Promoción" width="400" height="300">
          <p><strong>PARA 30 PERSONAS</strong></p>
          <p style= "Brush Script MT">3 de tortillas, 3 de alitas, 3 de finger de pollo, 3 de croquetas, 20 jarras de litro de cerveza o sangria </p>
          <button class="btn" data-toggle="modal" data-target="#myModal" data-description="para 30 personas" data-precio="300 euros">300 EUROS</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Luis.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>COPAS AL ESTILO LA FELI</strong></p>
          <p  style= "Brush Script MT">copas a solo 5 euros, y el vaso hasta arriba!!!!!</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"   data-description="copas al estilo la felicidad" data-precio="5 euros">5 EUROS</button>
        </div>
      </div>
    </div>
  </div>

<?php
include 'envio.php';
include 'envio2.php';
$recaptcha_clave = "6LcnUZAUAAAAAJHw3U0JNosL6NVLE6b_AQ8MlMuS";
$recaptcha_secret = "6LcnUZAUAAAAAABMpv4Px9cuI9z4nVDMYrHTu7wV";
          
?>

   <!-- MENÚ Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="tmenu">Menú</h4>
          <img src="45454.png" alt="menu" width="50" height="50">
        </div>
        <div class="modal-body">
      <h3 class="list-group-item text-center" ><strong>PRIMERO</strong> </h3>
      	<ul>
           <li id = "pr1" style="color:blue" >ALUBIAS BLANCAS</li>
           <li id = "pr2" style="color:blue" >PISTO </li>
           <li id = "pr3" style="color:blue" >CAMPERA</li>
           <li id = "pr4" style="color:blue" >ESPARRAGOS CON MAYONESA</li>
      	</ul>
      <h3 class="list-group-item text-center" ><strong>SEGUNDO</strong></h3>
        <ul>
           <li id = "se1" style="color:blue">RAGUT DE TERNERA</li>
           <li id = "se2" style="color:blue">POLLO AL AJILLO</li>
           <li id = "se3" style="color:blue">EMPERADOR</li>
           <li id = "se4" style="color:blue">CALAMARES ANDALUZA</li>
        </ul>

      <p class="list-group-item" style="color:blue" ><b>   VINO, PAN, CAFÉ O POSTRE  <span class="label label-danger" id="pmenu" >10 euros !</span></b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> 





 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>PEDIDO</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" id="feli">  

            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="form-group">
              <label for="psw">Nombre </label>
              <input type="text" class="form-control" id="nombre-comida" name="nombre-comida"  required >
            </div>
            <div class="form-group">
              <label for="psw">Precio</label>
              <input type="text" class="form-control" id="precio-comida" name="precio-comida"  required >
            </div>

            <div class="form-group">
              <label for="psw">Unidades Requeridas</label>
              <input type="number" class="form-control" id="psw" name="psw"  min="1" pattern="^[0-9]*" placeholder="How many?" required >
            </div>
            <div class="form-group">
              <label for="nombre"><span class="glyphicon glyphicon-user"></span>nombre</label>      
              <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Escriba su nombre" required >
            </div>
            <div class="form-group">
              <label for="telefono"><span class="glyphicon glyphicon-earphone"></span>telefono</label>
              <input type="text" class="form-control" id="usrphone" name="usrphone"  placeholder="Escriba su telefono" required>
            </div>
            <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-envelope"></span>correo</label>
              <input type="text" class="form-control" id="usrmail" name="usrmail"  placeholder="Escriba su mail" required>
            </div>
             <div class="g-recaptcha"  data-sitekey="<?=$recaptcha_clave?>"  ></div>
            </div>
              <button type="submit" class="btn btn-block" name="enviar" id="send">enviar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contacto" class="container">
  <h2 class="text-center">Contactanos</h2>
  <p class="text-center"><em>ESTAMOS ENCANTADOS DE ATENDERTE!</em></p>
  <a href="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?">ó envianos un wassap(click aqui) y te atenderemos enseguida</a>
  <div class="row">
    <div class="col-md-4">
      <p>Envianos tus pedidos ó reservas </p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Av de la Reina Victoria, Madrid</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefono: 915 34 50 20</p>
    </div>
    <div class="col-md-8">
     <form action="https://api.whatsapp.com/send?phone=34640222184&text=hola,%20necesito%20mesa%20puedes atenderme?" role="form" method="post" >
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="fono" name="fono" placeholder="Mobil Phone/Telefono*">
        </div>
        <div class="col-sm-12 form-group">
		 <select  name="queda" class="form-control">
			<option value="cena">Cena de Empresa</option>
			<option value="quedada">Quedada/Sala Privada</option>
			<option value="mesa">Reservar Mesa</option>
			<option value="imprevisto">Quedada Imprevista</option>
		</select>
	</div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="num" name="num" placeholder="Cuantos son?/How Many People*" type="num" required>
        </div>
		<div class="col-sm-12 form-group">
          <input class="form-control" id="dia" name="dia" placeholder="Que dia?/Date*" type="dia" required>
        </div>
		<div class="col-sm-12 form-group">
          <input class="form-control" id="hora" name="hora" placeholder="A que hora?/Hour*" type="hora" required>
        </div>
         <div class="g-recaptcha"  data-sitekey="<?=$recaptcha_clave?>"  ></div>
        <button class="btn2 pull-right" type="submit" name="info">Enviar</button>
       
      </div>
     </form>
    </div>
  </div>
  <br>

</div>
<div id="empa"></div>
<!-- Image of location/map -->
<img src="ubicac.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#lafelicidad" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>

<script>
var precio;var nombre;
$(document).ready(function(){
  $(".cerrarMenu").click(function () {
			$('.navbar-toggle').click();
	});
  // Initialize Tooltip
 $('[data-toggle="tooltip"]').tooltip(); 
 $("#myCarousel1").carousel('pause');
   /// $("#empa").load("envio.php",{nombre,precio}); 
 $(document).on("click",".btn",function(){
            
        if (typeof $(this).data("description") !== "undefined" && typeof $(this).data("precio") !== "undefined" ) {
               nombre = $(this).data("description");
               precio = $(this).data("precio");
         }
        document.getElementById("nombre-comida").value=nombre;
	document.getElementById("precio-comida").value=precio;

	});

  /// document.getElementById("feli").addEventListener("submit",function(){
     //    var confirmar = <?php echo $valid; ?>;
     //    if(confirmar){
   ///          alert("RECIBIDO");
 //
  //       }else{
//	 alert("ERROR");
 //        }
////});
  //  var confirmar = <?php $valid ?>;
  //  function validate(){
       //      if (confirmar) {
       //          return true;
     //        }
   ///          return false
///	} 

  $(".navbar a, footer a[href='#lafelicidad']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

function menudisplay(a,b,c,d,e,f,g,h,t,p) {
  document.getElementById("pr1").innerHTML = a;
  document.getElementById("pr2").innerHTML = b;
  document.getElementById("pr3").innerHTML = c;
 document.getElementById("pr4").innerHTML = d;
document.getElementById("se1").innerHTML = e;
document.getElementById("se2").innerHTML = f;
document.getElementById("se3").innerHTML = g;
document.getElementById("se4").innerHTML = h;
document.getElementById("tmenu").innerHTML = t;
document.getElementById("pmenu").innerHTML = p;
  
}
</script>

</body>
</html>

