<div id="threeBlocks">

  <?php foreach ($page->images() as $image) : ?>

    <div class="threeBlock">

      <figure class="threeBox">

        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">

        <figcaption><?= $image->caption() ?></figcaption>

      </figure>

    </div>

  <?php endforeach ?>


</div>


<?php foreach ($page->files() as $file) : ?>

  <?php if ($file->type() == 'image') : ?>
    <div class="threeBlock">
      <figure class="threeBox">
        <img style="width: 200px;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
        <figcaption><?= $image->caption() ?></figcaption>
      </figure>
    </div>
  <?php endif ?>

  <?php if ($file->type() == 'video') : ?>
    <div class="threeBlock">
      <figure class="threeBox">
        <video style="width: 200px;" controls>
          <source src="<?= $file->url() ?>" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <figcaption><?= $file->caption() ?></figcaption>
      </figure>
    </div>
  <?php endif ?>

<?php endforeach ?>