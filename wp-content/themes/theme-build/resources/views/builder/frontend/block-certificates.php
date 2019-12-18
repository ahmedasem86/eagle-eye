<!--stert ceritications-->
<div class="component-ceritications">
   <div class="container">
        <div class="ceritications-title">
           <div class="desecerption">
               <div class="title">
                       <h6><?=get_field('certification_title')?></h6>
                    </div>
                    <p><?=get_field('certification_description')?></p>
       </div>
           <div class="row component-ceriti3">

                    <?php
                       $rows = get_field('certifications_list');
                       if($rows)
                       {
                       	foreach($rows as $row)
                       	{
                          ?>
                          <div class="col-md-4 ceriti3 text-center">
                              <div class="card text-center  component1 ">
                                      <div class="card-body ">
                                        <h5 class="card-title">
                                          <?=$row['standard_code'] ?>
                                        </h5>
                                      </div>
                                      <div class="card-imag">
                                              <img src="<?=$row['standard_image'] ?>" class="card-img-top" alt="<?=$row['standard_code'] ?>">
                                      </div>
                                       <h6>CERTIFIED</h6>
                                    </div>
                                    <div class="after-component"><?=$row['standard_code'] ?></div>
                                  </div>
                       	<?php
                        }
                       }
                       ?>
           </div>


        </div>


       </div>
</div>
<!--end ceritications -->
