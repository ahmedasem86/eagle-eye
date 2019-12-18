<!--stertsever -->
<div class="component-sever">
   <div class="container">
     <div class="component-sever-titlo">
         <div class="desecerption">
             <div class="title">

                     <h6><?=get_field('recycling_army_title')?></h6>
                  </div>
                  <p><?=get_field('recycling_army_description')?></p>
     </div>

       <div class="container">
           <div class="desecerption">
               <div class="title">
                       <h6><?=get_field('services_title')?></h6>
                    </div>
       </div>
          <div class="row">

            <?php
              $rows = get_field('services_posts');
              if($rows){
              	foreach($rows as $row){?>
                  <div class="sever col-md-3 text-center">
                       <div class="card ">
                           <div class="imag-sever">
                                   <img src="<?=$row['service_image']?>" class="card-img-top" alt="...">
                           </div>
                               <div class="card-body ">
                                 <h6 class="card-title"><?=$row['service_title']?></h6>
                                 <p class="card-text"><?=$row['service_description']?></p>
                               </div>
                             </div>
                  </div>
              <?php	}
              }
            ?>
          </div>
       </div>
     </div>

  </div>
</div>
<!--end sever-->
