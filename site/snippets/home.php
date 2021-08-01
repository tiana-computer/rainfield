<style>

.captionHome {
    color: grey;
    font-size: 10pt;
    text-align: center;
    padding: 10px 0 0;
    margin: 0;
}

</style>
<div>
<?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

    <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="display: block; margin: 0 auto; width: 50vw;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

    <?php if ($file->type() == 'video') : ?>
  
        <figure class="threeBox">
          <video controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

  <?php endforeach ?>

    </div>

