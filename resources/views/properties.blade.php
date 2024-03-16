@extends('layouts.app')

@section('content')

    <h1 class="display-5 fw-bold text-body-emphasis">Properties</h1>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
    <div class="row row-cols-1 row-cols-md-3 g-0">
        @foreach ($properties as $property)
            <div class="col">
                <div class="card h-100 w-75 border-secondary">
                    <img src="{{ url( 'storage/' . $property->photo) }}" alt="" class="card-img-top h-75">
                    <div class="card-body bg-light">
                        <p class="card-text mb-0"><strong>{{ $property->title }}</strong></p>
                        <p class="text-black-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            {{ $property->location }}
                            <br>
                        </p>
                        <p class="text-left badge rounded-pill bg-primary">$ {{ $property->price }}</p>
                        
                    </div>
                    
                    <a class="text-light text-decoration-none" href="/properties/{{ $property->id }}">
                        <div class="text-center card-body bg-info">View Property</div>
                    </a>
                    
                </div>
            </div>
        @endforeach
    </div>
    
@endsection
