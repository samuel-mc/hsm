<?php $title = isset($title) ? $title : 'Tanko';
?>

<div class="bg--black text-white py-2 px-3 d-none d-lg-block" id="topItem">
    <div class="mw--1440 d-flex flex-wrap">
        <div class="mr-3">
            <i class="fa-solid fa-location-dot me-2"></i>
            <a class="a--white" href="https://www.google.com.mx/maps/place/Restaurante+Hacienda+San+Martin/@19.281293,-99.4537525,17z/data=!4m14!1m7!3m6!1s0x85cdf679094323cd:0xe736bb6c4c6410d!2sRestaurante+Hacienda+San+Martin!8m2!3d19.281288!4d-99.4511776!16s%2Fg%2F11b5pjqhvg!3m5!1s0x85cdf679094323cd:0xe736bb6c4c6410d!8m2!3d19.281288!4d-99.4511776!16s%2Fg%2F11b5pjqhvg?entry=ttu&g_ep=EgoyMDI1MDEwMi4wIKXMDSoASAFQAw%3D%3D">
                Mexico - Toluca Km 44.5-Lote 11, Fracc. Hacienda San Martin, 52740 Ocoyoacac, Méx.
            </a>
        </div>
        <div class="mr-3">
            <i class="fa-solid fa-phone me-2"></i>
            <a class="a--white" href="tel:728 101 2085">728 101 2085</a>
        </div>
        <div class="mr-3">
            <i class="fa-solid fa-clock me-2"></i>
            <span>8:00 am - 7:00 pm</span>
        </div>
    </div>
</div>

<header class="d-none d-lg-block position-absolute w-100 py-3 px-4" style="z-index: 10">
    <div class="mw--1440 d-flex justify-content-between align-items-center poppins-regular">
        <div>
            <ul class="d-flex list-unstyled">
                <li class="mx-3">
                    <a href="" class="a--white">Home</a>
                </li>
                <li class="mx-3">
                    <a href="" class="a--white">Menú</a>
                </li>
                <li class="mx-3">
                    <a href="" class="a--white">Grupo Orraca</a>
                </li>
            </ul>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo de la empresa" width="116.65" height="35.62">
        </div>
        <div>
            <ul class="d-flex list-unstyled">
                <li class="mx-3">
                    <a href="" class="a--white">Galería</a>
                </li>
                <li class="mx-3">
                    <a href="" class="a--white">Contacto</a>
                </li>
            </ul>
        </div>

    </div>
</header>

<header class="bg--lightBlack p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between align-items-center w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" width="116.65" height="35.62">
        <button class="btn btn--mustard btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed z-10 bg-white w-100 py-4" id="mobileMenu" style="top: 0;">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-20">
            <button class="btn btn-danger btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="my-2"><a class="<?php echo $title == 'Home' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Servicios' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Servicios</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Seguros personales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>servicios">Seguros personales</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Seguros empresariales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Seguros empresariales</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Fianzas' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Fianzas</a></li>
                    <li class="my-2"><a class="<?php echo $title == '¿Quiénes somos?' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">¿Quiénes somos?</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-dark btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                Contacto
            </a>
        </div>
    </div>
</nav>