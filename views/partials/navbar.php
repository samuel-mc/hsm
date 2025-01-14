<?php 
    $title = isset($title) ? $title : 'Tanko';
    $isPosAbs = isset($isPosAbs) ? $isPosAbs : false;
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

<header class="d-none d-lg-block w-100 py-3 px-4 <?php echo $isPosAbs ? 'position-absolute' : 'bg--black' ;?>" style="z-index: 10">
    <div class="mw--1440 d-flex justify-content-between align-items-center poppins-regular">
        <div>
            <ul class="d-flex list-unstyled m-0">
                <li class="mx-3">
                    <a href="<?php echo __ROOT__; ?>/" class="a--white">Home</a>
                </li>
                <li class="mx-3">
                    <a href="<?php echo __ROOT__ ; ?>/menu" class="a--white">Menú</a>
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
            <ul class="d-flex list-unstyled m-0">
                <li class="mx-3">
                    <a href="<?php echo __ROOT__ ; ?>/galeria" class="a--white">Galería</a>
                </li>
                <li class="mx-3">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="a--white">Contacto</a>
                </li>
            </ul>
        </div>

    </div>
</header>


<!-- Version mobile -->
<nav class="d-lg-none navbar navbar-expand-lg navbar-dark bg--lightBlack" id="mobileMenu">
  <a class="navbar-brand" href="<?php echo __ROOT__; ?>/">
    <img src="<?php echo __ROOT__; ?>/public/img/logo.png" width="116.65" height="35.62">
  </a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="open-icon">
        <i class="fa-solid fa-bars"></i>
    </span>
    <span class="close-icon">
        <i class="fa-solid fa-xmark"></i>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo __ROOT__; ?>/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo __ROOT__; ?>/menu">Menú</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Grupo Orraca</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo __ROOT__; ?>/galeria">Galería</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo __ROOT__; ?>/contacto">Contacto</a>
        </li>
    </ul>
  </div>
</nav>