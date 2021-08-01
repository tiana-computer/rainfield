<div id="blocks">
    <?php foreach ($page->children() as $more) : ?>
      <a href="<?= $more->input() ?>" target="_blank">
        <div class="block">
          <p class="box"><?= $more->title() ?></p>
        </div>
      </a>
    <?php endforeach ?>
  </div>
