<?php

/**
 * @file
 */
?>
<article class="<?php print $classes; ?>" data-nid="<?php print $node->nid; ?>" >
  <div class="content">
    <?php
    // We hide the comments to render below.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    ?>
  </div><!-- /content -->

  <?php if (!empty($content['links']['terms'])): ?>
    <div class="terms">
      <?php print render($content['links']['terms']); ?>
    </div><!-- /terms -->
  <?php endif;?>

  <?php if (!empty($content['links'])): ?>
    <div class="links">
      <?php print render($content['links']); ?>
    </div><!-- /links -->
  <?php endif; ?>

  <?php print render($content['comments']); ?>
</article><!-- /node -->
