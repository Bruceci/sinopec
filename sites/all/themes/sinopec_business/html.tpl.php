<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>

  <?php if (theme_get_setting('responsive_respond','bootstrap_business')): global $base_path; global $base_root; ?>
  <!-- Media Queries support for IE6-8 -->  
  <!--[if lt IE 9]>
    <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php endif; ?>
  
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<div id="qq_link"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1720740601&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1720740601:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
</body>
</html>
