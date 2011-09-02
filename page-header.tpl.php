<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <?php print $ie ?>
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>

  <?php print $skipnav ?>
  <div id='branding' class='dropdown-blocks toggle-blocks clear-block'><div class='clear-block'>
      <div class="branding-left position left size-40">
        <div class='breadcrumb'><?php print $breadcrumb ?></div>
      </div>
      <div class="branding-center position left size-20">
        <?php if ($group_name) print $group_name ?>
      </div>
      <div class="branding-right position left size-40">
        <?php if ($header): ?>
          <?php print $header ?>        
        <?php endif; ?>
        <?php print $space_tools ?>
      </div>
  </div></div>

  <div id='global'><div class='limiter clear-block'>
     <a href="<?php print base_path()?>" title="Home"><img src="<?php print $logo; ?>"/></a>  
  </div></div>

  <?php if ($primary_links): ?>
  <div id='navigation'><div class='limiter clear-block'>
    <?php if (isset($primary_links)) print theme('links', $primary_links, array('id' => 'features-menu', 'class' => 'links primary-links')) ?>
  </div></div>
  <?php endif; ?>

  <div id='page-tools'><div class='limiter clear-block'>
    <?php if ($title): ?><h1 <?php print drupal_attributes($title_attr) ?>><?php print $title ?></h1><?php endif; ?>
    <?php if ($tabs):?><div class='tabs clear-block'><?php print $tabs ?></div><?php endif; ?>
    <?php if ($help_toggler):?><?php print $help_toggler ?><?php endif; ?>
    <?php if ($context_links): ?><div class='context-links'><?php print $context_links ?></div><?php endif; ?>
    <?php if ($page_tools): ?><div class='dropdown-blocks toggle-blocks clear-block'><?php print $page_tools ?></div><?php endif; ?>
  </div></div>

  <?php if ($tabs2): ?>
    <div id='secondary-tabs'><div class='limiter clear-block'><?php print $tabs2 ?></div></div>
  <?php endif; ?>

  <?php if ($messages): ?><div id='messages'><?php print $messages; ?></div><?php endif; ?>

  <div id='page'><div class='limiter clear-block'>
    <?php if ($mission): ?><div class="mission"><?php print $mission ?></div><?php endif; ?>

