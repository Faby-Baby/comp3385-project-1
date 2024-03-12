@extends('layouts.app')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
    @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3" action="/properties/create" enctype="multipart/form-data" method="post">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-12 mb-3">
            <label for="title" class="form-label fw-bold ">Property Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="col-md-12 mb-3">
            <label for="desc" class="form-label fw-bold">Description</label>
            <textarea name="desc" id="desc" class="form-control"cols="30" rows="3"></textarea>

        </div>

        <div class="mb-3 col-md-6">
            <label for="bedrooms" class="form-label fw-bold">No. of Rooms</label>
            <input type="text" name="bedrooms" id="bedrooms" class="form-control">
        </div>

        <div class="mb-3 col-md-6">
            <label for="bathrooms" class="form-label fw-bold">No. of Bathrooms</label>
            <input type="text" name="bathrooms" id="bathrooms" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <label for="price" class="form-label fw-bold">Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <label for="property" class="form-label fw-bold">Property Type</label>
            <select class="form-select" name="type" id="property">
                <option value="Apartment">Apartment</option>
                <option value="House">House</option>
        </select> 
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="location" class="form-label fw-bold">Location</label>
            <input class="form-control" type="text" name="location" id="location">
        </div>

        <div class="col-md-12 mb-3">
            <label for="photo" class="form-label fw-bold d-block">Photo</label>
            <label for="photo" class="btn btn-outline-secondary">
                Browse
                <input class="form-control d-none" type="file" name="photo" id="photo">
            </label>
            
            
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add Property</button>
        </div>
    </form>
@endsection