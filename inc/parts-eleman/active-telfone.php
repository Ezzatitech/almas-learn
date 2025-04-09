<?php
                $current_user = wp_get_current_user();
                if ( wc_customer_bought_product( $current_user->user_login, $current_user->ID, get_the_id() ) ) {
                    include 'phone-text-shop.php';
                   
            } else {
                echo'
                <div class="aw_teacher_phone_number">

                <span>شماره تلفن فروشنده:</span>
                <div class="aw_teacher_hide_phone">

                <i class="fas fa-phone"></i>
                <small>●●●●●●●●●
                <b>۰۹</b>
                </small>(پس از خرید محصول نمایش داده می شود.)

                </div>

            </div>';
            } ?>