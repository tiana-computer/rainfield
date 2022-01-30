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

  .home-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
</style>

<div class="home-container">

  <div class="home-item">

    <p><?= $page->about() ?></p>
    <br>
    <span class="oneBlock"><?= $page->music() ?></span>
    <br><br>
    <span class="oneBlock"><?= $page->youtube() ?></span>
    <br><br>
    <p><?= $page->more() ?></p>

  </div>

  <div class="home-item">

    <?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

      <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="display: block; margin: 0 auto; height: 70vh; width: auto;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

      <?php endif ?>

      <?php if ($file->type() == 'video') : ?>

        <figure class="threeBox">
          <video style="display: block; margin: 0 auto; height: 70vh; width: auto;" controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

      <?php endif ?>

    <?php endforeach ?>

  </div>

</div>