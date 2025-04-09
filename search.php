<?php
get_header();

$options = get_option( 'my_option_almaslearn' );  
?>

<div class="bg-masir-rahnama">
            <div class="container">
            <div class="row">
            <h2 style="font-size: 26px;">نتایج جستجو</h2>
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
    <div class="col-xl-9">
    

   <div class="row">
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="<?php if( $options['opt-select-sotoon-blog'] =='option-2' ) { echo'col-md-4'; } ?> <?php if( $options['opt-select-sotoon-blog'] =='option-3' ) { echo'col-md-3'; } ?> <?php if( $options['opt-select-sotoon-blog'] =='option-1' ) { echo'col-md-6'; } ?>">
                        <div class="bg-mahsoolat" style="padding-bottom: 5px; ">
                            <a href="<?php the_permalink(); ?>" >
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?> </h3>
                            <?php the_excerpt(); ?>
                            
                            </a>
                        </div>
                    </div>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <div class="navigition-shomare">
    <?php mrcode_numeric_posts_nav(); ?>
    </div>
    
    </div>

<a class="scrool-to-top "><i class="fas fa-chevron-up"></i></a>

            <?php
        if( the_archive_description() ){
            include('inc/template-parts/blog/archive_description.php');
            
        } ?>
        
        

    </div>
    <?php get_sidebar(); ?>
    </div>

</div>



<?php get_footer(); ?>