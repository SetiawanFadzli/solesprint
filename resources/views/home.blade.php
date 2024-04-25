@extends('layouts.main')

@section('container')
	<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               @include('partial.navbar')
            </nav>
         </div>
	 <div class="banner_section layout_padding">
			<div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">STYLE WITH SOUL</h1>
                                 <p class="banner_text">Where every step embodies the essence of local spirit and global flair </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="/contact">Contact US</a></div>
                                    <div class="started_text"><a href="/about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">STYLE WITH SOUL</h1>
                                 <p class="banner_text">Where every step embodies the essence of local spirit and global flair </p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="/contact">Contact US</a></div>
                                    <div class="started_text"><a href="/about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">STYLE WITH SOUL</h1>
                                 <p class="banner_text">Where every step embodies the essence of local spirit and global flair</p>
                                 <div class="btn_main">
                                    <div class="started_text active"><a href="/contact">Contact US</a></div>
                                    <div class="started_text"><a href="/about">About Us</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
           
         </div>
        <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Our Services</h1>
                  <p class="services_text_1">Our service is not just about providing quality shoes, but also about aligning steps to your needs, providing a friendly and memorable experience every step of your journey.</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main active">
                        <div class="service_img"><img src="images/icon-1.png"></div>
                        <h4 class="development_text">Personal Customitation</h4>
                        <p class="services_text">Services to customize shoe designs according to customer preferences, starting from choosing colors, materials, to special details, so that each pair of shoes is unique according to taste.</p>
                        <!--<div class="readmore_bt"><a href="#">Read More</a></div>-->
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-2.png"></div>
                        <h4 class="development_text">Local Quality Assurance</h4>
                        <p class="services_text">Offering guaranteed high quality sourced locally, with an emphasis on quality handicrafts and environmentally friendly materials, to ensure customer satisfaction and support the local economy.</p>
                        <!--<div class="readmore_bt"><a href="#">Read More</a></div>-->
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-3.png"></div>
                        <h4 class="development_text">Customer Rewards</h4>
                        <p class="services_text">Provide loyalty programs to loyal customers, such as special discounts, exclusive access to the latest collections, and the opportunity to participate in special events or promotions as a token of appreciation for their support.</p>
                        <!--<div class="readmore_bt"><a href="#">Read More</a></div>-->
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_main">
                        <div class="service_img"><img src="images/icon-4.png"></div>
                        <h4 class="development_text">Friendly Customer Service</h4>
                        <p class="services_text">Provide responsive and friendly customer service, both through online and offline platforms, to assist customers with their questions, problems or special requests, thereby creating a pleasant and memorable shopping experience.</p>
                        <!--<div class="readmore_bt"><a href="#">Read More</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about sectuion start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">Our local shoe brand, "Sole Sprints", offers a collection of shoes that combines urban style with a distinctive local touch, reflecting a creative spirit and extraordinary craftsmanship. From trendy designs to unmatched quality, we prioritize customer satisfaction and our commitment to the local environment every step of the way. Join us in wearing shoes that not only exude style, but also connect the soul with comfort at all times. </p>
                  <!--<div class="read_bt_1"><a href="#">Read More</a></div>-->
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <div class="video_bt">
                        <div class="play_icon"><img src="images/play-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about sectuion end -->
      <!-- projects section start -->
      <div class="projects_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="projects_taital">Projects</h1>
                  <div class="nav-tabs-navigation">
                     <div class="nav-tabs-wrapper">
                        <ul class="nav " data-tabs="tabs">
                           <li class="nav-item">
                              <a class="nav-link active" href="#" data-toggle="tab">Category  filter</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">All</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">UrbanStride Series</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">HeritageCraft Collection</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">CityChic Range</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">AdventurePulse Series</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="projects_section_2 layout_padding">
            <div class="container">
               <div class="pets_section">
                  <div class="pets_section_2">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                        <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-2.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-3.png" alt="" class="image">
                                       <div class="overlay">
                                          <div class="text">
                                             <h4 class="some_text"><i class="fa fa-link" aria-hidden="true"></i></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text">Home Work</h2>
                                       <p class="dummy_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- projects section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">Sepatu UrbanSoul sungguh memukau! Desainnya yang unik dan kenyamanan yang luar biasa membuat saya selalu siap menghadapi hari-hari sibuk di kota.</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">Saya benar-benar terkesan dengan kualitas kerajinan dari HeritageCraft Collection. Setiap langkah saya memberikan rasa bangga akan warisan lokal yang terpancar dari sepatu ini.</p>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">Sole Sprints benar-benar memenuhi ekspektasi saya! Mereka tidak hanya nyaman untuk dipakai sepanjang hari, tetapi juga tahan lama dan selalu menarik perhatian orang di sekitar saya.</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">Saya sangat senang dengan pembelian saya dari HeritageCraft Collection. Setiap kali saya memakainya, saya merasa seperti membawa sepotong sejarah dengan saya, dan kualitasnya tidak pernah mengecewakan.</p>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="testimonial_taital">Testimonial</h1>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text">Molik <span style="float: right;"><img src="images/quick-icon.png"></span></h2>
                              <p class="textimonial_text">CityChic Range dari brand lokal ini adalah penyelamat gaya hidup perkotaan saya! Mereka memberikan sentuhan modis pada setiap langkah saya dan membuat saya merasa percaya diri di tengah keramaian kota.</p>
                          </div>
                          <div class="testimonial_section_2">
                              <h2 class="client_name_text"><img src="images/quick-icon.png"> <span style="float: right;">jeaanson</span></h2>
                              <p class="textimonial_text">AdventurePulse Series sungguh menjadi pilihan terbaik untuk saya yang aktif di alam. Mereka kokoh, nyaman, dan memberikan performa luar biasa saat saya menjelajahi alam bebas. Sungguh sepatu yang tepat untuk petualangan!</p>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Contact Us</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_left_15">
                     <div class="contact_img"><img src="images/contact-img.png"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
@endsection