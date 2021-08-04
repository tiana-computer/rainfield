<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children() as $links) : ?>

  <div class="textOneBlock">
    <h2><?= $links->title() ?></h2>
    <p><?= $links->input() ?></p>
  </div>

<?php endforeach ?>

</div>
