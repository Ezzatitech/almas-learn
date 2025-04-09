<div class="modat-zaman-dore">
        <i class="fas fa-user-graduate"></i>
            تعداد خرید :
            <span>
        <?php global $product;

	$units_sold = get_post_meta( $product->id, 'total_sales', true );

	echo ''. sprintf( __( '%s', 'woocommerce' ), $units_sold ).''; ?>
    </span>
        </div>