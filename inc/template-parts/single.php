<?php $meta = get_post_meta( get_the_ID(), 'my_post_meta_box_almas', true ); ?>
<?php  $options = get_option( 'my_option_almaslearn' );  ?>
    <div class="bg-masir-rahnama">
            <div class="container">
            <div class="row">
            <p>وبلاگ</p>
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
        <!--sidebar-lrt-->
    <?php
                if( $options['opt-button-post-blog-sidebar'] =='disabled' ) {
                    
                     get_sidebar();
          } ?>

    <div class="col-xl-9">
        
        <div class="bg-box-blog-post-single">
            <h1><?php the_title(); ?></h1>
            <div class="list-text">
                <ul>
                    <li><i class="fas fa-folder"></i> <?php the_category(','); ?></li>
                    <li><i class="fas fa-user-alt"></i> <?php the_author(); ?></li>
                    <li><i class="fas fa-clock"></i> <?php the_date('y/m/d'); ?></li>
                    <li><i class="fas fa-eye"></i> <?php echo $meta ['opt-text-time-post']; ?></li>
                </ul>
            </div>
            
            <div class="img-res-blog">
            <?php the_post_thumbnail('full'); ?>
            </div>
            
            <div class="tosihat">
            <?php the_content(); ?>
            <div class="tag-blog">
                <p><span>برچسب ها : </span><?php the_tags(' , '); ?></p>
            </div>
            </div>
            
        </div>

        <!--box-download-->
    <?php
                if( $meta['opt-button-set-box-download'] =='enabled' ) {
                    
                    include 'blog/download-box-ridio.php';
          } ?>


        <!--author-->
        <?php
                if ( $options['opt-button-post-blog-user'] =='enabled' ) {
                    
                    include 'blog/author-box.php';
          } ?>

        
        <!--shere-box-->
        <?php
                if ($options['opt-button-post-blog-tel-ins'] =='enabled' )  {
                    
                    include 'blog/shere-post.php';
          } ?>
        
        <div class="baner-blog">
            <img src="../../assets/img/الماس لرن-banner.jpg" alt="">
        </div>

        <div class="bg-box-blog-post-single">
        <div class="titre_woocommece">
                <i class="fas fa-folder"></i>
                <h3 class="style-c-s-h3">مطالب مرتبط</h3>
                <hr>
                <hr class="befo-op">
                </div>
                <div class="row">
                <?php
        $post_id = get_the_ID();
        $cat_ids = array();
        $categories = get_the_category( $post_id );
        if(!empty($categories) && !is_wp_error($categories)):
            foreach ($categories as $category):
                array_push($cat_ids, $category->term_id);
            endforeach;
        endif;
        $current_post_type = get_post_type($post_id);
        $query_args = array(
            'category__in'   => $cat_ids,
            'post_type'      => $current_post_type,
            'post__not_in'    => array($post_id),
            'posts_per_page'  => '3',
        );
        $related_cats_post = new WP_Query( $query_args );
        if($related_cats_post->have_posts()):
            while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                <!--article start -->
                <div class="col-md-4">
                        <div class="bg-mahsoolat">
                            <a href="<?php the_permalink(); ?>" >
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?> </h3>
                            <?php the_excerpt(); ?>
                            
                            </a>
                        </div>
                    </div>
                <!--article end -->
            <?php endwhile; else : ?> 
                <p>متاسفانه، هیچ مطلب مرتبطی وجود ندارد.</p>
          <?php  wp_reset_postdata(); ?>
            
            <?php 
        endif;
        ?>
                
        </div>
        </div>
        
        <!--box-comment-->
        <?php
                if( $options['opt-button-post-blog-box-comment'] =='enabled' ) {
                    // Do something.
                    include 'blog/comment-box.php';
          } ?>

        
        <div class="bg-box-blog-post-single">
        <div class="comment-section">
            <?php comments_template(); ?>

        </div>

        </div>
        
    </div>
    <!--sidebar-lrt-->
    <?php
                if( $options['opt-button-post-blog-sidebar'] =='enabled' ) {
                    
                     get_sidebar();
          } ?>
    
    </div>
    </div>

