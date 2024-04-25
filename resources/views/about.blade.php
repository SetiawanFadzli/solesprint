@extends('layouts.main')

@section('container')
	<div class="header_section header_bg">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                 @include('partial.navbar')
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about sectuion start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
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
@endsection