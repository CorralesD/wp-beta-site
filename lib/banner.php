<?php
function pageBanner() { ?>
    <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/waterfrontpark.jpg') ?>);"></div>
          <div class="page-banner__content container t-center c-white">
            <h1 class="headline headline--large">Welcome to the</h1>
            <h2 class="headline headline--medium">County of San Diego</h2>
            <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          </div>
        </div>
    <?php
    }