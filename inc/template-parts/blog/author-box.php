<div class="bg-box-blog-post-single">
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