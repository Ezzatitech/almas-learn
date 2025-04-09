<?php $options = get_option( 'my_option_almaslearn' ); ?>
<style type="text/css">
		::-webkit-selection {
    background-color: <?php echo $options['opt-color-almas']; ?>; color: white;
  }
  ::-moz-selection {
    background-color: <?php echo $options['opt-color-almas']; ?>; color: white;
  }
  ::selection {
    background-color: <?php echo $options['opt-color-almas']; ?>; color: white;
  }
  .min-header .btn-login,.searsh-btn,.search-box .search-button,.scrool-to-top:hover,.edd-submit.button.blue,.progress-title .progress-bar,.btn-class-bg-box,.titre_woocommece svg ,.aw_teacher_phone_number svg {
	  background-color: <?php echo $options['opt-color-almas']; ?>;
  }
  .min-header .ullia div > ul > li > a:hover ,.min-header .ullia ul li > ul a:hover ,.min-header .btn-login:hover a ,.bg-wite-user-login ul li:hover a ,.p-span-color ,.bg-mahsoolat h3:hover ,.btn-a-id a ,.fl-dis li a:hover ,.ps-sidebar-edd .modat-zaman-dore svg ,.ps-sidebar-edd .bg-style-btn-a ,.ps-sidebar-edd  {
	  color: <?php echo $options['opt-color-almas']; ?>;
  }
  .min-header .ullia ul li > ul{
	border-bottom: 4px solid <?php echo $options['opt-color-almas']; ?>;
  }
  .min-header .btn-login{
	border: 2px solid <?php echo $options['opt-color-almas']; ?>;
  }
  .min-header .btn-login:hover{
	border: 2px solid <?php echo $options['opt-color-almas']; ?>;
  }
  .search-box .search-button{
	border: 1px solid <?php echo $options['opt-color-almas']; ?>;
  }
  footer .min-footer{
	border-top: <?php echo $options['opt-color-almas']; ?> 4px solid;
  }
  .btn-class-bg-box{
	border: 1px solid <?php echo $options['opt-color-almas']; ?> !important;
  }
  .titre_woocommece hr{
	border-top: 3px solid <?php echo $options['opt-color-almas']; ?>;
  }
  .titre_woocommece .befo-op{
	border-top: 3px solid <?php echo $options['opt-color-almas']; ?>;
  }
  .min-header .ullia ul li > ul a:hover{
    color: <?php echo $options['opt-color-almas']; ?> !important;
  }
  .btn-class-bg-box{
    background-color: <?php echo $options['opt-color-almas']; ?> !important;
  }
  footer .min-footer ul li::before{
	background: <?php echo $options['opt-color-almas']; ?>;
  }
  .bg-wite-user-login ul li:hover a{
    color: <?php echo $options['opt-color-almas']; ?> !important;
}



/* header_logo */
.min-header .img .custom-logo-almas{
  max-width: <?php echo $options['opt-spinner-header-wilogo']; ?>px ;
}

/* footer */

footer .min-footer{
  background-color: <?php echo $options['opt-color-footer']; ?>;
  border-top: 4px solid <?php echo $options['opt-color-footer-border']; ?> ;
}

footer .min-footer p{
  color: <?php  echo $options['opt-color-footer-text'] ?> ;
}

footer .min-footer ul li{
  color: <?php  echo $options['opt-color-footer-text-two'] ?>;
}

footer .min-footer ul li::before{
  background: <?php  echo $options['opt-color-footer-bg-tow'] ?> ;
}

footer .min-footer .p-span-color{
  color: <?php  echo $options['opt-color-footer-bg-tow'] ?>;
}



/* font_size */
body{
  font-size: <?php echo $options['opt-number-font-body']; ?>px;
}

h1{
  font-size: <?php echo $options['opt-number-font-h1']; ?>px;
}

h2{
  font-size: <?php echo $options['opt-number-font-h2']; ?>px;
}

h3{
  font-size: <?php echo $options['opt-number-font-h3']; ?>px;
}

h4{
  font-size: <?php echo $options['opt-number-font-h4']; ?>px;
}

h5{
  font-size: <?php echo $options['opt-number-font-h5']; ?>px;
}

h6{
  font-size: <?php echo $options['opt-number-font-h6']; ?>px;
}

	</style>