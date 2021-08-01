<style>
      .visualGal {
        transition: 0.3s;
      }

      .visualGal:hover {
        opacity: 0.7;
      }

      .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
      }

      .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
      }

      .modal-content,
      #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @keyframes zoom {
        from {
          transform: scale(0);
        }
        to {
          transform: scale(1);
        }
      }

      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .close:hover,
      .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }

      @media only screen and (max-width: 700px) {
        .modal-content {
          width: 100%;
        }
      }
    </style>

<div id="threeBlocks" class="visual-grid">

  <?php foreach ($page->files()->sortBy('sort', 'asc') as $file) : ?>

    <?php if ($file->type() == 'image') : ?>
      <div class="threeBlock">
        <figure class="threeBox">
          <img class="myImages visualGal" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
          <figcaption><?= $file->caption() ?></figcaption>
        </figure>
      </div>
    <?php endif ?>

    <?php if ($file->type() == 'video') : ?>
      <div class="threeBlock">
        <figure class="threeBox">
          <video controls>
            <source src="<?= $file->url() ?>#t=1" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
          <figcaption><?= $file->caption() ?></figcaption>
        </figure>
      </div>
    <?php endif ?>

  <?php endforeach ?>

</div>

<div id="myModal" class="modal">
 <span class="close">&times;</span>
  <img class="modal-content" id="img01" />
  <!--<div id="caption"></div>-->
</div>


<script>
   // create references to the modal...
  var modal = document.getElementById("myModal");
  // to all images -- note I'm using a class!
  var images = document.getElementsByClassName("myImages");
  // the image in the modal
 var modalImg = document.getElementById("img01");
  // and the caption in the modal
  //var captionText = document.getElementById("<?= $file->caption() ?>");

  // Go through all of the images with our custom class
  for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function(evt) {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
      };
  }

  var span = document.getElementsByClassName("close")[0];

  span.onclick = function() {
  modal.style.display = "none";
  };
  </script>