<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div id="oneBlocks">

<?php foreach ($page->children() as $more) : ?>

  <div class="textOneBlock">
    <h2><?= $text->title() ?></h2>
    <p><?= $text->input() ?></p>
  </div>

<?php endforeach ?>

</div>

<!--
<div id="blocks">
    <?php foreach ($page->children() as $more) : ?>
      <a href="<?= $more->input() ?>" target="_blank">
        <div class="block">
          <p class="box"><?= $more->title() ?></p>
        </div>
      </a>
    <?php endforeach ?>
  </div>-->
