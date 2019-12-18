<!--stert content-->
<div class="component-contact-us">
 <div class="container">
   <div class="desecerption">
     <div class="title">
             <h6><?=get_field('contactus_title')?></h6>
          </div>
          <p><?=get_field('contactus_description')?></p>
</div>

   <div class="component-contact row">
       <div class="col-md-6 col-sm-12">
         <img src="<?=get_field('contactus_image')?>">
       </div>
       <div class="content-us-division col-md-6 col-sm-12">

            <div class="contact-form">
            <?= do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' );?>
            </div>
       </div>
   </div>
 </div>
</div>
<!--end content-->
