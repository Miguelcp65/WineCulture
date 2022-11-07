<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BlogsSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\VinhosSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\receitasseeder;
use Database\Seeders\MensagensSeeder;
use Database\Seeders\PerguntasSeeder;
use Database\Seeders\VinhosimgSeeder;
use Database\Seeders\CategoryWineSeeder;
use Database\Seeders\CategoriasFAQSeeder;
use Database\Seeders\VinhosClassSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CategoriasFAQSeeder::class);
        $this->call(CategoryWineSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(PerguntasSeeder::class);
        $this->call(receitasseeder::class);
        $this->call(MensagensSeeder::class);
        $this->call(VinhosSeeder::class);
        $this->call(VinhosimgSeeder::class);
        $this->call(VinhosimgSeeder::class);
        $this->call(VinhosClassSeeder::class);
    }
}
