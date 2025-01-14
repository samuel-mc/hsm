<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<?php
$pathImg = __ROOT__ . '/public/img/home/';
?>

<main>
    <!-- Seccion menu -->
    <?php include 'components/section_menu.php'; ?>

    <!-- Seccion nuestra ubicacion -->
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
</script>
<?php include 'partials/footer.php'; ?>