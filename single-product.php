<?php get_header('shop');
 $metapro = get_post_meta( get_the_ID(), 'my_product_meta_box_almas', true ); 
?>

<?php $options = get_option( 'my_option_almaslearn' ); ?>

<div class="container woocommerce">
    <div class="row mrg-box-se">
    <div class="col-12">
        <div class="masir">
        <i class="fas fa-home"></i>
        <?php
        if (function_exists( 'yoast_breadcrumb' )) {
            yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
        }
        ?>
        </div>
    </div>
    <div class="col-xl-6 style-aline-center-box">
        <div class="row ">
            <div class="col-12 btn-a-id"> <?php global $product; echo $product->get_categories( ' ', ' ' . _n( ' ', '  ', $cat_count, 'woocommerce' ) . ' ', ' ' ) ?></div>
            <div class="col-12"><h1 class="heding-h1-single"><?php single_post_title(); ?></h1> </div>
            <div class="col-12 style-ex-p"> <?php the_excerpt(); ?></div>


            <?php

            if( $options['opt-button-set-moshavare'] =='enabled' )  {
                    // Do something. 
                include 'inc/parts-eleman/btn-active-moshavere.php';
                }  
            ?>
            
            
   

         <div class="col-3">
         <ul class="fl-dis">
            <li><a target="_blank" rel="nofollow" class="facebook_shares" href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a target="_blank" rel="nofollow" class="telegram_shares" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="fa fa-paper-plane"></i></a></li>
            <li><a target="_blank" rel="nofollow" class="twitter_shares" href="http://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a></li>
        </ul>
         </div>
         <div class="col-4">
             <div class="class-comments">
                 <span><i class="fas fa-comment"></i><?php comments_number( 'بدون دیدگاه', ' یک دیدگاه ', ' % دیدگاه ' );  ?></span>
         </div>
         </div>   
        </div>
        
   
   
    </div>
    <div class="col-xl-6 img-responsive-ok">
    <?php woocommerce_template_loop_product_thumbnail('') ?>
    <a href="" class="bg_video_almas"><i class="fas fa-play"></i></a>
    </div>

    </div>
    <div class="row">
    <?php
            if( $options['opt-button-set-sidebar'] =='enabled' ) {
                    
                include 'inc/sidebar-learn.php';
                }else{

                }  

            ?>
        <div class="col-xl-9 wit-col-x9">

        <?php
                if( $metapro['opt-button-set-product-vigegiha'] =='enabled' ) {
                    
                    include 'inc/parts-eleman/vigigei-tarh-two.php';
          } ?>

          <?php
                if( $metapro['opt-button-set-product-active-darsad'] =='enabled' ) {
                    
                    include 'inc/parts-eleman/darsadore.php';
          } ?>


        

            <div id="content-btn" class="bg-wit-theam " style="position: relative;">
            <?php the_content(); ?>

            <?php

                if( $options['opt-button-set-sidebar'] =='disabled' ) {
                       
                        echo'
                        <div class="study-mode">
                        <div class="study-mode-btn" tooltip="حالت مطالعه">
                         <i class="fas fa-expand-arrows-alt"></i>
                         <div class="study-mode-text">
                               حالت مطالعه
                            </div>
                        </div>
                    </div>
                        '; 
                        
                    }else{

                    }  

            ?>
            

            </div>
            <div id="modaresdore" class="bg-wit-theam modares-dore">
                <div class="titre_woocommece">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3 class="style-c-s-h3">فروشنده محصول</h3>
                <hr>
                <hr class="befo-op">
                </div>
                    <div class="author-blog">

            <div class="row align-center">
                <div class="col-1"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>
                <div class="col-11">
                    <h4><?php the_author() ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                    <?php the_author_meta('description'); ?>
                    </p>
                
                </div>
            </div>
            </div>
            </div>

            <?php
                if( $metapro['opt-button-set-product-active-return'] =='enabled' ) {
                    
                    include 'inc/parts-eleman/ability_to_return.php';
          } ?>
           
            
             
            <div class="bg-wit-theam">
            <div class="titre_woocommece">
                <i class="fas fa-mail-bulk"></i>
                <h3 class="style-c-s-h3">محصولات مرتبط</h3>
                <hr>
                <hr class="befo-op">
                </div>
            <div class="row">
            

                   

                    <?php $cats_array=array(0); $terms=wp_get_post_terms($product->id,'product_cat');

                        foreach($terms as $term){$children=get_term_children($term->term_id,'product_cat');

                        if(!sizeof($children)) $cats_array[]=$term->term_id;}

                        $args=apply_filters('woocommerce_related_products_args',

                        array('post_type'=>'product','ignore_sticky_posts'=>1,'no_found_rows'=>1,

                        'posts_per_page'=>7,'orderby'=>'rand',

                        'meta_query'=>array(array('key'=>'_stock_status','value'=>'instock')),

                        'tax_query'=>array(array('taxonomy'=>'product_cat','field'=>'id','terms'=>$cats_array),)));

                        $related_items=new WP_Query($args);

                        if($related_items->have_posts()):while($related_items->have_posts()):$related_items->the_post(); ?>

                        <div class="col-md-4">

                        <div class="bg-mahsoolat">
                            <a href="<?php the_permalink(); ?>" >
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?> </h3>
                            <?php the_excerpt(); ?>
                            <div class="bg-ax">
                                <div class="row">
                                    <div class="col-2"><span style="display: flex;"><i class="fas fa-users" style="margin-top: 7px; color: #000; margin-left: 5px;"></i><span><?php global $product;

                                $units_sold = get_post_meta( $product->id, 'total_sales', true );

                                echo ''. sprintf( __( '%s', 'woocommerce' ), $units_sold ).''; ?></span> </span> </div>
                                   <div class="col-10"><span> <?php woocommerce_template_loop_price() ?></span></div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

	<?php endwhile; endif; wp_reset_postdata(); ?>
</div>
            </div>



            <div id="nazaratdore" class="bg-wit-theam">
            <div class="titre_woocommece">
            <i class="fas fa-comment"></i>
                <h3 class="style-c-s-h3">نظرات</h3>
                <hr>
                <hr class="befo-op">
                </div>
                
            <?php comments_template(); ?>
            
            </div>
        </div>

        <!-- sidebar -->
        <?php
            if( $options['opt-button-set-sidebar'] =='disabled' ) {
        
                include 'inc/sidebar-learn.php';
                } 

            ?>
        
        
    </div>
</div>

<a class="scrool-to-top "><i class="fas fa-chevron-up"></i></a>





        <?php get_footer( 'shop' ) ?>