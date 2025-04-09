<?php
    /*
    -------------------------------------------
    ----------------- rgister-menus -----------
    -------------------------------------------
    */
    
    function ato_setop() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'min_menu'=>'منوی اصلی',
		'min_menu_mobile'=>'منوی موبایل',
        'menu_footer'=>'منوی فوتر',
    ));
    }

    add_action("after_setup_theme","ato_setop");  
    echo add_theme_support( 'post-thumbnails' );
    function add_css_js_font(){
            wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.rtl.min.css',[],'1.0.0');
            wp_enqueue_style('fontwason',get_template_directory_uri().'/assets/webfonts/all.css',[],'1.0.0');
            wp_enqueue_style('fontalmaslearn',get_template_directory_uri().'/assets/css/fontiran.css',[],'1.0.0');
            wp_enqueue_style('styleato',get_template_directory_uri().'/assets/css/frooshfile.css',[],'1.0.0');
            wp_enqueue_style('themeadmin',get_template_directory_uri().'/assets/css/theme-admin.css',[],'1.0.0');
			wp_enqueue_script('script1', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', array('jquery'), false, false );
            wp_enqueue_script('script2', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, false );
			wp_enqueue_script('script3', get_template_directory_uri().'/assets/js/all.js', array('jquery'), false, false );
			wp_enqueue_script('script4', get_template_directory_uri().'/assets/js/forooshfile.js', array('jquery'), false, false );
    }

    add_action("wp_enqueue_scripts", "add_css_js_font");


    /*
    -------------------------------------------
    ----------------- rgister-widget -----------
    -------------------------------------------
    */


    function register_widget_almas_learn(){
        register_sidebar(array(

            'name' => 'سایدبار کنار وبلاگ',
            'id' => 'sidebarblog',
            'before_widget' => '<div class="bg-box-blog-post-single">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
            
            

        ));
        register_sidebar(array(

            'name' => 'سایدبار کنار آرشیو محصولات',
            'id' => 'sidebararshivepro',
            'before_widget' => '<div class="bg-wit-theam-sidebar">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
            
            

        ));
        register_sidebar(array(

            'name' => 'سایدبار کنار محصولات',
            'id' => 'sidebarproductlearn',
            'before_widget' => '<div class="bg-wit-theam-sidebar">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
            
            

        ));

        register_sidebar(array(

            'name' => 'فوتر',
            'id' => 'widgetfooter',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
            
            

        ));
    }

    add_action('widgets_init' , 'register_widget_almas_learn');


    //img
    if (function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
    }


    //safebandi
    function mrcode_numeric_posts_nav() {
 
        if( is_singular() )
            return;
     
        global $wp_query;
     
        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;
     
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );
     
        /**	Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;
     
        /**	Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }
     
        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
     
        echo '<div class="navigation"><ul>' . "\n";
     
        /**	Previous Post Link */
        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
     
        /**	Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';
     
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
     
            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }
     
        /**	Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }
     
        /**	Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";
     
            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }
     
        /**	Next Post Link */
        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link() );
     
        echo '</ul></div>' . "\n";
     
    }




    //elementor
    function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

        $elementor_theme_manager->register_all_core_location();

    }
    add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );



    // woocommerce
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    }



    //add-cart-woocommerce




    //theam-setings
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'تنظیمات قالب الماس لرن',
            'menu_title'	=> 'تنظیمات قالب',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        
    }



   


        //theme-admin
        function farishtheme_custom_external_css() {
            wp_enqueue_style('themeadmin',get_template_directory_uri().'/assets/css/theme-admin.css',[],'1.0.0');
            }
            add_action('admin_head', 'farishtheme_custom_external_css');




            /*
            ===========================
                    product_widget
            ===========================
            */
            include('admin/widgets/wid_product.php');


            include('elementor/almas-elementor.php');



             /*
            ===========================
                    link_ot
            ===========================
            */
            add_action('wp_logout','replywp_auto_redirect_after_logout');
 
                        function replywp_auto_redirect_after_logout(){
                        
                        wp_redirect( home_url() );
                        
                        exit();
                }

                


            

                /*
            ===========================
                    plugin_inistal
            ===========================
            */

                require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
                require_once get_template_directory() . '/inc/almas-plugin.php';






require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
require_once get_theme_file_path() .'/admin/option/option-almas-learn.php';
require_once get_theme_file_path() .'/admin/meta-box/meta-box-post.php';
require_once get_theme_file_path() .'/admin/meta-box/meta-box-product.php';





