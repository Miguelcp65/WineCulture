<?php

namespace Database\Seeders;
use App\Models\Mensagens;

use Illuminate\Database\Seeder;

class MensagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagens::create([
            'id_envio' => 2,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 2,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 7,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 2,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 6,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 5,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 2,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 6,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 1,
            'id_destino' => 7,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
        Mensagens::create([
            'id_envio' => 6,
            'id_destino' => 1,
            'mensagem' => 'Ola, esta mensagem é um teste, não responder',
        ]);
    }
}
