<?php

if( class_exists( 'CSF' ) ) {

//
// Set a unique slug-like ID
$prefix = 'my_option_almaslearn';

CSF::createCustomizeOptions( $prefix );
//
// Create options
CSF::createOptions( $prefix, array(
  'menu_title' => 'تنظیمات الماس لرن',
  'menu_slug'  => 'my-option-almaslearn',
  'framework_title'         => 'الماس لرن <small>نسخه 1.0.0</small>',
  'class'                   => 'almas_learn',
  'footer_text'             => 'طراح و برنامه نویس وردپرس الماسی',
) );

CSF::createSection( $prefix, array(
    'id'    => 'primary_tab_header', // Set a unique slug-like ID
    'icon' => 'fa fa-window-maximize',
    'title' => 'سربرگ',
  ) );
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'primary_tab_header',
    'title'  => 'هدر',
    'fields' => array(

        array(
            'id'      => 'opt-spinner-header-heit',
            'type'    => 'spinner',
            'title'   => 'ارتفاع هدر',
            'min'     => 0,
            'max'     => 30,
            'step'    => 1,
            'default' => 0,
          ),

          array(
            'id'           => 'opt-upload-logo-header',
            'type'         => 'upload',
            'title'        => 'آپلود لوگو',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'اضافه کردن تصویر',
            'remove_title' => 'حذف تصویر',
            'default' => get_template_directory_uri().'/assets/img/logo-header.png' ,
          ),
   
          array(
            'id'      => 'opt-spinner-header-wilogo',
            'type'    => 'spinner',
            'title'   => 'عرض لوگو',
            'min'     => 0,
            'max'     => 250,
            'step'    => 5,
            'default' => 195,
          ),

          array(
            'id'         => 'opt-button-set-header-btn',
            'type'       => 'button_set',
            'title'      => 'نمایش دکمه ناحیه کاربری',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'      => 'opt-text-header-btn-not-user-text',
            'type'    => 'text',
            'title'   => 'متن قبل از ورود',
            'default' => 'ورود / ثبت نام'
          ),

          array(
            'id'      => 'opt-text-header-btn-user-text',
            'type'    => 'text',
            'title'   => 'متن بعد از ورود',
            'default' => 'ناحیه کاربری'
          ),

          array(
            'id'      => 'opt-text-header-btn-user-link',
            'type'    => 'text',
            'title'   => 'لینک بخش ناحیه کاربری',
            'default' => 'http://test.com/my-account'
          ),

          array(
            'id'      => 'opt-text-header-btn-not-user-link',
            'type'    => 'text',
            'title'   => 'لینک صفحه ورود و ثبت نام',
            'default' => 'http://test.com/my-account'
          ),

          array(
            'id'         => 'opt-button-set-header-btn-search',
            'type'       => 'button_set',
            'title'      => 'نمایش دکمه جستجو',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'         => 'opt-button-set-header-btn-cart',
            'type'       => 'button_set',
            'title'      => 'نمایش دکمه سبد خرید',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),
      
        
      ),
      
) 

  );

  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab_header',
    'title'  => 'عنوان صفحات',
    'fields' => array(

        array(
            'id'      => 'opt-spinner-hلeader-heit',
            'type'    => 'spinner',
            'title'   => 'ارلتفاع هدر',
            'min'     => 0,
            'max'     => 30,
            'step'    => 1,
            'default' => 0,
          ),
   
          
      
        
      ),
      
) 

  );

  


// Create a section
CSF::createSection( $prefix, array(
    'icon' => 'fa fa-bullhorn',
      'title'  => 'نوار اعلان',
      'fields' => array(
  
        array(
            'id'         => 'opt-button-set-nafit',
            'type'       => 'button_set',
            'title'      => 'نمایش نوار اعلان',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'      => 'opt-spinner-natif-heit',
            'type'    => 'spinner',
            'title'   => 'ارتفاع نوار اعلان',
            'min'     => 40,
            'max'     => 90,
            'step'    => 5,
            'unit'    => 'px',
            'default' => 90,
          ),

          array(
            'id'      => 'opt-text-natif-dis',
            'type'    => 'text',
            'title'   => 'متن نوار اعلان',
            'default' => 'شما در حال تماشا دمو قالب الماس لرن هستید، با الماس لرن هر آنچه برای پایه گذاری الماس لرن فروش دوره و فایل نیاز دارید، در اختیارتان است.'
          ),

          array(
            'id'      => 'opt-color-natof-text',
            'type'    => 'color',
            'title'   => 'رنگ متن نوار اعلان',
            'default' => '#ffffff'
          ),

          array(
            'id'      => 'opt-color-natof-bg',
            'type'    => 'color',
            'title'   => 'رنگ پس زمینه نوار اعلان',
            'default' => '#2fbfb4'
          ),

          array(
            'id'           => 'opt-upload-notif',
            'type'         => 'upload',
            'title'        => 'آپلود تصویر پس زمینه نوار اعلان',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'اضافه کردن تصویر',
            'remove_title' => 'حذف تصویر',
          ),

          array(
            'id'         => 'opt-button-set-nafit-btn',
            'type'       => 'button_set',
            'title'      => 'نمایش دکمه نوار اعلان',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'      => 'opt-text-natif-btn',
            'type'    => 'text',
            'title'   => 'متن دکمه نوار اعلان',
            'default' => 'خرید از راست چین'
          ),

          array(
            'id'      => 'opt-text-natif-btn-link',
            'type'    => 'text',
            'title'   => 'لینک دکمه نوار اعلان',
          ),

          array(
            'id'      => 'opt-color-natof-btn-bg',
            'type'    => 'color',
            'title'   => 'رنگ پس زمینه دکمه نوار اعلان',
            'default' => '#ffffff'
          ),

          array(
            'id'      => 'opt-color-natof-btn-text',
            'type'    => 'color',
            'title'   => 'رنگ متن دکمه نوار اعلان',
            'default' => '#4f4f4f'
          ),
       
      )
      
    ) );

    CSF::createSection( $prefix, array(
        'icon' => 'fa fa-font',
        'title'  => 'تایپوگرافی',
        'fields' => array(
    
            array(
                'id'          => 'opt-select-font-almas',
                'type'        => 'select',
                'title'       => 'فونت مورد نظر را انتخاب کنید',
                'options'     => array(
                  'option-1'  => 'ایران یکان',
                ),
                'default'     => 'option-1'
              ),

              array(
                'id'          => 'opt-number-font-body',
                'type'        => 'number',
                'title'       => 'اندازه فونت body',
                'unit'        => 'px',
                'default'     => 16,
              ),

              array(
                'id'          => 'opt-number-font-h1',
                'type'        => 'number',
                'title'       => 'اندازه فونت h1',
                'unit'        => 'px',
                'default'     => 28,
              ),

              array(
                'id'          => 'opt-number-font-h2',
                'type'        => 'number',
                'title'       => 'اندازه فونت h2',
                'unit'        => 'px',
                'default'     => 26,
              ),

              array(
                'id'          => 'opt-number-font-h3',
                'type'        => 'number',
                'title'       => 'اندازه فونت h3',
                'unit'        => 'px',
                'default'     => 24,
              ),
              
              array(
                'id'          => 'opt-number-font-h4',
                'type'        => 'number',
                'title'       => 'اندازه فونت h4',
                'unit'        => 'px',
                'default'     => 22,
              ),

              array(
                'id'          => 'opt-number-font-h5',
                'type'        => 'number',
                'title'       => 'اندازه فونت h5',
                'unit'        => 'px',
                'default'     => 20,
              ),

              array(
                'id'          => 'opt-number-font-h6',
                'type'        => 'number',
                'title'       => 'اندازه فونت h6',
                'unit'        => 'px',
                'default'     => 18,
              ),

              
              
         
        )
        
      ) );

      CSF::createSection( $prefix, array(
        'icon' => 'fa fa-palette',
        'title'  => 'رنگ ها',
        'fields' => array(
    
            array(
                'id'      => 'opt-color-almas',
                'type'    => 'color',
                'title'   => 'رنگ اصلی',
                'default' => '#2fbfb4'
              ),

              array(
                'id'      => 'opt-color-main',
                'type'    => 'color',
                'title'   => 'رنگ دوم',
                'default' => '#23b963'
              ),
        )
        
      ) );

CSF::createSection( $prefix, array(
    'icon' => 'fa fa-folder-plus',
    'id'    => 'primary_tab_blog', // Set a unique slug-like ID
    'title' => 'وبلاگ',
  ) );
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'primary_tab_blog',
      'title'  => 'نوشته تکی',
      'fields' => array(

        array(
          'id'         => 'opt-button-post-blog-sidebar',
          'type'       => 'button_set',
          'title'      => 'سایدبار',
          'options'    => array(
            'enabled'  => 'چپ',
            'disabled' => 'راست',
          ),
          'default'    => 'enabled'
        ),

       array(
            'id'         => 'opt-button-post-blog-user',
            'type'       => 'button_set',
            'title'      => 'نمایش اطلاعات نویسنده',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'         => 'opt-button-post-blog-tel-ins',
            'type'       => 'button_set',
            'title'      => 'نمایش شبکه های اجتماعی',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'      => 'opt-text-post-blog-tel-ins',
            'type'    => 'text',
            'title'   => 'متن دنبال کردن',
            'default' => 'الماس لرن را دنبال کنید!'
          ),

          array(
            'id'      => 'opt-text-post-blog-tel-link',
            'type'    => 'text',
            'title'   => 'لینک کانال تلگرام',
          ),

          array(
            'id'      => 'opt-text-post-blog-ins-link',
            'type'    => 'text',
            'title'   => 'لینک پیج اینستاگرام',
          ),


          array(
            'id'         => 'opt-button-post-blog-box-comment',
            'type'       => 'button_set',
            'title'      => 'نمایش باکس قوانین دیدگاه',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'    => 'opt-wp-editor-blog-post-comment',
            'type'  => 'wp_editor',
            'title' => 'قوانین دیدگاه',
          ),

          
          
  
      )
      
    ) );

    CSF::createSection( $prefix, array(
      'parent' => 'primary_tab_blog',
      'title'  => 'آرشیو مقالات',
      'fields' => array(
  
        array(
          'id'          => 'opt-select-sotoon-blog',
          'type'        => 'select',
          'title'       => 'تعداد ستون نمایش مطالب',
          'options'     => array(
            'option-1'  => 'دو ستونه',
            'option-2'  => 'سه ستونه',
            'option-3'  => 'چهار ستونه',
          ),
          'default'     => 'option-2'
        ),

        array(
          'id'         => 'opt-button-post-blog-ar-sidebar',
          'type'       => 'button_set',
          'title'      => 'سایدبار',
          'options'    => array(
            'enabled'  => 'چپ',
            'disabled' => 'راست',
          ),
          'default'    => 'enabled'
        ),
     
            
        
          
        ),
        
  ) 
  
    );

    CSF::createSection( $prefix, array(
        'icon' => 'fa fa-user-circle',
        'title'  => 'پروفایل کاربری',
        'fields' => array(
    
          //
          // A text field
          array(
            'id'    => 'opt-text',
            'type'  => 'text',
            'title' => 'عنوان',
          ),
         
        )
        
      ) );

      CSF::createSection( $prefix, array(
        'icon' => 'fa fa-shopping-cart',
        'title'  => 'محصولات',
        'fields' => array(
    
          //
          // A text field
          array(
            'id'    => 'opt-text-btn-cart',
            'type'  => 'text',
            'title' => 'متن سبد خرید بعد از خرید کاربر',
            'default' => 'شما محصول را خریداری کرده اید'
          ),
          array(
            'id'         => 'opt-button-set-sidebar',
            'type'       => 'button_set',
            'title'      => 'مکان سایدبار',
            'options'    => array(
              'enabled'  => 'راست',
              'disabled' => 'چپ',
            ),
            'default'    => 'disabled'
          ),

          array(
            'id'         => 'opt-button-set-coin',
            'type'       => 'button_set',
            'title'      => 'تعداد خرید محصول',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'         => 'opt-button-set-tab',
            'type'       => 'button_set',
            'title'      => 'تب های محصول',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'         => 'opt-button-set-phone',
            'type'       => 'button_set',
            'title'      => 'شماره تلفن فروشنده',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'         => 'opt-button-set-moshavare',
            'type'       => 'button_set',
            'title'      => 'درخواست مشاوره',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'    => 'opt-text-btn-moshavare',
            'type'  => 'text',
            'title' => 'متن دکمه درخواست مشاوره',
            'default' => 'درخواست مشاوره'
          ),

          array(
            'id'    => 'opt-text-btn-short',
            'type'  => 'text',
            'title' => 'کد کوتاه فرم در خواست مشاوره',
          ),
        )

        
        
      ) );


    CSF::createSection( $prefix, array(
        'icon' => 'fa fa-window-maximize',
        'title'  => 'پاورقی',
        'fields' => array(
    
          array(
            'id'          => 'opt-select-footer',
            'type'        => 'select',
            'title'       => 'نوع فوتر',
            'options'     => array(
              'option-1'  => 'فوتر یک',
            ),
            'default'     => 'option-1'
          ),

          array(
            'id'      => 'opt-color-footer',
            'type'    => 'color',
            'title'   => 'رنگ پس زمینه',
            'default' => '#fcfcfc'
          ),

          array(
            'id'      => 'opt-color-footer-bg-tow',
            'type'    => 'color',
            'title'   => 'رنگ دوم فوتر',
            'default' => '#2fbfb4'
          ),

          array(
            'id'      => 'opt-color-footer-text',
            'type'    => 'color',
            'title'   => 'رنگ متن فوتر',
            'default' => '#7a7a7a'
          ),

          array(
            'id'      => 'opt-color-footer-text-two',
            'type'    => 'color',
            'title'   => 'رنگ دوم متن فوتر',
            'default' => '#54595f'
          ),

          array(
            'id'      => 'opt-color-footer-border',
            'type'    => 'color',
            'title'   => 'رنگ بوردر بالا فوتر',
            'default' => '#2fbfb4'
          ),

          array(
            'id'      => 'opt-text-copy-footer',
            'type'    => 'text',
            'title'   => 'متن کپی رایت',
            'default' => 'تمامی حقوق برای الماس لرن محفوظ می باشد.'
          ),

          array(
            'id'         => 'opt-button-footer-code',
            'type'       => 'button_set',
            'title'      => 'متن طراح و برنامه نویس',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),
         
        )
        
      ) );


      CSF::createSection( $prefix, array(
        'icon' => 'fa fa-file-import',
        'title'  => 'درون ریزی / برون بری',
        'fields' => array(
    
          //
          // A text field
          array(
            'type' => 'backup',
          ),
        )
        
      ) );

}




?>