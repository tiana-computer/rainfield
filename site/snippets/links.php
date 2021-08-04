<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks" style="grid-gap: 10px;">

<?php foreach ($page->children() as $links) : ?>

  <div class="textOneBlock" style="max-width: 100%;">
    <h2 class="link"><a href="<?= $links->title() ?>"><?= $links->title() ?><a></h2>
  </div>

<?php endforeach ?>

</div>
