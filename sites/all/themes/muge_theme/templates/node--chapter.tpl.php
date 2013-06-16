<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix);
    print render($content['fb_photo_album']);
  ?>
  <?php print render($content['body']); ?>
  <?php if (strlen($fb_url)>0):?>
  <hr />
  <fb:like-box href="<?php print $fb_url?>" width="300" show_faces="true" stream="false" show_border="true" header="true"></fb:like-box>
  <?php endif; ?>
  <?php if (!empty($content['field_chapter_founded_date'])): ?>
    <hr />
    <h3>Year Founded</h3>
    <p><?php print substr($content['field_chapter_founded_date']['#items']['0']['value'],0,4);?></p>
    <hr />
  <?php endif; ?>
    
  <?php if (strlen($content['field_chapter_star_status']['#items']['0']['value'])>0): ?>
    <h3>STAR Status</h3>
    <?php print render($content['field_chapter_star_status']);?>
    <hr />
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content['field_chapter_background_image']);
      //print render($distinguished_members);
      print render($advisors);
      print render($officers);
    ?>
  </div>

  <?php print render($content['links']); ?>

</div>