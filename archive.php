<?php
get_header();

$options = get_option( 'my_option_almaslearn' );  ?>





<div class="bg-masir-rahnama">
            <div class="container">
            <div class="row">
            <h1 style="font-size: 26px;"><?php single_cat_title(); ?></h1>
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

    <!--sidebar-rtl-->
    <?php
                if( $options['opt-button-post-blog-ar-sidebar'] =='disabled' ) {
                    
                     get_sidebar();
          } ?>

    <div class="col-xl-9">
    

   <div class="row">
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class=" <?php if( $options['opt-select-sotoon-blog'] =='option-2' ) { echo'col-md-4'; } ?> <?php if( $options['opt-select-sotoon-blog'] =='option-3' ) { echo'col-md-3'; } ?> <?php if( $options['opt-select-sotoon-blog'] =='option-1' ) { echo'col-md-6'; } ?>">
         
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

<?php the_archive_description( '<div class="bg-box-blog-post-single" style="margin-top:32px;">', '</div>' ); ?>
        
        

    </div>
    
    <!--sidebar-lrt-->
    <?php
                if( $options['opt-button-post-blog-ar-sidebar'] =='enabled' ) {
                    
                     get_sidebar();
          } ?>

    </div>

</div>



<?php get_footer(); ?>