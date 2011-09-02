<?php

/**
 * Implementation og hook_theme()
 */
function sandy_theme() {
  return array(
    'page_header' => array(
      'arguments' => array('vars' => NULL),
      'template' => 'page-header',
    ),
    'page_footer' => array(
      'arguments' => array('vars' => NULL),
      'template' => 'page-footer',
    ),
  );
}

/**
 * Implementation of hook_preprocess_page()
 */
function sandy_preprocess_page(&$vars) {
  $space = spaces_get_space();
  if ($space && $space->type == 'og') {
    $vars['group_name'] = $space->group->title;
  }
}

/**
 * Override of theme('breadcrumb').
 */
function sandy_breadcrumb($breadcrumb, $prepend = TRUE) {
  $output = '';

  // Add current page onto the end.
  if (!drupal_is_front_page()) {
    $item = menu_get_item();
    $end = end($breadcrumb);
    if ($end && strip_tags($end) !== $item['title']) {
      $breadcrumb[] = "<strong>". check_plain($item['title']) ."</strong>";
    }
  }

  // Remove the home link.
  foreach ($breadcrumb as $key => $link) {
    if (strip_tags($link) === t('Home')) {
      unset($breadcrumb[$key]);
      break;
    }
  }
  
//  // Optional: Add the site name to the front of the stack.
//  if ($prepend) {
//    $site_name = empty($breadcrumb) ? "<strong>". check_plain(variable_get('site_name', '')) ."</strong>" : l(variable_get('site_name', ''), '<front>', array('purl' => array('disabled' => TRUE)));
//    array_unshift($breadcrumb, $site_name);
//  }

  $depth = 0;
  foreach ($breadcrumb as $link) {
    $output .= "<span class='breadcrumb-link breadcrumb-depth-{$depth}'>{$link}</span>";
    $depth++;
  }
  return $output;
}

/**
 * Helper for header inclusion.
 */
function sandy_get_header_path() {
  $registry = theme_get_registry();
  $t = $registry['page_header'];
  return getcwd() . DIRECTORY_SEPARATOR . $registry['page_header']['theme path'] . DIRECTORY_SEPARATOR . 'page-header.tpl.php';  
}

/**
 * Helper for footer inclusion.
 */
function sandy_get_footer_path() {
  $registry = theme_get_registry();
  $t = $registry['page_footer'];
  return getcwd() . DIRECTORY_SEPARATOR . $registry['page_footer']['theme path'] . DIRECTORY_SEPARATOR . 'page-footer.tpl.php';  
}
