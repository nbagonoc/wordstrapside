<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>
<?php wp_head();?> <!-- wordpress include required header data -->
<body id="pageTop" data-spy="scroll">

  <!-- navigation -->
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
  <nav id="sidebar-wrapper">
    <div class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
      <li class="sidebar-brand"><a href="#pageTop" class="page-scroll">Project</a></li>
 
    <?php
      $args = array(
        'menu' => 'main-nav',
        'container' => false,
      );

      wp_nav_menu( $args );
    ?>

    </div>
  </nav>
