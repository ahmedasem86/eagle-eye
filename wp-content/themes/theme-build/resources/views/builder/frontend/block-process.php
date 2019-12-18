<!--stert process-->
<div class="process">
 <div class="container">
   <div class="component-process">
       <div class="desecerption">
           <div class="title">
                   <h6><?= get_field('process_title') ?></h6>
                </div>

     </div>
     <div class="accordion" id="accordionExample">
               <?php
               $rows = get_field('q&a');
                 if($rows)
                 {
                 	foreach($rows as $i => $row)
                 	{?>
                    <div class="card">
                       <div class="card-header card-gid" id="heading-<?=$i?>">
                          <h2 class="mb-0"><?=$row['process_question']?></h2>
                           <button class="btn btn-link collapsed" id="button-clik" type="button" data-toggle="collapse" data-target="#collapse-<?=$i?>s" aria-expanded="false" aria-controls="collapse-<?=$i?>s">
                              <i class="fas fa-sort-down"></i>
                           </button>
                       </div>
                       <div id="collapse-<?=$i?>s" class="collapse" aria-labelledby="heading-<?=$i?>" data-parent="#accordionExample">
                         <div class="card-body"><?= $row['process_answer']?></div>
                       </div>
                     </div>
                   <?php }
                }
              ?>




         <div class="card">
           <div class="card-header card-gid" id="headingTwo">
             <h2 class="mb-0">
                 Question number 01 goes in here?


             </h2>
             <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     <i class="fas fa-sort-down"></i>

                 </button>

           </div>
           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
             <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.

             </div>
           </div>
         </div>
         <div class="card">
           <div class="card-header card-gid " id="headingThree">
             <h2 class="mb-0">
                 Question number 01 goes in here?


             </h2>
             <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <i class="fas fa-sort-down"></i>

                 </button>
           </div>
           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
             <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.

             </div>
           </div>
         </div>

         <div class="card">
                 <div class="card-header card-gid " id="headingTwoe">
                   <h2 class="mb-0">
                       Question number 01 goes in here?
                     </h2>
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwooe" aria-expanded="false" aria-controls="collapseTwooe">

                         <i class="fas fa-sort-down"></i>

                     </button>

                 </div>
                 <div id="collapseTwooe" class="collapse" aria-labelledby="headingTwoe" data-parent="#accordionExample">
                   <div class="card-body">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.

                   </div>
                 </div>
               </div>

               <div class="card">
                 <div class="card-header card-gid " id="headingTwoe">
                   <h2 class="mb-0">
                       Question number 01 goes in here?
                     </h2>
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                         <i class="fas fa-sort-down"></i>

                     </button>

                 </div>
                 <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwoe" data-parent="#accordionExample">
                   <div class="card-body">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.

                   </div>
                 </div>
               </div>

               <div class="card">
                 <div class="card-header card-gid" id="headingThree">
                   <h2 class="mb-0">
                       Question number 01 goes in here?
                     </h2>
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreee" aria-expanded="false" aria-controls="collapseThreee">
                         <i class="fas fa-sort-down"></i>

                     </button>

                 </div>

                 <div id="collapseThreee" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                   <div class="card-body">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.

                   </div>
                 </div>
               </div>
       </div>
   </div>


 </div>
</div>
<!--end process-->
