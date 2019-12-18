<header>
  
  <div class="row hader-top">
      <div class="col-md-6 social text-center ">
              Visit Us  Sunday to Thursday from 9:00 am - 5:00 pm
      </div>
      <div class="col-md-6">
        <div class="social text-center">
          <ul class="list-unstyled">
              <li><a class="icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
               <li><a class="icon"  href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li><a  class="icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              <?php echo e(Utilities::language_selector_flags()); ?>

          </ul>
        </div>
      </div>
  </div>

  <div class="nav-hader-buton nav-hom">
    <div class="container">
      <nav class="navbar navbar-expand-sm">
          <a href="<?php echo e(home_url('/')); ?>" title="<?php echo e(get_bloginfo('name')); ?>">
            <img class="img-fluid" height="50" src="<?php if(get_field('website_logo', 'option')): ?> <?php echo e(the_field('website_logo','option')); ?> <?php else: ?> <?php echo e(get_theme_file_uri().'/dist/images/logo.png'); ?> <?php endif; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" title="<?php echo e(get_bloginfo('name')); ?>"/>
            <span class="sr-only"> <?php echo e(get_bloginfo('name')); ?> </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <?php if(has_nav_menu('primary_navigation')): ?>
              <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto', 'walker' => new NavWalker()]); ?>

            <?php endif; ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                  <form id="demo-2">
                    <input type="search" placeholder="">
                  </form>
               </li>
            </ul>
          </div>
      </nav>
    </div>
  </div>
</header>
