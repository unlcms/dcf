<div class="dcf-o-wrapper dcf-u-pt2 dcf-u-pb4 dcf-c-header">

  <!--     <header class="" id="dcf-header" role="banner"> -->

  <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/institution.html"); ?>

  <div class="dcf-u-flex dcf-u-ai-center dcf-u-pt4 dcf-c-logo" style="overflow: hidden;">
    <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/logo.html"); ?>

    <div class="dcf-u-flex dcf-u-flex-col dcf-u-jc-center">
      <div class="dcf-u-uppercase dcf-u-h3 dcf-u-lh3 dcf-u-ls2 dcf-u-regular" id="dcf-site-affiliation"><!-- InstanceBeginEditable name="affiliation" --><a href="#">College of Business</a><!-- InstanceEndEditable --></div>
      <div class="dcf-u-sm2 dcf-u-italic" id="dcf-site-title"><!-- InstanceBeginEditable name="titlegraphic" --><a href="#"><!-- Jane Doe Department of Accounting --></a><!--<abbr title="Jane Doe Department of Accounting">JDDoA</abbr>--><!-- InstanceEndEditable --></div>
    </div>
  </div>

  <!--     </header> -->


  <button class="dcf-u-p0 dcf-u-b0 dcf-u-bg-transparent dcf-c-mobile-nav-toggle dcf-c-nav-toggle" id="dcf-search-toggle" aria-pressed="false" aria-controls=" " aria-haspopup="true">
    <span class="dcf-u-flex dcf-u-flex-col dcf-u-ai-center dcf-u-jc-center dcf-u-h100">
      <span class="dcf-u-flex dcf-u-ai-center dcf-u-jc-center dcf-u-circle" style="height: 2em; width: 2em; background-color: #30c;">
        <svg class="dcf-c-icon" aria-hidden="true" focusable="false" width="16" height="16" viewBox="0 0 48 48"><g class="dcf-c-icon--menu-top"><path fill="#fff" d="M46,9H2a2,2,0,0,0,0,4H46a2,2,0,0,0,0-4Z"/></g><g class="dcf-c-icon--menu-bottom"><path fill="#fff" d="M46,35H2a2,2,0,0,0,0,4H46a2,2,0,0,0,0-4Z"/></g><g class="dcf-c-icon--menu-middle"><path fill="#fff" d="M46,22H2a2,2,0,0,0,0,4H46a2,2,0,0,0,0-4Z"/></g></svg>
      </span>
    	<span class="dcf-u-sr-only">Show </span><span class="dcf-u-sm2">Menu</span>
    </span>
  </button>

  <!--     <div class="" id="dcf-navigation"> -->
  <nav class="dcf-u-pt5 dcf-c-nav__primary" role="navigation" aria-label="primary navigation">
    <!-- InstanceBeginEditable name="navlinks" -->
    <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/local/nav-primary.html"); ?>
    <!-- InstanceEndEditable -->
  </nav>
  <nav class="dcf-u-flex dcf-u-ai-center dcf-u-mt1 dcf-u-sm2 dcf-c-nav__secondary" role="navigation" aria-label="secondary navigation">
    <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/nav-secondary.html"); ?>
  </nav>
  <!--     </div> -->

  <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/idm.html"); ?>
  <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/search.html"); ?>
</div>


<main class="dcf-o-wrapper" id="dcf-main" role="main" tabindex="-1">

  <nav class="dcf-c-breadcrumbs dcf-u-mt8" id="dcf-breadcrumbs" role="navigation" aria-label="breadcrumbs">
    <ol class="dcf-c-list-unstyled dcf-u-flex dcf-u-flex-wrap dcf-u-sm3 dcf-u-mb8">
      <!-- InstanceBeginEditable name="breadcrumbs" -->
      <?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif; ?>
      <!-- InstanceEndEditable -->
    </ol>
  </nav>

  <div class="dcf-u-pt5" id="dcf-page-title">
    <!-- InstanceBeginEditable name="pagetitle" -->
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <!-- InstanceEndEditable -->
  </div>

  <!-- InstanceBeginEditable name="maincontentarea" -->
  <?php print $messages; ?>
  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <?php print render($page['help']); ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php endif; ?>
  <?php print render($page['content_top']); ?>

  <?php print render($page['content']); ?>

  <?php print render($page['content_bottom']); ?>
  <!-- InstanceEndEditable -->
</main>
<footer class="dcf-c-footer" id="dcf-footer" role="contentinfo">
  <!-- InstanceBeginEditable name="contactinfo" -->
  <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/local/footer-local.html"); ?>
  <!-- InstanceEndEditable -->
  <?php include(DRUPAL_ROOT . "/dcf/theme/example/includes/global/footer-global.html"); ?>
</footer>
