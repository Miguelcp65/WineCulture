<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\receitas;
class receitasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        receitas::create([
            'nome' => 'Frango com vinho Tinto',
            'foto' => 'receitas_1610294619.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Frango com vinho tinto é a melhor opção para acompanhar com vinho tinto.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>4 sobrecoxas de frango pequenas sem pele</li>
                <li>2 dentes de alho triturados</li>
                <li>1 cebola m&eacute;dia picada</li>
                <li>1 colher (ch&aacute;) de or&eacute;gano</li>
                <li>1 colher (sopa) de salsinha verde picada</li>
                <li>Pimenta do reino e sal a gosto</li>
                <li>1 colher (sopa) de manteiga</li>
                <li>1 colher (sopa) de &oacute;leo de canola ou girassol</li>
                <li>2 x&iacute;caras (ch&aacute;) de vinho tinto</li>
            </ul>
',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Na v&eacute;spera, tempere as sobrecoxas com sal, or&eacute;gano, pimenta do reino, salsinha, alho, cebola e vinho tinto.</p>

            <p>2-&nbsp;Misture muito bem todos os ingredientes e deixe marinando de um dia para o outro, ou no m&iacute;nimo 8 horas.</p>

            <p>3-&nbsp;Em uma panela de fundo largo, coloque a manteiga com o &oacute;leo.</p>

            <p>4-&nbsp;Escorra as sobrecoxas reservando o l&iacute;quido da marinada, e doure cada pe&ccedil;a dos dois lados.</p>

            <p>5-&nbsp;Na sequ&ecirc;ncia adicione o l&iacute;quido da marinada, abaixe o fogo, tampe a panela e deixe cozinhar por aproximadamente 40 minutos virando na metade do tempo.</p>

            <p>6-&nbsp;Sirva a seguir e decore com salsinha picada.</p>'
        ]);
        receitas::create([
            'nome' => 'Salmão e ervas',
            'foto' => 'receitas_1610295031.jpg',
            'id_categoria' => 2,
            'id_user' => 1,
            'descricao' => 'Aconselhamos um vinho verde com Salmão.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>1 emb. de Medalh&otilde;es de Salm&atilde;o Pescanova</li>
                <li>Sal e pimenta preta q.b.</li>
                <li>Salsa q.b.</li>
                <li>Azeite q.b.</li>
                <li>Cebolinho q.b.</li>
                <li>1 lim&atilde;o</li>
                <li>50 ml de vinho branco</li>
            </ul>',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1. Descongele os Medalh&otilde;es de Salm&atilde;o, tempere com sal e reserve.</p>

            <p>2. Numa assadeira larga, coloque um pequeno ramo de salsa para cada Medalh&atilde;o de Salm&atilde;o, depois regue com um fio de azeite e coloque o Medalh&atilde;o de Salm&atilde;o. Tempere com sal e pimenta preta mo&iacute;da na hora e cubra a parte de cima com uma mistura de salsa e cebolinho picados grosseiramente. Regue com sumo de lim&atilde;o, um fio de azeite e vinho branco e leve a forno pr&eacute;-aquecido a 180&deg; por 18-20 min. aprox. (dependendo do forno e da espessura do Medalh&atilde;o de Salm&atilde;o).</p>

            <p>3. Sirva com arroz selvagem.</p>'
        ]);
        receitas::create([
            'nome' => 'Camarão à Paulista',
            'foto' => 'receitas_1610295087.jpg',
            'id_categoria' => 5,
            'id_user' => 1,
            'descricao' => 'Camarão à Paulista é uma boa combinação com um bom espumante',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>&frac12; kg de camar&otilde;es</li>
                <li>2 ovos</li>
                <li>Farinha de trigo para empanar</li>
                <li>2 colheres de azeite de oliva</li>
                <li>1 pitada de sal</li>
                <li>&Oacute;leo para fritar</li>
            </ul>',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Lave os camar&otilde;es, retire a cabe&ccedil;a e deixe a casca.</p>

            <p>2-&nbsp;Seque com um pano de prato e reserve.</p>

            <p>3-&nbsp;&Agrave; parte, bata os ovos inteiros</p>

            <p>4-&nbsp;Adiciona 1 pitada de sal.</p>

            <p>5-&nbsp;Passe os camar&otilde;es nessa mistura.</p>

            <p>6- Agora, um a um, passe todos os camar&otilde;es na farinha de trigo.</p>

            <p>7- Frite em &oacute;leo bem quente.</p>

            <p>8- Escorra e sirva.</p>'
        ]);
        receitas::create([
            'nome' => 'Risoto de Polvo',
            'foto' => 'receitas_1610295247.jpg',
            'id_categoria' => 4,
            'id_user' => 1,
            'descricao' => 'Risoto de polvo é a melhor combinação com um bom vinho branco.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>1 kg de polvo congelado</li>
                <li>2 cebolas</li>
                <li>Colorau, sal, coentros, salsa e azeite</li>
                <li>300 gr de arroz para risotto (150g para duas pessoas)</li>
            </ul>',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Cozer o polvo na panela de press&atilde;o com 1 cebola cortada ao meio, depois de descascada.</p>

            <p>2-&nbsp;Noutro tacho coloca-se a cebola picada, a salsa e o azeite, leva-se ao lume at&eacute; esta ficar transparente. Temperar com o colorau.</p>

            <p>3-&nbsp;Junta-se o polvo cortado em pedacinhos pequeninos.</p>

            <p>4-&nbsp;Adicionar o arroz e mexer at&eacute; ficar transl&uacute;cido. Vai-se regando pouco a pouco com a &aacute;gua de cozer o polvo previamente coada, conforme esta vai sendo absorvida, vai-se colocando mais e deixa-se cozinhar at&eacute; o arroz estar quase cozido (deve ter alguma consist&ecirc;ncia, mas estar mole por dentro), deve ficar ligeiramente solto.</p>

            <p>5-&nbsp;Retificar de sal e salpicar com coentros frescos picados e servir.</p>'
        ]);
        receitas::create([
            'nome' => 'Bife de Chouriço',
            'foto' => 'receitas_1610295325.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'Bife de Chouriço é a melhor opção para acompanhar com vinho tinto.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>2 bifes de chouri&ccedil;o de bom tamanho (6cm)</li>
                <li>&frac12; alface americana</li>
                <li>1 molho de end&iacute;vias</li>
                <li>1 colher de &oacute;leo</li>
                <li>2 colheres de azeite de oliva</li>
                <li>1 de vinagre bals&acirc;mico</li>
                <li>&frac12; colher de caf&eacute; mostarda dijon</li>
                <li>1 colher caf&eacute; de sal</li>
                <li>&frac14; colher caf&eacute; pimenta do reino</li>
            </ul>',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Prepare os bifes deste modo: deixe por 2 horas a carne fora da geladeira, recobertos por uma fina camada de &oacute;leo e a pimenta.</p>

            <p>2-&nbsp;Esquente a chapa e com fogo alto, sele a carne por 30 segundos de cada lado.</p>

            <p>3-&nbsp;Abaixe o fogo e coloque novamente os bifes, cozinhe de 3 a 6 minutos de cada lado (ou qual o seu ponto de agrado) e salgue antes de retirar.</p>

            <p>4-&nbsp;Enquanto isso prepare a salada com o vinagre bals&acirc;mico, azeite de oliva, sal e uma pitada de mostarda Dijon e mescle at&eacute; fazer um molho para colocar sobre as folhas verdes lavadas e secas.</p>

            <p>5-&nbsp;Conselho: sem d&uacute;vida vale a pena acompanhar com um bom malbec ou Cabernet sauvignon.</p>'
        ]);
        receitas::create([
            'nome' => 'Castanha Assada',
            'foto' => 'receitas_1610295391.jpg',
            'id_categoria' => 1,
            'id_user' => 1,
            'descricao' => 'A castanha assada não pode faltar com um bom vinho tinto.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>1 kg de castanhas</li>
                <li>1 colher de sopa de sal grosso</li>
            </ul>',
            'preparo' => '
            <p><strong>MODO DE PREPARO:</strong></p>

            <p>1-&nbsp;Preaque&ccedil;a o forno a 200&ordm; C.</p>

            <p>2-&nbsp;Com uma faca afiada d&ecirc; um golpe nas cascas das castanhas e deixe-as de molho em &aacute;gua, durante 10 minutos.</p>

            <p>3-&nbsp;Num tabuleiro de forno disponha as castanhas assadas numa s&oacute; camada, salpicando-as com 1 colher de sopa de sal grosso</p>

            <p>4-&nbsp;Leve as castanhas ao forno, durante 30 minutos ou at&eacute; as cascas abrirem.</p>'
        ]);
        receitas::create([
            'nome' => 'Sushi',
            'foto' => 'receitas_1610396357.jpg',
            'id_categoria' => 3,
            'id_user' => 1,
            'descricao' => 'Sushi é a melhor combinação para o Rosé.',
            'ingre' => '<p><strong>INGREDIENTES:</strong></p>

            <ul>
                <li>2 lombos de Salm&atilde;o</li>
                <li>1 Pepino pequeno</li>
                <li>1 Manga</li>
                <li>1 abacate</li>
                <li>Algas Noori</li>
                <li>Queijo Creme, estilo Philadelphia</li>
                <li>Amendoins Fritos com Mel (opcional)</li>
                <li>Molho de Soja, para servir</li>
                <li>Gengibre, para servir</li>
                <li>Molho Agridoce, para servir</li>
                <li>Wasaki, para servir</li>
                <li>Sementes de S&eacute;samo</li>
                <li>Arroz de sushi</li>
            </ul>
',
            'preparo' =>
            '<p><strong>MODO DE PREPARO:</strong></p>

            <p><strong>Umas horas antes:</strong></p>

            <p>1-&nbsp;O primeiro passo na prepara&ccedil;&atilde;o do sushi, &eacute; o descongelar do peixe, que deve ser feito umas horas antes, dentro do frigor&iacute;fico, mantendo-o na embalagem em que vem.</p>

            <p>2-&nbsp;Se fizer sushi ao almo&ccedil;o, retire-o do congelador para o frigor&iacute;fico na noite anterior. Se o fizer ao jantar, retire-o na manh&atilde; desse dia.</p>

            <p>3-&nbsp;Arroz de sushi, cuja receita j&aacute; aqui est&aacute; no site, tamb&eacute;m ele deve ser feito com anteced&ecirc;ncia, por forma a dar tempo a que arrefe&ccedil;a.</p>

            <p>4- Conforme est&aacute; descrito no artigo do blog, uma boa organiza&ccedil;&atilde;o &eacute; essencial para fazer sushi, pois existem determinados passos que n&atilde;o podem ser atalhados. Aconselho vivamente a que leia o artigo, antes de come&ccedil;ar.</p>

            <p><strong>Antes de come&ccedil;ar:</strong></p>

            <p>5- Comece por definir a bancada de trabalho, arrumando &aacute;reas conforme explicado no blog.</p>

            <p>6- De seguida inicie o corte dos ingredientes.</p>

            <p>7- O salm&atilde;o, depois de o tirar da embalagem, limpe-o com papel cozinha para o secar. Eu pessoalmente gosto de lhe tirar a parte castanha central.</p>

            <p>8- Se quiser fazer pe&ccedil;as de Sashimi ou para Niguiri, corte-as em primeiro lugar.</p>

            <p>9- De seguida, corte o resto dos lombos em tiras, n&atilde;o muito grossas, reserve.</p>

            <p>10- Descasque o pepino, fazendo uso de um descascador de alimentos, por forma a lhe retirar o menos casca poss&iacute;vel.</p>

            <p>11- De seguida, corte-o ao meio, no sentido vertical.</p>

            <p>12- Com a ajuda de uma colher pequena, escave toda a parte central onde se encontram as pevides, deixando desta forma apenas o &#39;corpo&#39;.</p>

            <p>13- Corte o pepino ao meio, no sentido horizontal e de seguida, corte-o em tiras finas, reserve.</p>

            <p>14- Descasque a manga, descarte o caro&ccedil;o e corte-a em tiras finas, reserve.</p>

            <p>15- Proceda de igual modo com o abacate, abra-o ao meio, descarte o caro&ccedil;o, descasque-o e corte-o em tiras finas.</p>

            <p>16- Forre a esteira que ir&aacute; servir para enrolar os rolls, com pel&iacute;cula aderente, desta forma, n&atilde;o se suja.</p>

            <p><strong>Enrolar os Rolls:</strong></p>

            <p>17- Com todos os ingredientes prontos a utilizar, &eacute; hora de come&ccedil;ar a enrolar os rolls de sushi.</p>

            <p>18- Nesta altura, j&aacute; deve ter escolhido o tipo de pe&ccedil;as que quer fazer.</p>

            <p>19- No blog, falo um pouco sobre o tipo de pe&ccedil;as, mas basicamente, ao escolher o tipo de pe&ccedil;as, deve usar a alga no tamanho adequado e colocar o arroz por fora, ou por dentro, conforme o tipo de pe&ccedil;a.</p>

            <p>20- Corte a alga do tamanho desejado.</p>

            <p>21- Coloque uma camada de arroz por cima da alga e espalhe-o, cobrindo toda a alga se fizer Uramaki, ou deixando um bordo na parte superior da alga, se fizer Hosomaki ou Kappamaki.</p>

            <p>22- Coloque tiras dos ingredientes que vai usar no seu roll, cobrindo uma tira de arroz, de uma ponta lateral at&eacute; &agrave; outra, da alga.</p>

            <p>23- Com a ajuda da esteira, comece a enrolar a pe&ccedil;a, conforme pode ver no v&iacute;deo ou conforme est&aacute; descrito no blog.</p>

            <p>24- Monte todos os seus rolls, cobrindo com pel&iacute;cula aderente os rolls Uramaki.</p>

            <p>25- Os rolls devem ser cortados, usando a t&eacute;cnica descrita.</p>

            <p>26- Depois de obter as pe&ccedil;as de sushi, coloque-as sobre a t&aacute;bua de servir, acompanhadas por tacinhas com gengibre, wasabi.</p>

            <p>27- Cada pessoa, dever&aacute; ter &agrave; sua disposi&ccedil;&atilde;o, uma ta&ccedil;a com molho de soja.</p>

            <p>&nbsp;</p>'
        ]);
    }
}

