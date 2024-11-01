<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function show(string $id)
    {
        $breeds = Breed::findOrFail($id);
        return view('pages.breed.show', compact('breeds'));
    }

    public function create(Request $request)
    {
        return view('pages.breed.create');
    }

    public function store(string $id)
    {
        $breeds = Breed::findOrFail($id);
        return redirect('pages.home', compact('breeds'));
    }
}
