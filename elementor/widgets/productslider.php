<?php
class Elementor_slider_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'productslider';
	}

	public function get_title() {
		return 'اسلایدر محصولات قالب تک استور';
	}

	public function get_icon() {
		return 'fas fa-calendar-plus';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'text',
			[
				'label' => 'عنوان را وارد کنید',
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => 'عنوان را وارد کنید',
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => 'عنوان این اسلایدر',
			]
		);

		$this->add_control(
			'slug',
			[
				'label' => 'نامک دسته بندی وارد کنید',
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => 'mobile',
			]
		);

		$this->add_control(
			'order',
			[
				'label' => 'مرتب سازی بر اساس',
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					''  => 'جدیدترین',
					'comment_count'  => 'محبوب ترین',
					'rand'  => 'تصادفی'
				],
			]
		);




		$this->end_controls_section();


	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<div class="product-slider">
			<span class="product-slider-title"><?php echo $settings['title']; ?></span>

			<div class="product-slider-box owl-carousel owl-theme">
				<?php
				$cat_slug = $settings['slug'];
				$cat_order = $settings['order'];
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 8,
					'product_cat' => $cat_slug,
					'orderby' => $cat_order
				);
				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="item">

					<div class="product-item">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('home-images'); ?>
						</a>

						<h3 class="product-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<div class="product-info">
							<span class="product-price"><?php global $product; echo $product->get_price_html(); ?></span>
							<a class="add-to-cart" href="<?php global $product; echo $product->add_to_cart_url(); ?>">افزودن به سبد خرید</a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php _e( 'محصولی وجود ندارد!' ); ?></p>
			<?php endif; ?>
			</div><!---Product Slider-->
		</div>

		<?php

	}

	protected function _content_template() {}

}
