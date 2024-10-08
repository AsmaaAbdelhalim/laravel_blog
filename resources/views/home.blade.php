
@extends('layouts.app')
@section('content')

<!-- Image of location/map -->

  <div class="page-hero bg-image overlay-dark" style="background-image: url('img/bg_image_1.jpg');">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Popular Posts</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
      @foreach($popularPosts as $post)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$post->title}}</p>
              <span class="text-sm text-grey">{{$post->shortBody(10)}}</span>
              <a href="{{route('view', $post)}}" class="text-xs uppercase text-gray-800 hover:text-black">ContinueReading <i class="fas fa-arrow-right"></i>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


        <div class="page-section bg-light">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Latest Post</h1>
    <div class="row mt-5">
      
        @if ($latestPost)
        <x-post-item :post="$latestPost"/>
         @endif
      </div>
      
      <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="blog.html" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
</div> <!-- .page-section -->
@if ($latestPost)
<div class="page-section banner-home bg-image" style="background-image: url(img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{$latestPost->thumbnail}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3"><x-post-item :post="$latestPost"/></h1>
          <a href="#"><img src="img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> 
  @endif
  <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> 
  <!-- .banner-home -->

<!-- Recommended posts -->
<div class="mb-8">
    <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
        Recommended Posts
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        @foreach($recommendedPosts as $post)
            <x-post-item :post="$post" :show-author="false"/>
        @endforeach
    </div>
</div>
        <!-- Latest Categories -->

        @foreach($categories as $category)
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Category "{{$category->title}}"
                    <a href="{{route('by-category', $category)}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </h2>

                <div class="mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        @foreach($category->publishedPosts()->limit(3)->get() as $post)
                            <x-post-item :post="$post" :show-author="false"/>
                            {{$post->title}}
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

