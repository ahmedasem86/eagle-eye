<!--stert testimon-->
<div class="component-testimony">
 <div class="container">
     <div class=" testimony-imag col-sm-12 text-center">
       <?php if(get_field('testmonials')): ?>
      	<?php while(has_sub_field('testmonials')): ?>
          <img  class="col-md-2"src="<?= the_sub_field('testmonial_images'); ?>">
      	<?php endwhile; ?>
      <?php endif; ?>
     </div>
 </div>
</div>
<!--end testimon-->
