<div class="bg-wit-woo-b">
                <div class="row" style="display: flex;align-items: center;">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-1">
                        <i class="fas fa-user-graduate"></i>
                        </div>
                    <div class="col-11">
                    <p style="margin-top: 8px;"> ضمانت بازگشت وجه برای یک هفته برای این محصول  </p>
                    </div>
                    
                    </div>
               
                </div>
                <div class="col-md-3">
                <?php
                $current_user = wp_get_current_user();
                if ( wc_customer_bought_product( $current_user->user_login, $current_user->ID, get_the_id() ) ) {
                    echo '<a href="#" class="btn-plus-class-bg-box">درخواست وجه</a>';
            } else {
                echo '<a href="#" class="btn-plus-class-bg-box no-active-pro">درخواست وجه</a>';
            } ?>
                
                </div>
                </div>
            </div>