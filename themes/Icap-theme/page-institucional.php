<?php get_header(); ?>
<section id="page">
    <div class="container">
        
        <div id="content" class="site-content col-md-8" role="main">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat mollitia, dolorem molestias autem magnam eligendi quibusdam excepturi eos unde expedita vero, voluptates ab. Asperiores reprehenderit accusamus architecto totam iure. Adipisci dolores, illo quas cupiditate nihil at sit vero voluptatibus non enim eos quis optio, quam quos molestias. Reiciendis voluptatibus vitae quis repellat, eius saepe qui explicabo recusandae corrupti enim nesciunt dolorem, maxime beatae aliquam, quia sint incidunt molestias totam impedit ipsum eaque placeat voluptatem? Necessitatibus quidem tenetur error cupiditate! Nemo facere inventore, praesentium placeat quis, amet architecto, voluptatum cupiditate, laborum eligendi reprehenderit iure harum repellat totam obcaecati perspiciatis. Laboriosam, eos.
            </p>
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>' ); ?>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php zee_link_pages(); ?>
                </div>
            </article>
            
            <?php } ?>
        </div><!--/#content-->
        
        <?php get_sidebar(); ?>    
    </div>
    
</section><!--/#page-->

<?php get_footer();