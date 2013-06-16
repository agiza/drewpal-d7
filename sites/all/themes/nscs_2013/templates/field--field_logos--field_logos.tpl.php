<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="logo-items">  
	  <?php foreach ($items as $delta => $item): ?>
	    <?php print render($item); ?>
	  <?php endforeach; ?>
	</div>
	<div class="prev-container">
		<div class="prev"></div>
	</div>
	<div class="next-container">
		<div class="next"></div>
	</div>
</div>


<div class="current-description">
	<div class="description">
	</div>
</div>
