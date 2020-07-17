<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <!-- <nav id="myTopnav" class="topnav">
        <a href="#one" class="effect-underline">Inicio</a>
        <a href="#two" class="effect-underline">Sobre nosotros</a>
        <a href="#three" class="effect-underline">Nuestros servicios</a>
        <a href="#four" class="effect-underline popup-btn">Contacto</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </nav> -->
    <nav>
        <input type="checkbox" id="nav" class="hidden"/>
        <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
        <div class="nav-container">
            <ul>
                <li><a href="#one" class="effect-underline">Inicio</a></li>
                <li><a href="#two" class="effect-underline">Sobre nosotros</a></li>
                <li><a href="#three" class="effect-underline">Nuestros servicios</a></li>
                <li><a href="#four" class="effect-underline popup-btn">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="opacityBlack"></div>
    <section id="one">
        <?php first() ?>
    </section>
    <section id="two">Sobre nosotros</section>
    <section id="three"><?php services() ?></section>
    <?php contact() ?>
</body>
</html>