<?php $meta = get_post_meta( get_the_ID(), 'my_post_meta_box_almas', true ); ?>

<div class="bg-box-blog-post-single">
            <div class="box-download">
                <span class="sp-box-p"><?php echo $meta ['opt-text-download-dis'] ?></span>
             
                <div class="download_tab">

                    <span class="download-clik-row"><i class="fas fa-link"></i> دانلود فایل ها </span>
                    
                        <div class="box_content" >

                       


                 
                        <?php if( $meta ['opt-text-download-file'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-2'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-2'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-2'] ?></a>
                            <?php 
                        }; ?>
                    
                    <?php if( $meta ['opt-text-download-file-3'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-3'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-3'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-4'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-4'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-4'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-5'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-5'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-5'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-6'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-6'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-6'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-7'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-7'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-7'] ?></a>
                            <?php 
                        }; ?>

                        <?php if( $meta ['opt-text-download-file-8'] ){ 
                            ?>
                            <a href="<?php $meta ['opt-text-download-file-link-8'] ?>"><i class="fa fa-download"></i> <?php echo $meta ['opt-text-download-file-8'] ?></a>
                            <?php 
                        }; ?>
                            
                            
                        
                        
                   
                              

                    </div>
            </div>
                <div class="row">
                    <div class="col-6">
                        <span class="pas-box-download">پسورد فایل : <?php echo $meta['opt-text-download-pas'] ?></span>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo $meta['opt-text-download-erorr'] ?>" class="btn-not-link">گزارش خرابی لینک</a>
                    </div>
                </div>
            </div>
        </div>