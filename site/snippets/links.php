<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children() as $links) : ?>

  <div class="textOneBlock" style="width: 100%;">
    <h2><a class="link" href="<?= $links->title() ?>"><?= $links->title() ?><a></h2>
    <p><?= $links->input() ?></p>
  </div>

<?php endforeach ?>

</div>
