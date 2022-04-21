<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title><?php bloginfo( 'name' ); ?></title>
</head>
<body>


<header>
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'primary_menu',
      'container_class' => 'my_primary_menu_class'
    )
  );
  ?>
</header>

<main>