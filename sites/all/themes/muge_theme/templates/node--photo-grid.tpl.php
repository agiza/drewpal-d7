<div id="page-description">
  <?php print render($content['body']); ?>
</div>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      hide($content['body']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_photos']);
      print render($content);
    ?>

    <?php print render($photo_grid_tabs); ?>
    <?php print render($photo_grid_select); ?>
    <?php print render($content['field_photos']); ?>
  </div>

  <?php print render($content['links']); ?>

</div>
