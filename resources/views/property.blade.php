@extends('layouts.app')

@section('content')

<div class="card mb-3" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="{{ url('storage/' . $details->photo)}}" class="img-fluid rounded-start " alt="">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">{{ $details->title }}</h5>
      </div>
        <div class="card-body">
            <p class="text-left badge rounded-pill bg-primary">$ {{ $details->price }}</p>
            <p class="text-left badge rounded-pill bg-warning">{{ $details->type }}</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $details->description }}</p>
        </div>
        <div class="card-body">
            <span class="card-text">{{ $details->bedrooms }} Bedrooms</span>
            <span class="card-text">{{ $details->bathrooms }} Bathrooms</span>
        
        </div>
        <br>
        <p class="text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            {{ $details->location }}
        </p>
        <br>
        <button type="submit" class=" text-white btn btn-info" disabled>Email Realtor</button>


      </div>
    </div>
  </div>
</div>
@endsection