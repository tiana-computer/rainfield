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

        <figure>
          <img style="width: 40%; float: right; border: 1px solid blue;" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption class="captionHome"><?= $file->caption() ?></figcaption>
        </figure>

  <?php endforeach ?>

    </div>


<div id="oneBlocks" style="grid-gap: 5px;">

<?php foreach ($page->children() as $new) : ?>

  <div class="textOneBlock" style="max-width: 100%;">
    <h2 class="link"><a href="<?= $new->input() ?>"><?= $new->title() ?><a></h2>
  </div>

<?php endforeach ?>

</div>
