<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category_wine;
class CategoryWineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category_wine::create([
            'nome' => 'Tinto',
            'img' => '1.jpg',
        ]);
        category_wine::create([
            'nome' => 'Verde',
            'img' => '2.jpg',
        ]);
        category_wine::create([
            'nome' => 'Rosé',
            'img' => '3.jpg',
        ]);
        category_wine::create([
            'nome' => 'Branco',
            'img' => '4.jpg',
        ]);
        category_wine::create([
            'nome' => 'Espumante',
            'img' => '5.jpg',
        ]);
    }
}
