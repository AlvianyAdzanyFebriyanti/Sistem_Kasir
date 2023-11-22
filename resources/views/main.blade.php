@extends('home')

@section('content')
<div class="col-lg-6" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src={{asset('image/displayOne.jpg')}} class="d-block w-100" alt="..." height="400" >
          </div>
          <div class="carousel-item">
            <img src={{asset('image/displayTwo.jpg')}} class="d-block w-100" alt="..." height="400">
          </div>
          <div class="carousel-item">
            <img src={{asset('image/displayThree.jpg')}} class="d-block w-100" alt="..." height="400">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    
</div>
<div class="col-lg-6" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 28%;">
    <h4>Welcome</h4>
    <p>Welcome to TurboCashier - an innovative cashier platform designed for your modern business needs! We deliver a fast and efficient cashier experience with an intuitive interface. One-click transactions, high-level security, and robust reporting capabilities are all available here. TurboCashier makes it easy for you to run your business more effectively and intelligently. Join now to experience the positive change in managing your business's cashier operations!</p>
</div>
@endsection