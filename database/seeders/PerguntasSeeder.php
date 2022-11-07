<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perguntas;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perguntas::create([
            'pergunta' => '​Posso fazer uma compra na wineculture e receber noutro país?',
            'categoria_id' => 1,
            'resposta' => "Não, o grupo WineCulture só faz encomendas exclusivamente para Portugal."
        ]);

        Perguntas::create([
            'pergunta' => '​​​Pago portes de envio para receber a minha encomenda?',
            'categoria_id' => 1,
            'resposta' => "​Entregas gratuitas entre 24 a 48h úteis para compras superiores a 50€."
        ]);

        Perguntas::create([
            'pergunta' => 'Quanto tempo demoro a receber a minha encomenda?',
            'categoria_id' => 1,
            'resposta' => "Depois do pagamento da sua encomenda a WineCulture procede ao embalamento e expedição da mesma. Se esta for paga até às 15h30 é expedida no próprio dia e é entregue entre 24 a 48h úteis (em Portugal Continental). No caso da encomenda ser paga a partir das 15:30 a mesma será expedida no dia útil seguinte e receberá a mesma entre 24 a 48h úteis do envio."
        ]);

        Perguntas::create([
            'pergunta' => 'Posso receber a minha encomenda nos arquipélagos da Madeira/Açores?',
            'categoria_id' => 1,
            'resposta' => "Pode, os preços encontram-se sob consulta."
        ]);

        Perguntas::create([
            'pergunta' => 'Existe uma encomenda mínima?',
            'categoria_id' => 1,
            'resposta' => "Não, pode encomendar a partir de uma unidade de tudo o que estiver disponível no site."
        ]);

        Perguntas::create([
            'pergunta' => 'Quais são as opções de envio?',
            'categoria_id' => 1,
            'resposta' => "Os nossos envios são feitos através da CTT. As encomendas são entregues em mão, entre as 9 e as 18 horas. Em períodos excecionais, como o causado pela COVID-19, os prazos de entrega (normalmente de 1 a 2 dias úteis após a expedição) podem ser prolongados."
        ]);

        Perguntas::create([
            'pergunta' => 'Posso cancelar a minha encomenda?',
            'categoria_id' => 1,
            'resposta' => "Caso receba, na sua encomenda, algum artigo danificado deverá entrar em contacto, de forma imediata para o email wineculture@geral.pt.
            Em caso de cancelamento por opção do cliente, sem que haja qualquer falha imputada ao vendedor, aplicam-se as seguintes regras:

            1 - O cliente pode cancelar a encomenda recebendo a totalidade do valor se a cancelar até uma hora depois de pagar a encomenda;

            2 - Após esse período, o cliente terá de pagar portes de envio, mesmo que o valor da encomenda tenha o valor dos portes incluídos no preço de compra;

            3 - Se o cliente decidir que já não quer a encomenda quando ela já se encontra na sua posse, sem que haja qualquer dano com a mesma ou um atraso superior a 2 dias na entrega, fica responsável pelo pagamento dos portes de devolução e de envio da mesma. Neste caso, é-lhe devolvido o valor total que pagou, menos o valor dos portes de envio e os portes da devolução."
        ]);

        Perguntas::create([
            'pergunta' => 'Quais são os métodos de pagamento aceites pela WineCulture?',
            'categoria_id' => 2,
            'resposta' => "Multibanco: Após finalizar a encomenda receberá, via e-mail, os dados de pagamento relativos à sua encomenda. A confirmação do pagamento é automática pelo que não necessitará de nos enviar comprovativo.
            MB Way: Esta forma de pagamento é opção apenas para quem tem conta e número de telemóvel associado na plataforma MB Way.
            Cartão de Crédito: Aceitamos pagamentos com cartões Visa, American Express ou MasterCard. Para sua segurança, todas as transações são encriptadas. O pagamento será capturado logo que a nossa equipa confirme a encomenda.
            PayPal: Esta forma de pagamento é opção apenas para quem tem conta PayPal. "
        ]);

        Perguntas::create([
            'pergunta' => 'Posso receber a minha encomenda à cobrança?',
            'categoria_id' => 2,
            'resposta' => "Não. A WineCulture só aceita os pagamentos descritos anteriormente."
        ]);

        Perguntas::create([
            'pergunta' => 'Os preços da loja incluem IVA?',
            'categoria_id' => 2,
            'resposta' => "Sim, todos os preços incluem IVA."
        ]);

        Perguntas::create([
            'pergunta' => 'Para que precisam dos meus dados pessoais?',
            'categoria_id' => 3,
            'resposta' => "Os dados pessoais que nos disponibiliza - nome e email - são apenas usados para a razão específica pela qual os forneceu. Se lhe solicitarmos informações pessoais por qualquer outro motivo, como para ações de marketing, receberá um pedido de autorização para tal e terá a oportunidade de dizer não."
        ]);

        Perguntas::create([
            'pergunta' => 'Consigo mudar a informação da minha conta?',
            'categoria_id' => 3,
            'resposta' => "É possível mudar a informação relativa à conta nas opções da sua página pessoal."
        ]);

        Perguntas::create([
            'pergunta' => 'Esqueci-me da minha password, o que faço?',
            'categoria_id' => 3,
            'resposta' => "Na eventualidade de esquecimento de password basta ir ao login e carregar na opção 'Esqueceu-se da Password?' onde vai receber instruções sobre como a recuperar."
        ]);
    }
}
