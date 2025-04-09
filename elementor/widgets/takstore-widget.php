<?php
class Elementor_takstore_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'new-widget';
	}

	public function get_title() {
		return 'ویجت اختصاصی قالب تک استور';
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
			'newtext',
			[
				'label' => 'عنوان را وارد کنید',
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'placeholder' => 'عنوان ویجت',
			]
		);

		$this->add_control(
			'show_elements',
			[
				'label' => __( 'Show Elements', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => [
					'title'  => __( 'Title', 'plugin-domain' ),
					'description' => __( 'Description', 'plugin-domain' ),
					'button' => __( 'Button', 'plugin-domain' ),
				],
				'default' => [ 'title', 'description' ],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'style',
			[
				'label' => __( 'استایل', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Title Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'website_link',
			[
				'label' => __( 'Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'label' => __( 'Text Shadow', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .text',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$this->add_inline_editing_attributes( 'newtext', 'advanced' );
		?>

		<div <?php echo $this->get_render_attribute_string( 'newtext' ); ?> ><?php echo $settings['newtext']; ?></div>

		<?php

		/*echo "<div class='text ".  $settings['entrance_animation'] .' '. $settings['hover_animation'] ."' > ".$settings['title'] . "</div>";
		echo "<div> ".$settings['price'] . "</div>";
		echo '<h2 class="title" style="color: ' . $settings['title_color'] . '"> test </h2>';
		echo '<img src="' . $settings['image']['url'] . '">';
		echo wp_get_attachment_image( $settings['image']['id'], 'thumbnail' );*/


	}

	protected function _content_template() {}

}
