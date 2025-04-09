<div class="col-xl-3 dis-wit-btn">

           <aside class="ps-sidebar-edd">
           <div class="bg-wit-theam-sidebar">
           <?php 

                if( $options['opt-button-set-coin'] =='enabled' ) {
                    
                include 'parts-eleman/teadad-charid.php';
                }

            ?>
        
        <?php $options = get_option( 'my_option_almaslearn' ); ?>
                
            <div class="row geimat-coin">

            <?php woocommerce_template_loop_price() ?>
            </div>
          <div class="cart-btn">
            <?php
                $current_user_almas = wp_get_current_user();
                if ( wc_customer_bought_product( $current_user_almas->user_login, $current_user_almas->ID, get_the_id() ) ) {
                    ?><a  class="btn-class-user-pro"><?php echo $options['opt-text-btn-cart']; ?> </a>  <?php
            } else {
                woocommerce_template_loop_add_to_cart(); 
            } ?>

            </div>
            
            <?php 

                if( $options['opt-button-set-tab'] =='enabled' ) {
                    
                    echo'
                    <a href="#content-btn" class="style-btn-a">معرفی دوره</a>
                            <a href="#modaresdore" class="style-btn-a">مدرس</a>
                            <a href="#nazaratdore" class="style-btn-a">نظرات</a>
                    '; 
                    
                } 

            ?>
            
        </div>

        <div class="bg-wit-theam-sidebar">
            <div class="row">
                <?php
            if( $options['opt-button-set-phone'] =='enabled' ) {
                    
                include 'parts-eleman/active-telfone.php';
                } 

            ?>
            
            
            
            
            </div>

            <div class="row style-sp-time">
                <div class="col-6 ">
                    <span><i class="fas fa-calendar-plus"></i> انتشار: <?php the_date('y/m/d'); ?></span>
                </div>
                <div class="col-6 ">
                <span><i class="fas fa-calendar"></i> بروزرسانی: <?php the_modified_time('y/m/d');?></span>
              </div>
            </div>

            <div class="short-url-box">
                 <div class="short-url-title">
                     <i class="fas fa-link"></i>
                      <span>لینک کوتاه</span>
                  </div>
                 <input type="text" class="short-url-link" value="<?php echo get_bloginfo('url')."/?p=".$post->ID; ?>" id="myInput">
            </div>
        </div>

        <?php if ( is_active_sidebar( 'sidebarproductlearn' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebarproductlearn' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

           </aside>
        
        </div>