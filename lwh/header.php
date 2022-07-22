<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
         <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <?php echo bloginfo('name'); ?>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <?php
            wp_nav_menu(array(
               'theme_location' => 'topmenu',
               'container'      => null,
               'menu_class'     => 'navbar-nav mx-auto mb-2 mb-lg-0',
            ))
            ?>
            <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
               <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
         </div>
      </div>
   </nav>