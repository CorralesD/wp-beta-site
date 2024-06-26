<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a href="<?php echo site_url() ?>""><strong>SanDiegoCounty</strong>.gov</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse main-navigation" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="https://www.sandiegocounty.gov/content/sdc/cosd/services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.sandiegocounty.gov/content/sdc/cosd/departments.html">Departments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.countynewscenter.com/">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('event') ?>">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.countynewscenter.com/">Locations</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>