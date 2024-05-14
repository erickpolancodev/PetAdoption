<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Pets')->insert([
            [
                'name' => 'Max',
                'breed' => 'Alaskan Malamute',
                'age' => '4 months',
                'description' => 'Max is a bundle of joy! He loves to play fetch, go for walks, and cuddle up on the couch with his humans. He is also very smart and eager to please, so he is easy to train.',
                'image' => 'Alaskan-Malamute.jpg',
            ],
            [
                'name' => 'Jack',
                'breed' => 'Bulldog',
                'age' => '1 year',
                'description' => 'thrives on companionship and affection. With their wrinkly face, squishy jowls, and endearingly clumsy gait, they are sure to bring a smile to your face every day.',
                'image' => 'bulldog.jpg',
            ],
            [
                'name' => 'Bella',
                'breed' => 'Poodle',
                'age' => '2 years',
                'description' => 'With their graceful gait, curly coat, and intelligent eyes, poodles are known for their regal appearance and sharp minds. Bella embodies these qualities perfectly, making them an ideal companion for those who appreciate both beauty and brains.',
                'image' => 'poodle.jpg',
            ],
            [
                'name' => 'Bailey',
                'breed' => 'Beagle',
                'age' => '6 months',
                'description' => 'With their soulful eyes, floppy ears, and boundless energy, beagles are known for their infectious enthusiasm and love of adventure. Bailey is no exception, bringing a burst of joy and curiosity into every room they enter.',
                'image' => 'beagle.jpg',
            ],
            [
                'name' => 'Luna',
                'breed' => 'Dachshund',
                'age' => '9 months',
                'description' => 'With their elongated bodies, short legs, and big personalities, dachshunds are known for their playful antics and loving nature. Luna is no exception, embodying all the charm and charisma that make this breed so popular.',
                'image' => 'dachshund.jpg',
            ],
            [
                'name' => 'Honey',
                'breed' => 'Yorkshire Terrier',
                'age' => '1 year',
                'description' => 'With a playful spirit and zest for life, Honey will keep you entertained with her antics and enthusiasm for games.',
                'image' => 'yorkshire-terrier.jpg',
            ],
            [
                'name' => 'Maya',
                'breed' => 'Border Collie',
                'age' => '10 months',
                'description' => 'Are you ready for a furry whirlwind of intelligence, energy, and loyalty? Look no further, Maya, a stunning 10 months Border Collie who is eager to find his forever adventure partner!',
                'image' => 'border-collie.jpg',
            ],
            [
                'name' => 'Lony',
                'breed' => 'Golden Retriever',
                'age' => '3 years',
                'description' => 'Prepare to be swept off your feet by Lony, a charming 3-year-old Golden Retriever ready to fill your life with sunshine and unconditional love.',
                'image' => 'golden-retriever.jpg',
            ],
            
            
        ]);
    }
}
