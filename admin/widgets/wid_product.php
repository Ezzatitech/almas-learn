<?php
 
class product_new_almas_Widget extends WP_Widget {
 
    public function __construct() {
        parent::__construct(
            'product_n_widget', // Base ID
            'محصولات پر فروش', // Name
        );
    }
 
    public function widget( $args, $instance ) {
        
        $arms = array(
            'post_type' => 'product',
            'posts_per_page' => $instance['number_new_product'],
            'offset' => 0,
            'order' => 'DESC',
            'post_status' => 'publish',
            'meta_key' => 'total_sales',
            'orderby' => 'meta_value_num',

        );
        $the_query = new WP_Query( $arms ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      
          <ul class="product_list_widget"><a href="<?php the_permalink(); ?>">
<li>

		<div class="media">
        <?php the_post_thumbnail(); ?>

		
		<div class="product-title"><?php the_title(); ?></div>
	
	</div>
	
</li>

</a></ul>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?><?php
    }
 
    public function form( $instance ) {
        $number_new_product = ! empty( $instance['number_new_product'] ) ? $instance['number_new_product'] : esc_html__( '5', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_new_product' ) ); ?>"><?php echo esc_html__( 'تعداد نمایش:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_new_product' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_new_product' ) ); ?>" type="number" value="<?php echo esc_attr( $number_new_product ); ?>">
        </p>
        
        <?php 
    }
 
    public function update( $new_instance, $old_instance ) {
        $instance = array();
 
        $instance['number_new_product'] = ( !empty( $new_instance['number_new_product'] ) ) ? strip_tags( $new_instance['number_new_product'] ) : '';
    
        return $instance;
    }
}
 
?>

<?php
add_action( 'widgets_init', 'wpdocs_register_widgets' );
 
function wpdocs_register_widgets() {
    register_widget( 'product_new_almas_Widget' );
}
?>






<?php 
class title_almas_Widget extends WP_Widget {
 
 public function __construct() {
     parent::__construct(
         'widget_n_widget', // Base ID
         'عنوان اختصاصی', // Name
     );
 }

 public function widget( $args, $instance ) {
     ?>
     <div class="title_almas">
     
     <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#000" d="M61,-19.4C67.3,-0.3,52.7,26,33.1,38.5C13.6,51,-10.8,49.8,-23.1,39.1C-35.4,28.5,-35.6,8.4,-29.7,-10C-23.8,-28.4,-11.9,-45.3,7.7,-47.8C27.3,-50.3,54.7,-38.5,61,-19.4Z" transform="translate(100 100)" />
</svg>
<h5 class="h5_title_widget"><?php echo $instance['title']; ?></h5>
     </div>
     
     <?php
 }

 public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'عنوان:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php 

 }

 public function update( $new_instance, $old_instance ) {
    $instance = array();
 
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
 }
}

?>

<?php
add_action( 'widgets_init', 'wpdocs_register_widgets_title' );

function wpdocs_register_widgets_title() {
 register_widget( 'title_almas_Widget' );
}

?>



        <?php
 
class post_new_almas_Widget extends WP_Widget {
 
    public function __construct() {
        parent::__construct(
            'post_new_widget', // Base ID
            'مطالب جدیداختصاصی', // Name
        );
    }
 
    public function widget( $args, $instance ) {
        
        $arms = array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_new_post'] ,
            'post_status' => 'publish',

        );
        $the_query = new WP_Query( $arms ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      
          <ul class="product_list_widget"><a href="<?php the_permalink(); ?>">
<li>

		<div class="media">
        <?php the_post_thumbnail(); ?>

		
		<div class="product-title"><?php the_title(); ?></div>
	
	</div>
	
</li>

</a></ul>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?><?php
    }
 
    public function form( $instance ) {
        $number_new_post = ! empty( $instance['number_new_post'] ) ? $instance['number_new_post'] : esc_html__( '6', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_new_product' ) ); ?>"><?php echo esc_html__( 'تعداد نمایش:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_new_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_new_post' ) ); ?>" type="number" value="<?php echo esc_attr( $number_new_post ); ?>">
        </p>
        
        <?php 
        
        
    }
 
    public function update( $new_instance, $old_instance ) {
        $instance = array();
 
        $instance['number_new_post'] = ( !empty( $new_instance['number_new_post'] ) ) ? strip_tags( $new_instance['number_new_post'] ) : '';
    
        return $instance;
    }
}
 
?>

<?php
add_action( 'widgets_init', 'wpdocs_almas_widgets_posts' );
 
function wpdocs_almas_widgets_posts() {
    register_widget( 'post_new_almas_Widget' );
}
?>
