<?php get_header(); ?>



<div class="home-hero">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <h3>Formacion</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="col-md-6">
                <h3>Investigación</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </div>
</div>

<div class="home-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php dynamic_sidebar( 'home-galeria' ); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar( 'home-agenda' ); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar( 'home-noticias' ); ?>
            </div>
            <div class="col-md-3 text-center">
                <img src="http://capacitacion.hcdn.gob.ar/wp-content/uploads/2015/07/con-ver-saciones.jpg" alt="">
                <hr>
                <img src="http://capacitacion.hcdn.gob.ar/wp-content/uploads/2015/07/democracia-late.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<?php get_footer();