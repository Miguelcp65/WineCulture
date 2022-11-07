<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ciência e tecnologia‎',
            'img' => '1.jpg',
        ]);
        Category::create([
            'name' => 'Crime, Direito e Justiça‎',
            'img' => '2.jpg',
        ]);
        Category::create([
            'name' => 'Cultura e entretenimento‎',
            'img' => '3.jpg',
        ]);
        Category::create([
            'name' => 'Economia e negócios‎',
            'img' => '4.jpg',
        ]);
        Category::create([
            'name' => 'Educação',
            'img' => '5.jpg',
        ]);
        Category::create([
            'name' => 'Feiras e eventos‎',
            'img' => '6.jpg',
        ]);
        Category::create([
            'name' => 'Homem e sociedade',
            'img' => '7.jpg',
        ]);
        Category::create([
            'name' => 'Política e conflitos',
            'img' => '8.jpg',
        ]);
        Category::create([
            'name' => 'Religião‎',
            'img' => '9.jpg',
        ]);
        Category::create([
            'name' => 'Saúde‎',
            'img' => '10.jpg',
        ]);
        Category::create([
            'name' => 'Sociedade‎',
            'img' => '11.jpg',
        ]);
        Category::create([
            'name' => 'Dia de São Valentim',
            'img' => '12.jpg',
        ]);
    }
}
