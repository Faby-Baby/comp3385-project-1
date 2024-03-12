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
                <div class="card text-center h-100 w-75 border-secondary">
                    <img src="{{ url( 'storage/' . $property->photo) }}" alt="" class="card-img-top">
                    <div class="card-body bg-light">
                        <h4 class-title>{{ $property->name }}</h4>
                        <p class="card-text">
                        <strong>{{ $property->title }}</strong> <br>
                        <strong>{{ $property->price }}</strong> <br>
                        <strong>{{ $property->location }}</strong>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection
