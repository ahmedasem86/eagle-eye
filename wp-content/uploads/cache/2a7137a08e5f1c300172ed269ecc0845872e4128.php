<header>
  
  

  
  <div class="SimpleHeader-Container">
      <div class="SimpleHeader">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-linkedin-in"></i>
              <div class="split"></div>
              <div class="lang">
                  <a href="#"> العربيه</a>
              </div>

      </div>
  </div>
  <!------------------------------------------------- End OF Simple Header -------------------------------------------------- -->
  <!------------------------------------------------- Start Of Header -------------------------------------------------- -->
      <div class="header" id="header">
          <header id="hdr">
              <div class="logo">
                  <a href="index.html"><img id="Logo_1" class="img-fluid" src="<?php if(get_field('website_logo', 'option')): ?> <?php echo e(the_field('website_logo','option')); ?> <?php else: ?> <?php echo e(get_theme_file_uri().'/dist/images/logo.png'); ?> <?php endif; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" title="<?php echo e(get_bloginfo('name')); ?>"/></a>
                  <a href="index.html"><img id="Logo_2" class="img-fluid Logo_Sticky" src="<?php if(get_field('created_website_logo', 'option')): ?> <?php echo e(the_field('created_website_logo','option')); ?> <?php else: ?> <?php echo e(get_theme_file_uri().'/dist/images/logo.png'); ?> <?php endif; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" title="<?php echo e(get_bloginfo('name')); ?>"/></a>
              </div>
              <div class="MenuButton">
                  <input type="checkbox" id="MenuButton-btn" class="MenuButton-btn">
                  <label for="MenuButton-btn" id="MenuButton-lbl" class="MenuButton-lbl">
                  Menu <i class="fa fa-bars"  ></i>
                  </label>
                  <nav>
                  <?php if(has_nav_menu('primary_navigation')): ?>
                    <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav', 'walker' => new NavWalker()]); ?>

                  <?php endif; ?>

                  </nav>
              </div>
          </header>

          <div class="All_Anmimate">
              <!----------------------- Animation -------------------------->
              <div class="HeaderText">
                  <!---------------------------1 -------------------------->
                  <div class="First-Animate">
                      <div class="up-animation">
                      </div>
                      <div class="down-animation">
                      </div>
                  </div>
                  <!---------------------------2 -------------------------->
                  <div class="Second-Animate">
                      <div class="TextUp">
                          <P> luxury of living </P>
                      </div>
                      <div class="TextDown">
                          <P> Working Collaboratively</P>
                      </div>
                  </div>
                  <!---------------------------3 -------------------------->
                  <div class="Box Box_animate_1" >
                      <div class="Box_up animate_1_up"></div>
                      <div class="Box_down animate_1_down"></div>
                  </div>
                  <!---------------------------4 -------------------------->
                  <div class="Box Box_animate_2">
                      <div class="Box_up"></div>
                      <div class="Box_down"></div>
                  </div>
                  <!---------------------------5 -------------------------->
                  <div class="Box">
                      <div class="Box_up">
                          <P>Your system is interactive</P>
                      </div>
                      <div class="Box_down">
                          <P>Working Collaboratively </P>
                      </div>
                  </div>
              </div>
              <!------------------- End Of Animation ----------------------->
              <div class="SearchFilters">
                  <div class="SearchTitles">
                      <a >Buy</a>
                      <a  class="active">Rent</a>
                  </div>
                  <div class="Search">
                      <div class="BasicSearch">
                          <div class="PropertyType">
                              <h1> property type </h1>
                              <select name="" id="">
                                  <option value="1" selected >Appartment</option>
                                  <option value="2">aa</option>
                                  <option value="3">bb</option>
                                  <option value="4">cc</option>
                              </select>
                          </div>
                          <div class="location">
                              <h1>Location </h1>
                              <input type="text" name="input-location" id="input-search" placeholder="Location" class="input-location" />
                          </div>
                          <div class="SearchBtn Btn_a " >
                              <i class="fas fa-search"></i>
                              <input type="submit"  value="Search" class="Unset"  >
                          </div>
                          <div class="AdvanceSearch"  id="AdvanceSearch">
                              <h1> Advance Search </h1>
                              <i id='asmaa' class="fas fa-caret-square-down"></i>
                          </div>
                      </div>

                      <div class="advanced-Search">
                          <div class="Price">
                              <h1> Price Range </h1>
                              <select name="" id="">
                                  <option disabled selected value> select </option>
                                  <option value="1">10,000-50,000</option>
                                  <option value="2">51,000-100,000</option>
                                  <option value="3">101,000-200,000</option>
                              </select>
                          </div>
                          <div class="BedRooms">
                                  <h1> Number Of Bedrooms</h1>
                                  <select name="" id="">
                                      <option disabled selected value> select </option>
                                      <option value="1">1-3</option>
                                      <option value="2">3-6</option>
                                      <option value="3">6-10</option>
                                  </select>
                          </div>
                          <div class="AreaSize">
                              <h1>  Property Area ( Size )</h1>
                              <select name="" id="">
                                  <option disabled selected value> select </option>
                                  <option value="1">40-80</option>
                                  <option value="2">80-150</option>
                                  <option value="3">150-500</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <!------------------------------------------------- End OF Header -------------------------------------------------- -->
  <!------------------------------------------------- Who We Are  -------------------------------------------------- -->
      <section class="com-WhoWeAre" id="com-WhoWeAre" >
          <div class="sec-header">
              <h1> who are we </h1>
          </div>
          <div class="WhoWeAre">
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque, molestiae iusto! Alias porro enim atque vel similique
                  dolorum ipsa itaque, praesentium mollitia dolor illo qui deleniti
                  modi quas nemo asperiores!
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque, molestiae iusto! Alias porro enim atque vel similique
                  dolorum ipsa itaque, praesentium mollitia dolor illo qui deleniti
                  modi quas nemo asperiores!
              </p>
              <img src="Assets/imgs/PNG/logo2.png" alt=" logo ">
          </div>
          <div class="Div_Btn_a">
              <a class="Btn_a" href="#"> Read More</a>
          </div>
      </section>
  <!------------------------------------------------- End OF Who We Are  -------------------------------------------------- -->
  <!------------------------------------------------- Featured Properties  -------------------------------------------------- -->

      <section class="com-FeatureProperties" id="com-FeatureProperties" >
          <div class="sec-header">
              <h1> Featured Properties </h1>
          </div>
          <div class="sec-content">
              <div class="sec-part">
                  <div class="sec-part-one">
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/1.png" alt="">
                          <div class="ImgText">
                              <h1> Your System Is Interactive</h1>
                              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                          </div>
                      </div>
                  </div>
                  <div class="sec-part-twice">
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/2.png" alt="">
                          <div class="ImgText">
                                  <h1> Your System Is Interactive</h1>
                                  <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                              </div>
                      </div>
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/3.png" class="joko" alt="">
                          <div class="ImgText">
                                  <h1> Your System Is Interactive</h1>
                                  <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="sec-part">
                  <div class="sec-part-twice">
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/4.png" alt="">
                          <div class="ImgText">
                                  <h1> Your System Is Interactive</h1>
                                  <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                              </div>
                      </div>
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/5.png" alt="">
                          <div class="ImgText">
                                  <h1> Your System Is Interactive</h1>
                                  <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                              </div>
                      </div>
                  </div>
                  <div class="sec-part-one">
                      <div class="Img_Cover">
                          <img src="Assets/imgs/PNG/6.png" alt="">
                          <div class="ImgText">
                              <h1> Your System Is Interactive</h1>
                              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsa ea eveniet laboriosam vero? Sed velit</p>
                          </div>
                      </div>

                  </div>

              </div>
          </div>

          <div class="Div_Btn_a">
              <a class="Btn_a" href="#"> See More</a>
          </div>
      </section>
  <!-------------------------------------------------End OF  Featured Properties  -------------------------------------------------- -->
  <!-------------------------------------------------Contact Us  -------------------------------------------------- -->
      <section class="com-contactUs" id="com-contactUs">
          <div class="sec-header">
              <h1> Contact Us </h1>
          </div>
          <div class="contactUs">
              <div class="inputs">
                  <input type="text" placeholder="Name"  id="name" name="name"/>
                  <input type="text" placeholder="Email" id="Email" name="Email" />
                  <input type="text" placeholder="Mobile" id="Mobile" name="Mobile" />
                  <textarea placeholder="Message" ></textarea>
                  <input type="submit" id="subscribe" name="subscribe"  value ="Subscribe" class="Btn_a"/>
              </div>
              <div class="imgs">
                  <img src="Assets/imgs/PNG/dot.png" alt="dotted" class="back"   >
                  <img src="Assets/imgs/PNG/Mask-Group-11.png" alt="mask"  class="over" >
              </div>
          </div>
      </section>

  <!-------------------------------------------------End OF Contact Us  -------------------------------------------------- -->
  <!-------------------------------------------------Footer  -------------------------------------------------- -->

      <section class="Com-Footer" id="Com-Footer">
          <div class="FooterUp">
              <div class="FooterLeft">
                  <img src="Assets/imgs/PNG/logo-old.png" alt="logo">
                  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum qui ad obcaecati blanditiis natus provident, corrupti assumenda,
                      sapiente eos tempora eum dolorem earum voluptatem ea possimus? Voluptatum, doloribus aliquid?</p>
              </div>
              <div class="FooterRight">
                  <div class="FooterMenu">
                      <h1> <a href="#">Product</a></h1>
                      <a href="#"> Who We Are </a>
                      <a href="#"> Portoflio </a>
                      <a href="#"> CONSTRUCTION UPDATE</a>
                  </div>
                  <div class="FooterMenu">
                          <h1> <a href="#">Support</a></h1>
                          <a href="#">Blog </a>
                          <a href="#">Help </a>
                          <a href="#">FAQ </a>
                  </div>
                  <div class="FooterMenu">
                          <h1> <a href="#">Contact</a></h1>
                          <a href="#"> info@eagleeye.com </a>
                          <a href="#"> Portoflio </a>
                          <a href="#"> 809-347-1289</a>
                  </div>
              </div>
          </div>
          <hr/>
          <div  class="FooterDown" >
              <div>
                  <i class="fab fa-facebook"></i>
                  <i class="fab fa-twitter-square"></i>
                  <i class="fab fa-instagram"></i>
              </div>
              <div>All Rights Reserved - 2019</div>
          </div>
      </section>

</header>
