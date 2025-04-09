<?php $options = get_option( 'my_option_almaslearn' ); ?>


<div class="notification-bar" style="background: url(<?php echo $options['opt-upload-notif']; ?>); background-color: <?php echo $options['opt-color-natof-bg']; ?>; min-height: <?php echo $options['opt-spinner-natif-heit']; ?>px;">
        <div class="container-fluid">
            <div class="content-holder">
                <i class="fas fa-times close-notification"></i>
                <p style="color: <?php echo $options['opt-color-natof-text']; ?> !important;"><?php echo $options['opt-text-natif-dis']; ?></p>
            </div>
            <?php 

                    if( $options['opt-button-set-nafit-btn'] =='enabled' ) {
        
                        include 'notification-btn.php';
                    }
                ?>

                    </div>
    </div>