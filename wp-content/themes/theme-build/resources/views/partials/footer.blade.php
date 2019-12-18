
<footer>
   <div class="scroll-top">
       <a id="toTop" href="#"></a>
   </div>
       <div class="container">


               <div class="footet-Definition row">
                       <div class="logo col-lg-4">
                         <img class="img-fluid" height="50" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
                                <div class="log-number-gb">
                                       <div class="gpe">
                                               <div>
                                                       <i class="fas fa-map-marker-alt "></i>
                                               </div>
                                                  <div>

                                                               Floor 16, Malaco Alimar Tower,<br>
                                                               Courniche El Nil, Maadi, Cairo, Egypt


                                                  </div>

                                           </div>

                                            <div class="phon gpe ">
                                                <div>
                                                       <i class="fas fa-phone-alt"></i>

                                                </div>
                                                <div>
                                                       Call us on<br>
                                                       (+202) 235 925 06
                                                </div>


                                            </div>

                                </div>


                           </div>
                           <div class="logo logo-link col-lg-4">
                                   <div class="titlee">
                                           <h6> Quilk links</h6>

                                        </div>
                                        <div class="log-number-gb row">
                                          @if (has_nav_menu('footer_navigation'))
                                          {!! wp_nav_menu(['theme_location' => 'footer_navigation' , 'container' => false,'menu_class' => 'navbar-nav  col-lg-6', 'walker'
                                          => new NavWalker()])
                                          !!}
                                          @endif




                                        </div>
                           </div>
                           <div class="logo logo-link logo-link3 col-lg-4">
                               <div class="titlee">
                                       <h6> newsletter </h6>

                                    </div>
                                    <div class="log-number-gb ">
                                       sign-up for news & updates
                                       <div class="input-button">
                                               <input  class=""type="email"placeholder="Your mail">
                                               <button class=" btn"type="submit">
                                                       <img src="<?=get_field('subscription_button','option')?>">
                                               </button>

                                       </div>

                                    </div>

                           </div>



       </div>

       <div class="secil-link row">
               <div class="social text-center col-md-8">
                       <ul class="list-unstyled">
                           <li><a class="icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a  class="icon" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a  class="icon" href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                           <li><a  class="icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="icon"  href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                           <li><a  class="icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                       </ul>
                   </div>
                   <div class="link col-md-4 text-center">


                           <a href="#" target="-blank">Copyright © 2019 Greest company</a>
                   </div>
       </div>
       </div>
   </footer>
<!--end footer-->
