<!-- Popup it self -->
<div id="search" class="white-popup mfp-with-anim mfp-hide search-box">
  <div class="search-header banner">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logos mr-auto">
          <a class="navbar-brand" href="<?php echo e(home_url('/')); ?>" title="<?php echo e(get_bloginfo('name')); ?>">
            <img class="img-fluid" src="<?php if(get_field('website_logo', 'option')): ?> <?php echo e(the_field('website_logo','option')); ?> <?php else: ?> <?php echo e(get_theme_file_uri().'/dist/images/logo.png'); ?> <?php endif; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" title="<?php echo e(get_bloginfo('name')); ?>"/>
            <span class="sr-only"> <?php echo e(get_bloginfo('name')); ?> </span>
          </a>
        </div>
        <div class="nav-right">
            <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto mr-md-5', 'walker' => new NavWalker()]); ?>

          <?php endif; ?>
  
          <div class="site-search inline-popups mr-md-5">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
          </div>
          <a class="navbar-brand logo-created" href="<?php echo e(home_url('/')); ?>" title="<?php echo e(get_bloginfo('name')); ?>">
            <img class="img-fluid" src="<?php if(get_field('created_website_logo', 'option')): ?> <?php echo e(the_field('created_website_logo','option')); ?> <?php else: ?> <?php echo e(get_theme_file_uri().'/dist/images/logo-created.png'); ?> <?php endif; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" title="<?php echo e(get_bloginfo('name')); ?>"/>
            <span class="sr-only"> <?php echo e(get_bloginfo('name')); ?> </span>
          </a>
        </div>
      </nav>
    </div>
  </div>
  <div class="search-box slideInUp">
    <main class="main-wrap">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-12 col-sm-12 col-xs-12 m-auto">
            <form class="search-form" action="<?php echo e(bloginfo('url')); ?>">
              <div class="input-group col-12 p-0">
                <input id="autocomplete" class="search-input form-control" name="s" value="<?php echo e(get_search_query()); ?>" type="search" placeholder="<?php echo e(_e('type to search...','builder')); ?>" autocomplete="off" spellcheck="false" maxlength="100">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
