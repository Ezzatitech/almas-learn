<?php $options = get_option( 'my_option_almaslearn' ); ?>
<footer>
        <div class="min-footer">
            <div class="container">

                        <?php wp_nav_menu(array(
                                'theme_location'=>'menu_footer',
                                'depth'=>'1',
                        )); ?>
                        

                <?php if ( is_active_sidebar( 'widgetfooter' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'widgetfooter' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
                <div class="row bg-back-a">
                    <div class="col-md-6">
                        <p><?php echo $options['opt-text-copy-footer'] ?></p>
                    </div>
                    <div class="col-md-6">
            
                    <?php 

                        if( $options['opt-button-footer-code'] =='enabled' ) {
                          
                            echo'
                            <p class="classppe">
                        طراح و برنامه نویس <span class="p-span-color">محمدرضا عزتی</span>
                    </p> 
                            '; 
                            
                        } 

                 ?>
                  
                        


                    </div>
                </div>
            </div>
        </div>


    </footer>