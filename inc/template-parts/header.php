        <?php 

         $options = get_option( 'my_option_almaslearn' );

        if( $options['opt-button-set-nafit'] =='enabled' ) {
            // Do something.
            include 'header/notification.php';
        }else{

        }
        ?>
       

<header>
        <div class="min-header" style="padding: <?php echo $options['opt-spinner-header-heit']; ?>px 0;">
        <div class="container-md">
            <div class="row min-aline">
                <div class="col-2 img" style="width: 13.667%;">
                <img class="custom-logo-almas" src="<?php echo $options['opt-upload-logo-header']; ?>" alt="">
                </div>
                <nav class="col-6 ullia" style="width: 63%;">
                <?php wp_nav_menu(array(
                       'theme_location'=>'min_menu',
                       'depth'=>'3',
                   )); ?>
                </nav>
                <div class="col-4" style="display: flex; justify-content: left; width: 22.667%;">
                <?php
                            if( $options['opt-button-set-header-btn-cart'] =='enabled' ) {
                            ?>
                    <div class="cart-btn btn-class-wil-bg">
                        <a href="#"><i class="fas fa-shopping-bag"></i></a>
                    </div>
                    <?php
                            }?>

                    <?php
                            if( $options['opt-button-set-header-btn-search'] =='enabled' )  {
                            ?>
                            <div class="searsh-btn btn-class-wil-bg">
                        <a ><i class="fas fa-search"></i></a>
                    </div>
                    <?php
                    }?>


                    <div class="menu-berger">
                        <!--menu-->
                        <button class="btn-mobile-pish">
                        <i class="fas fa-bars"></i>
                        </button>
                        <div class="modal-mobaile">
                            <h2>بیزینس پلاس</h2>
                            <?php wp_nav_menu(array(
                       'theme_location'=>'min_menu_mobile',
                       'depth'=>'3',
                   )); ?>
                        </div>
                    </div>


                    
                    <?php

                        if( $options['opt-button-set-header-btn'] =='enabled' )  {
                            ?>




                                <button class="btn-login">
                    <?php
                        if ( is_user_logged_in() ) {
                            ?> <a href="<?php echo $options['opt-text-header-btn-user-link']; ?>" class="user-profile"><?php echo $options['opt-text-header-btn-user-text']; ?></a>
                            <div class="bg-wite-user-login">
                            <ul>
                                <li>
                                                                    <a href="<?php echo $options['opt-text-header-btn-user-link']; ?>">
                                        <i class="fas fa-user"></i>
                                        <span>داشبورد کاربری</span>
                                    </a></li>
                                                       <li>             <a href="<?php echo $options['opt-text-header-btn-user-link']; ?>/orders">
                                        <i class="fas fa-shopping-bag"></i>
                                        <span>سفارش ها</span>
                                    </a></li>
                                    <li>
                                    <a href="<?php echo $options['opt-text-header-btn-user-link']; ?>/edit-account"><i class="fas fa-user-edit"></i>
                                        <span>ویرایش حساب</span>
                                    </a></li>
                                    
                             <li>       <a href="<?php echo wp_logout_url(); ?>">
                                        <i class="fas fa-out logout"></i>
                                        <span>خروج</span>
                                    </a>
                                </li>
                            </ul>
                            </div>
                            <?php
                        } else {
                            ?> <a href="<?php echo $options['opt-text-header-btn-not-user-link']; ?>"><?php echo $options['opt-text-header-btn-not-user-text']; ?></a> <?php
                        }
                    ?>
                    </button>

                            <?php
                        }
                    ?>

                </div>
               
            </div>
        </div>

        <div class="search-box">
        <i class="fas fa-times-circle ot-zabdar"></i>
            <div class="box-input-search">
                <?php get_search_form() ?>
            </div>
        </div>


    </div>
    </header>