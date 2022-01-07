<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

</style>

<div>
<img src="../content/5_new/1_hi/piccoverfinal.png" style="width: 40%; float: right; border: 1px solid blue;"/>



</div>

<div>
<?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

    <?php if ($file->type() == 'image') : ?>

        <figure>
          <img style="width: 40%; float: right; border: 1px solid blue;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

    <?php if ($file->type() == 'video') : ?>
  
        <figure class="threeBox">
          <video style="width: 40%; float: right; border: 1px solid blue;" controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

    <?php endif ?>

  <?php endforeach ?>

    </div>


<div id="oneBlocks" style="grid-gap: 5px;">

<?php foreach ($page->children() as $new) : ?>

  <div class="textOneBlock" style="max-width: 100%;">
    <h2 class="link"><a href="<?= $new->input() ?>"><?= $new->title() ?><a></h2>
  </div>

<?php endforeach ?>

</div>
