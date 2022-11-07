<?php

namespace Database\Seeders;

use App\Models\CategoriaPergunta;
use Illuminate\Database\Seeder;

class CategoriasFAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaPergunta::create([
            'categoria' => 'Encomenda',
            'descricao' => 'Perguntas em relação a encomendas.',
        ]);

        CategoriaPergunta::create([
            'categoria' => 'Pagamento',
            'descricao' => 'Perguntas em relação ao pagamento.',
        ]);

        CategoriaPergunta::create([
            'categoria' => 'Conta',
            'descricao' => 'Perguntas em relação à conta do utilizador.'
        ]);
    }
}
