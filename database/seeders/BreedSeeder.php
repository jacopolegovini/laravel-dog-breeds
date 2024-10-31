<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dogBreeds = [
            [
                "name" => "Labrador Retriever",
                "size" => "large",
                "origin" => "Canada",
                "group" => "Sporting Group",
            ],
            [
                "name" => "German Shepherd",
                "size" => "large",
                "origin" => "Germany",
                "group" => "Herding Group",
            ],
            [
                "name" => "Golden Retriever",
                "size" => "large",
                "origin" => "Scotland",
                "group" => "Sporting Group",
            ],
            [
                "name" => "Bulldog",
                "size" => "medium",
                "origin" => "United Kingdom",
                "group" => "Non-Sporting Group",
            ],
            [
                "name" => "Poodle",
                "size" => "small to large",
                "origin" => "Germany",
                "group" => "Non-Sporting Group",
            ],
            [
                "name" => "Beagle",
                "size" => "small",
                "origin" => "United Kingdom",
                "group" => "Hound Group",
            ],
            [
                "name" => "Rottweiler",
                "size" => "large",
                "origin" => "Germany",
                "group" => "Working Group",
            ],
            [
                "name" => "Chihuahua",
                "size" => "small",
                "origin" => "Mexico",
                "group" => "Toy Group",
            ],
            [
                "name" => "Dachshund",
                "size" => "small",
                "origin" => "Germany",
                "group" => "Hound Group",
            ],
            [
                "name" => "Boxer",
                "size" => "large",
                "origin" => "Germany",
                "group" => "Working Group",
            ],
            [
                "name" => "Siberian Husky",
                "size" => "medium",
                "origin" => "Siberia",
                "group" => "Working Group",
            ],
            [
                "name" => "Great Dane",
                "size" => "giant",
                "origin" => "Germany",
                "group" => "Working Group",
            ],
            [
                "name" => "Pomeranian",
                "size" => "small",
                "origin" => "Germany/Poland",
                "group" => "Toy Group",
            ],
            [
                "name" => "Doberman Pinscher",
                "size" => "large",
                "origin" => "Germany",
                "group" => "Working Group",
            ],
            [
                "name" => "Shih Tzu",
                "size" => "small",
                "origin" => "Tibet",
                "group" => "Toy Group",
            ],
            [
                "name" => "Border Collie",
                "size" => "medium",
                "origin" => "United Kingdom",
                "group" => "Herding Group",
            ],
            [
                "name" => "French Bulldog",
                "size" => "small",
                "origin" => "France",
                "group" => "Non-Sporting Group",
            ],
            [
                "name" => "Maltese",
                "size" => "small",
                "origin" => "Malta",
                "group" => "Toy Group",
            ],
            [
                "name" => "Australian Shepherd",
                "size" => "medium",
                "origin" => "United States",
                "group" => "Herding Group",
            ],
            [
                "name" => "Bichon Frise",
                "size" => "small",
                "origin" => "France",
                "group" => "Non-Sporting Group",
            ],
            [
                "name" => "Cocker Spaniel",
                "size" => "medium",
                "origin" => "United Kingdom",
                "group" => "Sporting Group",
            ],
        ];

        foreach ($dogBreeds as $dogBreed) {
            Breed::create($dogBreed);
        }
    }
}
