<?php


if( class_exists( 'CSF' ) ) {

    
    $prefix = 'my_post_meta_box_almas';
  
    
    CSF::createMetabox( $prefix, array(
      'title'     => 'اطلاعات نوشته',
      'post_type' => 'post',
    ) );
  
    
    CSF::createSection( $prefix, array(
      'fields' => array(
  
        
        array(
            'id'      => 'opt-text-time-post',
            'type'    => 'text',
            'title'   => 'مدت زمان خواندن مطلب',
            'default' => '5 دقیقه'
          ),

          array(
            'id'         => 'opt-button-set-box-download',
            'type'       => 'button_set',
            'title'      => 'دانلود ها',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),


          array(
            'id'      => 'opt-text-download-file',
            'type'    => 'text',
            'title'   => 'عنوان فایل',
          ),

          array(
            'id'      => 'opt-text-download-file-link',
            'type'    => 'text',
            'title'   => 'لینک فایل',
          ),

          array(
            'id'      => 'opt-text-download-file-2',
            'type'    => 'text',
            'title'   => 'عنوان فایل 2',
          ),

          array(
            'id'      => 'opt-text-download-file-link-2',
            'type'    => 'text',
            'title'   => 'لینک فایل 2',
          ),

          array(
            'id'      => 'opt-text-download-file-3',
            'type'    => 'text',
            'title'   => 'عنوان فایل 3',
          ),

          array(
            'id'      => 'opt-text-download-file-link-3',
            'type'    => 'text',
            'title'   => 'لینک فایل 3',
          ),

          array(
            'id'      => 'opt-text-download-file-4',
            'type'    => 'text',
            'title'   => 'عنوان فایل 4',
          ),

          array(
            'id'      => 'opt-text-download-file-link-4',
            'type'    => 'text',
            'title'   => 'لینک فایل 4',
          ),

          array(
            'id'      => 'opt-text-download-file-5',
            'type'    => 'text',
            'title'   => 'عنوان فایل 5',
          ),

          array(
            'id'      => 'opt-text-download-file-link-5',
            'type'    => 'text',
            'title'   => 'لینک فایل 5',
          ),

          array(
            'id'      => 'opt-text-download-file-6',
            'type'    => 'text',
            'title'   => 'عنوان فایل 6',
          ),

          array(
            'id'      => 'opt-text-download-file-link-6',
            'type'    => 'text',
            'title'   => 'لینک فایل 6',
          ),

          array(
            'id'      => 'opt-text-download-file-7',
            'type'    => 'text',
            'title'   => 'عنوان فایل 7',
          ),

          array(
            'id'      => 'opt-text-download-file-link-7',
            'type'    => 'text',
            'title'   => 'لینک فایل 7',
          ),

          array(
            'id'      => 'opt-text-download-file-8',
            'type'    => 'text',
            'title'   => 'عنوان فایل 8',
          ),

          array(
            'id'      => 'opt-text-download-file-link-8',
            'type'    => 'text',
            'title'   => 'لینک فایل 8',
          ),

          

          array(
            'id'      => 'opt-text-download-dis',
            'type'    => 'text',
            'title'   => 'توضیحات دانلود',
            'default' => 'میتوانید فایل را از لینک زیر دانلود کنید'
          ),

          array(
            'id'      => 'opt-text-download-pas',
            'type'    => 'text',
            'title'   => 'رمز فایل ها',
            'default' => 'www.test.ir'
          ),

          array(
            'id'      => 'opt-text-download-erorr',
            'type'    => 'text',
            'title'   => 'لینک گزارش خرابی لینک',
          ),
  
      )

    ) );
  
    
  
  }


?>