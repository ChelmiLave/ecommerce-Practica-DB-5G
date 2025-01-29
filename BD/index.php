<?php 
	include("cn.php");
	$clientes="SELECT * FROM clientes";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ecommerce_UPEN">
    <meta name="description" content="">
	<title>Clientes</title>
	<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Registro.css" media="screen">
<link rel="stylesheet" href="estilos.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "kamila",
		"logo": "images/32e4a01147c3ae2abeedb3b5758f4734ba411126bc5ee88cdbc8a44779511a177c548a7156b72957147f2ebe4abc1c5ade2cedab89d7f446aaaa34_1280.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Registro">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
 <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-header" id="sec-dd46"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1280" data-image-height="853">
          <img src="images/32e4a01147c3ae2abeedb3b5758f4734ba411126bc5ee88cdbc8a44779511a177c548a7156b72957147f2ebe4abc1c5ade2cedab89d7f446aaaa34_1280.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <h2 class="u-align-center u-text u-text-custom-color-1 u-text-1">
          <span class="u-text-body-alt-color" style="font-weight: 700;"> ecommerce_</span> UPEN
        </h2>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="inicio.html" style="padding: 15px 5px;">inicio</a>
</li><li class="u-nav-item"><a class="u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="Productos.html" style="padding: 15px 5px;">Productos</a>
</li><li class="u-nav-item"><a class="u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="Nosotros.html" style="padding: 15px 5px;">Nosotros</a>
</li><li class="u-nav-item"><a class="u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="http://localhost/Proyecto Base de Datos/BD/registro.php" style="padding: 15px 5px;">Registrate</a>
</li><li class="u-nav-item"><a class="u-border-4 u-border-active-palette-1-base u-border-hover-grey-30 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" style="padding: 15px 5px;">Más</a><div class="u-nav-popup"><ul class="u-border-1 u-border-grey-25 u-h-spacing-4 u-nav u-unstyled u-v-spacing-6 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Soporte.html">Soporte</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/Proyecto Base de Datos/BD/index.php">Usuario</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="inicio.html">inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Productos.html">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Nosotros.html">Nosotros</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/Proyecto Base de Datos/BD/registro.php">Registrate</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Más</a><div class="u-nav-popup"><ul class="u-border-1 u-border-grey-25 u-h-spacing-4 u-nav u-unstyled u-v-spacing-6 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Soporte.html">Soporte</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/Proyecto Base de Datos/BD/index.php">Usuario</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><!--shopping_cart-->
        <a class="u-shopping-cart u-shopping-cart-1" href="#"><span class="u-icon u-shopping-cart-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7fec"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-7fec"><path d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"></path></svg>
        <span class="u-icon-circle u-palette-1-base u-shopping-cart-count" style="font-size: 0.75rem;"><!--shopping_cart_count-->2<!--/shopping_cart_count--></span>
    </span>
        </a><!--/shopping_cart-->
      </div></header>
	<div class="container-table">
		<div class="table__title">Datos de usuario</div>
		<div class="table__header">Nombre</div>
		<div class="table__header">Apellidos</div>
		<div class="table__header">Direccion</div>
		<div class="table__header">Telefono</div>
		<?php $resultado=mysqli_query($conexion, $clientes);
		while ($row=mysqli_fetch_assoc($resultado)) { ?>
			<div class="table__item"><?php echo $row["nombre"];?></div>
			<div class="table__item"><?php echo $row["apellido"];?></div>
			<div class="table__item"><?php echo $row["direccion"];?></div>
			<div class="table__item"><?php echo $row["telefono"];?></div>
		<?php } mysqli_free_result($resultado); ?>
	</div>

</body>
</html>