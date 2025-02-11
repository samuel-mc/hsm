<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<?php
$pathImg = __ROOT__ . '/public/img/home/';
?>

<main>

    <!-- El hero -->
    <section class="position-relative">
        <img src="<?php echo $pathImg . '/hero.png' ?>" alt="fondo del hero" class="w-100">
        <div class="position-absolute w-100 h-100 align-content-center text-center p-4" style="top: 0;">
            <img src="<?php echo __ROOT__ . '/public/img/logo.png'; ?>" alt="logo de la empresa" class="w-100 mw--520">
        </div>
    </section>

    <!-- Prueba la diferencia -->
    <section class="py-5 px-4">
        <div class="mw--920 mx-auto py-5">
            <h2 class="text--mustard pfd-regular text-center text--xl mb-5">Prueba la <span class="font-italic">diferencia</span></h2>
            <p class="poppins-light text-center text-white text--sm">
                En Hacienda San Martín, te invitamos a disfrutar de la auténtica experiencia mexicana. Rodeado de historia y encanto colonial, podrás saborear platos tradicionales con un toque moderno, en un ambiente acogedor y lleno de calidez. ¡Ven y vive una auténtica experiencia gastronómica en el corazón de México!
            </p>
        </div>
    </section>

    <!-- Acerca de nosotros -->
    <section class="grid--2cols mw--1440">
        <div class="bg--black px-4 py-5 text-center align-content-center">
            <h3 class="text-white poppins-regultar text--sm text-uppercase">Acerca de nosotros</h3>
            <h2 class="text--mustard pfd-regular text--xl">Nuestro <span class="font-italic">concepto</span></h2>
            <p class="text--sm text-white poppins-extralight">
                Nuestro menú, representa lo mejor que nuestros mercados locales tienen para ofrecer. Nuestra pasión por obtener ingredientes frescos, combinada con sabores tradicionales y la reinvención de recetas familiares en una cocina excepcional, es nuestra misión y mayor alegría.
            </p>
        </div>
        <div>
            <img src="<?php echo $pathImg . '/nosotros.png'; ?>" alt="restaurante" class="w-100">
        </div>
    </section>

    <!-- Nuestro menu -->
    <?php include 'components/section_menu.php'; ?>

    <!-- Nuestras instalaciones -->
    <?php include 'components/section_instalaciones.php'; ?>

    <!-- Nuestros servicios -->
    <section class="mw--1440">
        <header class="py-4 px-4 text-center">
            <h3 class="text-white poppins-regultar text--sm text-uppercase">Banquetes</h3>
            <h2 class="text--mustard pfd-regular text--xl">Nuestros <span class="font-italic">servicios</span></h2>
            <div id="verticalSeparator"></div>
            <p class="text--sm text-white poppins-extralight mw--640 mx-auto">
                Podrán disfrutar de una fiesta, reunión de trabajo o ceremonia en cualquiera de nuestros espacios cerrados o al aire libre. Contamos con desayunos, comidas, cenas, maridajes privados, sesiones de trabajo, brunch, coffeebreak, entre otros.
            </p>
        </header>
        <main class="grid--3cols" style="gap: 0;">
            <div class="servicio__itm">
                <img src="<?php echo $pathImg . '/serv1.png'; ?>" alt="servicios" class="w-100 h-100">
                <div class="position-absolute b-0 d-flex flex-column justify-content-end align-items-center p-4">
                    <h3 class="poppins-regular text-white text--md text-uppercase">Eventos Empresariales</h3>
                    <a href="#" class="a--white poppins-extralight">Consultar ahora</a>
                </div>
            </div>
            <div class="bg--black p-5 text-center align-content-center">
                <h3 class="text-white poppins-regultar text--sm text-uppercase">Horarios</h3>
                <h2 class="text--mustard pfd-regular text--xl">Estamos <span class="font-italic">abiertos</span></h2>
                <p class="text--sm text-white poppins-extralight mw--640 mx-auto">
                    Lunes a domingo 8:00 am – 7:00 pm
                </p>
            </div>
            <div class="servicio__itm">
                <img src="<?php echo $pathImg . '/serv2.png'; ?>" alt="servicios" class="w-100 h-100">
                <div class="position-absolute b-0 d-flex flex-column justify-content-end align-items-center p-4">
                    <h3 class="poppins-regular text-white text--md text-uppercase">Eventos Sociales</h3>
                    <a href="#" class="a--white poppins-extralight">Consultar ahora</a>
                </div>
            </div>

        </main>
    </section>

    <!-- Reviews -->
    <section class="py-5 px-4 mw--1440">
        <div class="mw--920 mx-auto">
            <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="reviewSplide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide text-center p-md-4">
                            <p class="text-white poppins-regular text--lg">“Todo en nuestra experiencia fue increíble, desde llegar hasta el valet, hasta las espectaculares vistas, la comida de primera, el servicio cinco estrellas”.</p>
                            <p class="text-white poppins-regular text--sm">Carlos Carmín, vía tripadvisor</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Gracias por crear ... -->
    <?php include 'components/section_ubicacion.php'; ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    const splide = new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        gap: '1rem',
        pagination: false,
    }).mount();

    const reviewSplide = new Splide('#reviewSplide', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        gap: '1rem',
    }).mount();
</script>
<?php include 'partials/footer.php'; ?>