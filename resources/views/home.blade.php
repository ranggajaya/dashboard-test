@extends('layouts.app')

@section('content')

<!-- Fullscreen Image Slider -->
<div id="heroCarousel" class="carousel slide mt-n5" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-inner" style="height: 110vh;">
    <!-- Slide 1 -->
    <div class="carousel-item active position-relative">
      <img src="https://plus.unsplash.com/premium_photo-1679758630312-a3d601c411d8?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" style="object-fit: cover; height: 110vh;" alt="Slide 1">
      
      <!-- Overlay di bagian bawah gambar -->
      <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: rgba(0, 0, 0, 0.6);">
        <h2 class="text-white mb-1">Professional Flight Training</h2>
        <p class="text-white mb-0">Empowering pilots with excellence and safety</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item position-relative">
      <img src="https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" style="object-fit: cover; height: 110vh;" alt="Slide 2">
      
      <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: rgba(0, 0, 0, 0.6);">
        <h2 class="text-white mb-1">Private Charter Services</h2>
        <p class="text-white mb-0">Luxury, flexibility, and safety in the sky</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item position-relative">
      <img src="https://plus.unsplash.com/premium_photo-1661962354730-cda54fa4f9f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" style="object-fit: cover; height: 110vh;" alt="Slide 3">
      
      <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: rgba(0, 0, 0, 0.6);">
        <h2 class="text-white mb-1">Aviation Consultancy</h2>
        <p class="text-white mb-0">Trusted solutions for aviation excellence</p>
      </div>
    </div>
  </div>

  <!-- Navigation arrows (visible with white bg) -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="py-3 bg-light " id="highlights" >
  <div class="container mt-5">
    <div class="row justify-content-center g-0">
      <!-- Icon 1 -->
      <div class="col-6 col-sm-3 col-md-2">
        <div class="icon-item text-center" data-aos="fade-up">
          <img src="https://cdn-icons-png.flaticon.com/512/2913/2913461.png" alt="Flight" class="feature-icon">
          <p class="icon-title">Flight Training</p>
        </div>
      </div>
      <!-- Icon 2 -->
      <div class="col-6 col-sm-3 col-md-2">
        <div class="icon-item text-center" data-aos="fade-up" data-aos-delay="100">
          <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Charter" class="feature-icon">
          <p class="icon-title">Charter Services</p>
        </div>
      </div>
      <!-- Icon 3 -->
      <div class="col-6 col-sm-3 col-md-2">
        <div class="icon-item text-center" data-aos="fade-up" data-aos-delay="200">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Consulting" class="feature-icon">
          <p class="icon-title">Consulting</p>
        </div>
      </div>
      <!-- Icon 4 -->
      <div class="col-6 col-sm-3 col-md-2">
        <div class="icon-item text-center" data-aos="fade-up" data-aos-delay="300">
          <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="Safety" class="feature-icon">
          <p class="icon-title">Safety First</p>
        </div>
      </div>
    </div>

    <!-- Company Description -->
    <div class="row mt-3">
      <div class="col-md-10 offset-md-1 text-center" data-aos="zoom-in-up">
        <p class="lead mb-0">
          Griffon Aviation Services is a leading aviation provider dedicated to delivering safety and comfort in every flight. We offer professional flight training, exclusive charter services, and personalized aviation consulting solutions.
          With a team of seasoned experts and years of industry experience, we understand the evolving needs of our clients. Our commitment to safety and innovation ensures that every journey with us is a truly exceptional experience. Griffon Aviation is not just a service — it's a new standard of excellence and trust in the aviation world.
        </p>
      </div>
    </div>
  </div>
</section>

@include('partials.services')


@endsection
