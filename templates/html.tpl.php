<!DOCTYPE html>
<html class="no-js" lang="<?php print $language->language; ?>">
<head>
  <?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/meta.html"); ?>
  <title><?php print $head_title; ?></title>
  <?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/css.html"); ?>
  <?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/js-head.html"); ?>
  <?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/favicon.html"); ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="debug example <?php print $classes; ?>" data-version="1.0" <?php print $attributes;?>>
<?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/skip-nav.html"); ?>

<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/noscript.html"); ?>
<?php require(DRUPAL_ROOT."/dcf/theme/example/includes/global/js-body.html"); ?>
</body>
</html>
