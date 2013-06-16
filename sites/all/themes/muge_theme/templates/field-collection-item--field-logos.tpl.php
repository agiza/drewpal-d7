<div class="logo-item">
	<div class="image">
	  <?php print render($content['field_logos_image']); ?>
	</div>

	<div class="description">
		<div class="title">
	  	<?php print render($content['field_logos_title']); ?>
	  </div>
	  <?php print render($content['field_logos_description']); ?>
	  <?php if (array_key_exists('field_logos_link', $content) && array_key_exists('field_logos_link_text', $content)): ?>
	  	<a class="action" href="<?php print $content['field_logos_link']['#items'][0]['path']; ?>"><?php print $content['field_logos_link_text'][0]['#markup']; ?></a>
		<?php endif; ?>
	</div>
</div>
