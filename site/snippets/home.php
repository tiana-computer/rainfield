<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

.captionHome {
    color: grey;
    font-size: 10pt;
    text-align: center;
    padding: 10px 0 0;
    margin: 0;
}

</style>

<div>

<p><?= $textarea->about() ?></p>

<?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

    <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="display: block; margin: 0 auto; width: 40vw; max-with: 1000px;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

    <?php if ($file->type() == 'video') : ?>
  
        <figure class="threeBox">
          <video style="display: block; margin: 0 auto; width: 40vw; max-with: 1000px;" controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

  <?php endforeach ?>

    </div>

