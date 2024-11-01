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
}
