<?php global $opt_themes; if($opt_themes['ex_themes_rtl_activate_']) { ?>
<link id="5play-core-rtl-style" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/core.css" type="text/css" rel="stylesheet">
<link id="5play-styles-rtl" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/styles.css" type="text/css" rel="stylesheet">
<link id="5play-short-rtl-style" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/short.css" type="text/css" rel="stylesheet">
<link id="5play-fullstory-rtl-style" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/fullstory.css" type="text/css" rel="stylesheet">
<link id="5play-comments-rtl-style" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/comments.css" type="text/css" rel="stylesheet">
<link id="5play-other-rtl-style" href="<?php echo get_template_directory_uri(); ?>/assets/css.rtl/other.css" type="text/css" rel="stylesheet">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/manrope-v3-cyrillic-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/manrope-v3-cyrillic-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/cores.styles.css" as="style">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" as="style">
<?php if ( is_user_logged_in() ) { ?>
<link id="5play-user-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/user.styles.css" type="text/css" rel="stylesheet">
<?php }?>
<?php } else {  ?>    
    
<link id="5play-cores-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/cores.styles.css" type="text/css" rel="stylesheet">
<link id="5play-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" type="text/css" rel="stylesheet">
<link id="5play-short-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/short.styles.css" type="text/css" rel="stylesheet">
<link id="5play-fullstory-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/fullstory.styles.css" type="text/css" rel="stylesheet">
<link id="5play-comments-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/comments.styles.css" type="text/css" rel="stylesheet">
<link id="5play-other-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/other.styles.css" type="text/css" rel="stylesheet">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/manrope-v3-cyrillic-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/manrope-v3-cyrillic-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/cores.styles.css" as="style">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/cores.styles2.css" as="style">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" as="style">
 <?php if ( is_user_logged_in() ) { ?>
<link id="5play-user-style" href="<?php echo get_template_directory_uri(); ?>/assets/css/user.styles.css" type="text/css" rel="stylesheet">
<?php } ?>
<?php } ?>