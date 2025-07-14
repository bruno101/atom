<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture(); ?>"
  dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction; ?>">

<head>
  <?php echo get_partial('default/googleAnalytics'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_title(); ?>
  <?php echo get_component('default', 'tagManager', ['code' => 'script']); ?>
  <link rel="shortcut icon" href="<?php echo public_path('favicon.ico'); ?>">
  <script defer src="/dist/js/vendor.bundle.a7e9cc721ddffea3467d.js"></script><script defer src="/dist/js/arDominionB5Plugin.bundle.a7d2c17857613b862655.js"></script><link href="/dist/css/arDominionB5Plugin.bundle.9d2db815d12877d4ef13.css" rel="stylesheet">
    <?php echo get_component_slot('css'); ?>
</head>

<body
  class="d-flex flex-column min-vh-100 <?php echo $sf_context->getModuleName(); ?> <?php echo $sf_context->getActionName(); ?><?php echo sfConfig::get('app_show_tooltips') ? ' show-edit-tooltips' : ''; ?>">
  <?php echo get_component('default', 'tagManager', ['code' => 'noscript']); ?>
  <?php echo get_partial('header'); ?>
  <?php
  $requestUri = $_SERVER['REQUEST_URI'];
 
  if (
    !preg_match('#(^|/)chatbot($|[/?])#', subject: $requestUri)
  ) {
    echo get_partial('banner');
    echo get_component('search', 'box');
  }
  ?>
  <?php include_slot('pre'); ?>