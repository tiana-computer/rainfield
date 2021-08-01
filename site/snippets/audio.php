<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children()->listed() as $audio) : ?>

  <div class="oneBlock">
    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="<?= $audio->input() ?>"></iframe>
  </div>

<?php endforeach ?>

</div>