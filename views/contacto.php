<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<?php
$pathImg = __ROOT__ . '/public/img/home/';
?>

<main>
    <!-- Formulario de contacto -->
    <section class="mw--1440 grid--2cols">
        <div class="p-4 p-lg-5">
            <header>
                <h2 class="text--mustard pfd-regular text--xl mb-1">Ponte en <span class="font-italic">contacto</span></h2>
                <p class="poppins-extralight text--sm text--white">
                    Para ponerte en contacto con nosotros, rellene el siguiente formulario de contacto
                </p>
            </header>
            <main>
                <form action="">
                    <input type="text" class="contacto__input" placeholder="Email">
                    <input type="text" class="contacto__input" placeholder="Teléfono">
                    <input type="text" class="contacto__input" placeholder="Whatsapp">
                    <textarea name="" id="" cols="30" rows="10" class="contacto__input" placeholder="Mensaje"></textarea>
                    <div>
                        <button class="btn btn--mustard rounded-0 text-uppercase">Enviar</button>
                    </div>
                </form>
            </main>
        </div>
        <div class="contacto__form--right">
            <img src="<?php echo $pathImg . 'contacto.png'; ?>" alt="contacto" class="w-100 h-100">
            <div></div>
        </div>
    </section>

    <!-- Seccion nuestra ubicacion -->
    <?php include 'components/section_ubicacion.php'; ?>

</main>

<?php include 'partials/footer.php'; ?>