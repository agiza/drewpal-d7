<div id="field-slider-items-outer-wrapper">

  <div id="field-slider-items-wrapper">

    <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
      
      <?php foreach ($items as $delta => $item): ?>
        <?php print render($item); ?>
      <?php endforeach; ?>

    </div>

  </div>

  <div class="controls">
    <?php foreach ($items as $delta => $item): ?>
      <span class="button"></span>
    <?php endforeach; ?>
  </div>

</div>
