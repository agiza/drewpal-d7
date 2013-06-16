<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php hide($content['comments']); ?>
    <?php hide($content['links']); ?>
    <?php hide($content['field_partner_widget_title']); ?>
    <?php hide($content['field_partner_widget_body']); ?>
      
    <?php print render($content); ?>
  </div>

  <div class="partner-widget">
    <div class="tweet">
      <?php print render($last_nscs_twitter_status); ?>
    </div>
    <div class="flexible-content-area">
      <?php print render($content['field_partner_widget_title']); ?>
      <?php print render($content['field_partner_widget_body']); ?>
    </div>
  </div>

  <div class="partner-widget-toggle">
    <div class="plus"></div>
    <div class="minus"></div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
