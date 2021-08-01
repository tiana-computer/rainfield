<div>
<?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

    <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="width: 500px;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption id="caption"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

    <?php if ($file->type() == 'video') : ?>
  
        <figure class="threeBox">
          <video controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

  <?php endforeach ?>

    </div>

