<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- Ícones -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/apple-icon-180x180.png">

  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/favicon-16x16.png">

  <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/manifest.json">

  <meta name="msapplication-TileColor" content="#263238">
  <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#263238">

  <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/img/icon/favicon.ico" type="image/x-icon">
  <!-- / Icones. -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php

  get_template_part( 'template/header', '');
  get_template_part( 'template/navigation', '' );
  ?>

  <main role="main">