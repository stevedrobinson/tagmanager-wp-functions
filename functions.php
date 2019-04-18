/***************************
* GOOGLE TAG MANAGER
****************************/

/* Add Google Tag Manager javascript code as close to
the opening <head> tag as possible
=====================================================*/
function add_gtm_head(){
?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXX');</script>
<!-- End Google Tag Manager -->

<?php
}
add_action( 'wp_head', 'add_gtm_head', 10 );

/* Add Google Tag Manager noscript codeimmediately after
the opening <body> tag
========================================================*/
function add_gtm_body(){
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
}
add_action( 'body_top', 'add_gtm_body' );
