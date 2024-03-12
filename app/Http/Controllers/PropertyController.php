<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function create() {
        return view('property-form');
    }

    public function add(Request $request): RedirectResponse {
        $validated = $request->validate([
            'title' => 'max:75|string|required',
            'desc' => 'string|required',
            'bedrooms' => '|required',
            'bathrooms' => '|required',
            'price' => '|required',
            'type' => '|required',
            'location' => '|required',
            'photo' => 'file|image|required',
        ]);

        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('properties', $filename, 'public');

        $property = new Property();
        $property->title = $request->input('title');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->type = $request->input('type');
        $property->price = $request->input('price');
        $property->location = $request->input('location');
        $property->description = $request->input('desc');
        $property->photo = $path;
        $property->save();

        return redirect('/properties')->with('success', 'Task was successful!');
    }

    public function index(): View
    {
        $properties = Property::all();
        return view('properties', ['properties' => $properties]);
    }
}
