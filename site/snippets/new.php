<style>

* {
    scrollbar-color: white blue !important;
    scrollbar-width: thin !important;
  }

  .newreleaseimg {
    width: 40%;
    float: right; 
    border: 1px solid blue;
}

@media(max-width: 800px) {
  .newreleaseimg {
        width: 100%;
        float: none;
        padding-bottom: 20px; 
    }
}
@media only screen and(max-device-width: 566px) {
  .newreleaseimg {
        width: 100%;
        float: none;
        padding-bottom: 20px; 
    }
}

</style>

<div>
<img class="newreleaseimg" src="../content/5_new/1_hi/piccoverfinal.png"/>



</div>





<div id="oneBlocks" style="grid-gap: 5px;">

<?php foreach ($page->children() as $new) : ?>

  <div class="textOneBlock" style="max-width: 100%;">
    <h2 class="link"><a href="<?= $new->input() ?>"><?= $new->title() ?><a></h2>
  </div>

<?php endforeach ?>

</div>
