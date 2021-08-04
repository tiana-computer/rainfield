<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children() as $text) : ?>

  <div class="textOneBlock">
    <h2><?= $text->title() ?></h2>
    <p><?= $text->input() ?></p>
  </div>

<?php endforeach ?>

</div>
