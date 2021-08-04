<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children() as $links) : ?>

  <div class="textOneBlock" style="max-width: 70%;">
    <h2 class="link"><a href="<?= $links->title() ?>"><?= $links->title() ?><a></h2>
    <p><?= $links->input() ?></p>
  </div>

<?php endforeach ?>

</div>
