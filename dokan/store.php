<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dokan
 * @package dokan - 2014 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$store_user   = dokan()->vendor->get( get_query_var( 'author' ) );
$store_info   = $store_user->get_shop_info();
$map_location = $store_user->get_location();

get_header( 'shop' );
?>


<div class="bg-masir-rahnama">
            <div class="container">
            <div class="row">
            <h1 style="font-size: 26px;"><?php the_author() ?></h1>
            <?php
        if (function_exists( 'yoast_breadcrumb' )) {
            yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
        }
        ?>
            </div>
            </div>
                
    </div>
    <div class="container">
	
	
    <?php do_action( 'woocommerce_before_main_content' ); ?>

    <div id="dokan-primary" class="dokan-single-store dokan-w12">
        <div id="dokan-content" class="store-page-wrap woocommerce" role="main">
        <div class="row">
            <?php dokan_get_template_part( 'store-header' ); ?>

            <?php do_action( 'dokan_store_profile_frame_after', $store_user->data, $store_info ); ?>

            <?php if ( have_posts() ) { ?>
                <?php while ( have_posts() ) : the_post(); ?>

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

                        <?php endwhile; ?>


                <?php dokan_content_nav( 'nav-below' ); ?>

            <?php } else { ?>

                <p class="dokan-info"><?php esc_html_e( 'No products were found of this vendor!', 'dokan-lite' ); ?></p>

            <?php } ?>
        </div>
        </div>

    </div><!-- .dokan-single-store -->

    <div class="dokan-clearfix"></div>

    <?php do_action( 'woocommerce_after_main_content' ); ?>
</div>

<?php get_footer( 'shop' ); ?>
