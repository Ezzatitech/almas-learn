<?php


if( class_exists( 'CSF' ) ) {

    
    $prefix = 'my_product_meta_box_almas';
  
    
    CSF::createMetabox( $prefix, array(
      'title'     => 'اطلاعات نوشته',
      'post_type' => 'product',
    ) );
  
    
    CSF::createSection( $prefix, array(
      'fields' => array(
  
        
        array(
            'id'         => 'opt-button-set-product-vigegiha',
            'type'       => 'button_set',
            'title'      => 'ویژگی های محصول',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'     => 'opt-repeater-1',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'fields' => array(
          
              array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Text'
              ),
          
            ),
          ),

          array(
            'id'         => 'opt-button-set-product-active-darsad',
            'type'       => 'button_set',
            'title'      => ' پیشرفت دوره',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          array(
            'id'      => 'opt-spinner-product-darsad',
            'type'    => 'number',
            'title'   => 'درصد پیشرفت دوره',
            'min'     => 0,
            'max'     => 100,
          ),

          array(
            'id'         => 'opt-button-set-product-active-return',
            'type'       => 'button_set',
            'title'      => 'امکان بازگشت وجه',
            'options'    => array(
              'enabled'  => 'فعال',
              'disabled' => 'غیر فعال',
            ),
            'default'    => 'enabled'
          ),

          


          
         
  
      )

    ) );
  
    
  
  }


?>