<style>
  * {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

  .captionHome {
    color: grey;
    font-size: 10pt;
    text-align: center;
    padding: 10px;
    margin: 0;
  }

  .home-container {
    display: grid;
    grid-template-columns: 350px 1fr;
    color: grey;
    font-size: 15pt;
    line-height: 1.6;
  }

  .home-item {
    width: 350px;
  }

  a {
    text-decoration: none;
    color: blue;
    transition: 0.8s;
  }

  a:hover {
    color: gainsboro;
    text-decoration: none;
  }

  .home-item figure {
    display: block;
    margin: 0 auto;
    border: 1px solid blue;
    width: 325px;
    float: right;
    margin-bottom: 60px;
    line-height: 1;
  }

  .home-item1 {
    margin-right: 50px;
    width: 325px;
  }



  @media(max-width: 800px) {

    .home-container {
      grid-template-columns: 1fr;
    }

    .home-item {
      width: 100%;
    }

    .home-item figure {
      width: 100%;
      margin-top: 25px;
    }

    .home-item1 {
      margin-right: 0px;
    }

  }
</style>

<div class="home-container">

  <div class="home-item home-item1">

    <span><?= $page->about() ?></span>
    <br><br>
    <span class="oneBlock"><?= $page->music() ?></span>
    <br><br>
    <span class="oneBlock"><?= $page->youtube() ?></span>
    <br><br>
    <span><?= $page->more() ?></span>

  </div>

  <div class="home-item">

    <?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

      <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="width: 100%;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
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

</div>