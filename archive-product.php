<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
?>





































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
    <div class="col-xl-9">
    


<div class="bg-wit-theam" style="padding: 0 15px;
    padding-top: 0px;
padding-top: 15px;">


   <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
		
		}
	}


	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	
}



 
?>
</div>
    <div class="row">
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4">
                        <div class="bg-mahsoolat">
                            <a href="<?php the_permalink(); ?>" >
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?> </h3>
                            <?php the_excerpt(); ?>
                            <div class="bg-ax">
                                <div class="row">
                                    <div class="col-2"><span style="display: flex;"><i class="fas fa-users" style="margin-top: 7px; color: <?php the_field('coloryugtreo', 'option'); ?>;margin-left: 5px;"></i><span><?php global $product;

$units_sold = get_post_meta( $product->id, 'total_sales', true );

echo ''. sprintf( __( '%s', 'woocommerce' ), $units_sold ).''; ?></span> </span> </div>
                                   <div class="col-10"><span> <?php woocommerce_template_loop_price() ?></span></div>
                                </div>
                            </div>
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
    <?php wc_get_template( 'sidebar-cat-tag-product.php' ); ?>
    </div>

</div>

<?php get_footer( 'shop' ); ?>