<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eagle-eye</title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(get_theme_file_uri().'/resources/assets/images/favicons'); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(get_theme_file_uri().'/resources/assets/images/favicons'); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(get_theme_file_uri().'/resources/assets/images/favicons'); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo e(get_theme_file_uri().'/resources/assets/images/favicons'); ?>/site.webmanifest">
  <link rel="mask-icon" href="<?php echo e(get_theme_file_uri().'/resources/assets/images/favicons'); ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f339a7c60b.js"></script>

  <!-- Head Scripts -->
  <?php if(get_field('header_scripts', 'option')): ?>
    <?php echo e(the_field('header_scripts', 'option')); ?>

  <?php endif; ?>

  <?php wp_head() ?>
</head>
