<div id="oneBlocks">

<?php foreach ($page->children() as $text) : ?>

  <div class="textOneBlock">
    <h2><?= $text->title() ?></h2>
    <p><?= $text->text() ?></p>
  </div>

<?php endforeach ?>

</div>