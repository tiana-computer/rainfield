<div id="blocks">
    <?php foreach ($page->children() as $home) : ?>
      <a href="<?= $home->link() ?>" target="_blank">
        <div class="block">
          <p class="box"><?= $home->title() ?></p>
        </div>
      </a>
    <?php endforeach ?>
  </div>
