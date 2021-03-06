<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" type="image/png" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>r</text></svg>" >


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
      <ul>
        <?php foreach ($site->children()->listed() as $subpage) : ?>
          
            <li><a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></li>
          
        <?php endforeach ?>

        <li><a href="mailto:bte.rainfield@gmail.com">contact</a></li>

        </ul>
      </div>

      <div id="contents">