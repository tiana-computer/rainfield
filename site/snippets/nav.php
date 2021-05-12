<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" type="image/png" href="assets/drop.png" >


  <title><?= $site->title() ?></title>

  <!-- import the webpage's stylesheet -->
  <?= css('assets/css/style.css') ?>

  <!-- import the webpage's javascript file -->
  <script src="/script.js" defer></script>
</head>

<body>
  <div id="main">

    <h1 class="header"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>

    <div class="container">
      <div id="nav">

        <?php foreach ($site->children()->listed() as $subpage) : ?>
          <ul>
            <li><a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></li>
          </ul>
        <?php endforeach ?>

      </div>

      <div id="contents">