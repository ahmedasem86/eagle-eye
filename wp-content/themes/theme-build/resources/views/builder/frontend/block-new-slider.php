<!--stert-slider-->
<div class="component-slider">

   <div class="bd-example">
           <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               <li  class="carousel-list"data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
               <li class="carousel-list"data-target="#carouselExampleCaptions" data-slide-to="1"></li>
               <li class="carousel-list"data-target="#carouselExampleCaptions" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner">
            <?php
            $rows = get_field('slider_image');
               if($rows)
               {
               	foreach($rows as $i => $row)
               	{
                  ?>
                  <div class="carousel-item <?=($i == 0)?'active' : ''?>">
                      <div class="imag-slider">
                        <img src="<?= $row['slide_background']?>" class="d-block w-100" alt="<?= $row['slide_title']?>">

                      </div>
                    <div class="carousel-caption d-md-block">
                        <img src="<?= $row['slide_logo']?>">
                      <h5><?= $row['slide_title']?></h5>
                      <p>We Offer Comprehensive Recycling Services </p>
                      <button type="button" class="btn">Order NOW</button>
                    </div>
                  </div>

                  <?php
               	}
              }
              ?>
             </div>
             <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
             <div class="slider-list-button">
                 <div class="container">
                       <ul class="list-group list-group-horizontal text-center">
                               <li class=""><img src="../imag/coin.png">PALLADIUM 50.11 USD/g</li>
                               <li class=""><img src="../imag/coin.png">PALLADIUM 50.11 USD/g</li>
                               <li class=""><img src="../imag/coin.png">PALLADIUM 50.11 USD/g</li>
                               <li class=""><img src="../imag/coin.png">PALLADIUM 50.11 USD/g</li>
                               <li class="">SEE MORE <i class="fas fa-chevron-right"></i></i>
                               </li>

                             </ul>
                 </div>

               </div>
           </div>


         </div>

</div>
<!--stert-slider-->
