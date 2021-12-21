<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks" style="grid-gap: 5px;">

<img src="@\content\5_new\1_hi\piccoverfinal.png" style="width: 400px;"/>

<?php foreach ($page->children() as $new) : ?>

  <div class="textOneBlock" style="max-width: 100%;">
    <h2 class="link"><a href="<?= $new->input() ?>"><?= $new->title() ?><a></h2>
  </div>

<?php endforeach ?>

</div>
