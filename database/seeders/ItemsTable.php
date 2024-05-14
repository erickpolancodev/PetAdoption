<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Items')->insert([
            [
                'name' => 'Interactive Dog Toys Tug of War',
                'Description' => 'Mentally Stimulating Toys for Dogs, Puppy Teething Toys for Boredom to Keep Them Busy, Dog Puzzle Treat Food Dispensing Ball Toy for Small Medium',
                'price' => '15,00',
                'image' => 'toys/1.jpg',
            ],
            [
                'name' => 'Kong - Classic Dog Toy',
                'Description' => 'Durable Natural Rubber - Fun to Chew, Chase and Fetch - for Small Dogs',
                'price' => '8,49',
                'image' => 'toys/2.jpg',
            ],
            [
                'name' => 'Lukito Dog Chew Toys',
                'Description' => '3 Pack for Aggressive Chewers, Multifunctional Teeth Cleaning and Gum Massage, Tough Toys with Natural Rubber for Large and Medium Dog.',
                'price' => '16,00',
                'image' => 'toys/3.jpg',
            ],
            [
                'name' => 'Jovrun Elevated Dog Bowls',
                'Description' => 'Dog Feeder with 2 Stainless Steel Bowls &1 Slow Feeder Dog Bowls, 5 Heights Adjustable Raised Dog Bowls Stand for Medium Large Dogs, Dog Food Bowls with Non-Slip Feet',
                'price' => '27',
                'image' => 'toys/4.jpg',
            ],
            [
                'name' => 'Purina Pro Plan',
                'Description' => 'Nourish your adult dog’s best with Pro Plan Complete Essentials dry and wet formulas. High in protein to help maintain lean muscle and an ideal body condition, each formula is made to help dogs thrive.',
                'price' => '110,00',
                'image' => 'foods/1.jpg',
            ],
            [
                'name' => 'Pedigree Complete Nutrition',
                'Description' => 'Delivers 100% complete and balanced nutrition for your adult dog. It has the antioxidants, vitamins, and minerals canines need to help maintain a healthy lifestyle, and in the delicious, meaty steak flavor they love. ',
                'price' => '35,00',
                'image' => 'foods/2.jpg',
            ],
            [
                'name' => 'Wag Dry Dog Food',
                'Description' => 'Meat and Sweet Potato, Grain Free Sustainably-raised Salmon is the #1 ingredient; protein helps keep your dog at his bounding best',
                'price' => '45,00',
                'image' => 'foods/3.jpg',
            ],
            [
                'name' => 'Merrick Premium Grain Free',
                'Description' => 'Is made with real nutrition and contains high levels of protein, glucosamine and chondroitin, as well as Omega fatty acids to support the overall health of your dog.',
                'price' => '80,00',
                'image' => 'foods/4.jpg',
            ],
            
        ]);
    }
}
