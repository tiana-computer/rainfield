<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children()->listed() as $audio) : ?>

  <div class="oneBlock">
    <?= $audio->input() ?>
  </div>

<?php endforeach ?>

</div>