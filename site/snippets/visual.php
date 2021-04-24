<div id="threeBlocks">

  <?php foreach ($page->images()->sortBy('sort', 'asc') as $image) : ?>

    <div class="threeBlock">

      <figure class="threeBox">

        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">

        <figcaption><?= $image->caption() ?></figcaption>

      </figure>

    </div>

  <?php endforeach ?>


</div>

<?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

  <?php if ($file->type() == 'image') : ?>
    <figure>
      <img style="width: 200px;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
    </figure>
  <?php endif ?>

  <?php if ($file->type() == 'video') : ?>
    <figure>
      <video style="width: 200px;" controls>
        <source src="<?= $file->url() ?>" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </figure>

  <?php endif ?>

<?php endforeach ?>