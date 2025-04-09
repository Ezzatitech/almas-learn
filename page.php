<?php get_header() ?>

<div class="bg-masir-rahnama">
            <div class="container">
            <div class="row">
            <h1 style="font-size: 26px;"><?php single_post_title(); ?></h1>
            <?php
        if (function_exists( 'yoast_breadcrumb' )) {
            yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
        }
        ?>
            </div>
            </div>
                
    </div>

<div class="container">
    <div class="row">
    <?php the_content(); ?>
    </div>
</div>
<a class="scrool-to-top "><i class="fas fa-chevron-up"></i></a>

<?php get_footer() ?>