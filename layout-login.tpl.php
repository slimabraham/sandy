<?php include sandy_get_header_path(); ?>

<div id='content'><div class='page-region clear-block'>
  <?php if ($content): ?>
    <div class='page-content content-wrapper clear-block'><?php print $content ?></div>
  <?php endif; ?>
  <?php print $content_region ?>
</div></div>

<?php include sandy_get_footer_path(); ?>
