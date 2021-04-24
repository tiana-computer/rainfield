<div id="oneBlocks">

<?php foreach ($page->children()->listed() as $audio) : ?>

  <div class="oneBlock">
    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="<?= $audio->source() ?>"></iframe>
  </div>

<?php endforeach ?>

</div>