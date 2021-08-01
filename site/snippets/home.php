<style>

  img {
    width: 90%;
    margin: 0 auto;
  }

</style>

<div>
<img class="myImages visualGal" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption><?= $file->caption() ?></figcaption>
</div>
