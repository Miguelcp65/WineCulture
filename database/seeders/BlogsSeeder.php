<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'titulo' => 'AVELEDA CONVIDA A DESCOBRIR O "PERFECT MATCH"',
            'data' => Carbon::parse('2021-02-03'),
            'id_user' => 30,
            'id_categoria' => 12,
            'preview' => 'Chegada a época "mais romântica do ano", a empresa Aveleda sugere combinações com diversas iniciativas.',
            'descricao' => '
            <p>
            A Aveleda une-se à Negrinhos, uma doçaria artesanal especializada no fabrico do doce Brigadeiro, que conta já com mais de 20 sabores, para proporcionar aos portugueses uma experiência gastronómica e vínica que promete "derreter até os corações mais frios".
            </p>
            <p>
            Na página de Instagram @provas_em_casa, iniciativa da empresa para dar a conhecer o vinho de forma descomplicada e criada durante o primeiro confinamento, a oferta passa por dar a conhecer o modo de fabrico dos brigadeiros e como a harmonização com o vinho é possível, num workshop que terá lugar no dia 12 de fevereiro às 19h30 onde os participantes poderão criar o brigadeiro perfeito e prová-lo com um dos vinhos mais apaixonantes da Aveleda, o Villa Alvor Moscatel Galego-Roxo, um vinho singular, de uma única casta que é muito pouco plantada, mas que no território algarvio encontrou o melhor lugar para expressar os seus aromas a frutas vermelhas e flor de laranjeira, e ao mesmo tempo evidenciar sabores minerais característicos da região.
            </p>
            <p>
            Os interessados em acompanhar o direto deverão seguir a página @provas_em_casa onde serão divulgados em breve os ingredientes para acompanhar esta experiência.
            </p>
            <p>
            A Aveleda oferece ainda packs para esta época do ano na sua loja online - Aveleda Shop  – com destaque para o pack do Villa Alvor Moscatel Galego-Roxo acompanhado por uma caixa de 6 brigadeiros. A loja online entrega para todo o país.
            </p>
            <p>
            Villa Alvor é o mais recente investimento da Aveleda, na região do Algarve, desde 2019. A adega de Villa Alvor localiza-se em Alvor, Portimão. Tem a particularidade de se encontrar protegida dos ventos frios do Norte pela Serra de Monchique e um enorme anfiteatro até ao mar, proporcionando um clima quente, húmido e pouco ventoso, interessante para as uvas amadurecerem e criarem vinhos ricos em aromas intensos e sabores mediterrânicos.
            </p>
            ',
            'img' => 'Aveleda_(18).jpg',
        ]);
        Blog::create([
            'titulo' => 'NOVOS AMBIENTES PARA NÓMADAS DIGITAIS',
            'data' => Carbon::parse('2021-02-03'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => '
            A Amazing Evolution, empresa gestora de ativos hoteleiros, desenvolveu um programa em alguns dos seus hotéis dedicado aos nómadas digitais. Com o novo confinamento em vigor e o teletrabalho definido como regra para a generalidade das empresas, há muitos profissionais que procuram inspiração para trabalhar em novos ambientes.
            ',
            'descricao' => '
            <p>
            Para estes nómadas digitais foram desenvolvidos programas com estadias mínimas de 15 noites, em diferentes regiões. Em Lisboa, ou perto da cidade, o programa está em vigor no Aldeia dos Capuchos, em Almada, You and the sea, na Ericeira e ainda no Czar Lisbon Hotel, em pleno coração da capital. Mais a sul, para quem pretende mudar de atmosfera e rumar ao Algarve, a oferta é válida nos hotéis Placid Village, no Carvoeiro e no Algarve Race Resort, em Portimão.
           </p>
           <p>
            As condições especiais promovidas neste pacote apresentam diferentes níveis, que variam consoante o número de noites reservadas. Entre 15 e 29 noites, é aplicado um desconto de 25% na reserva, entre 30 a 59 noites, o desconto é de 30%, de 60 a 179 noites há uma redução no valor de 35% e para mais de 180 noites, de 40%. Estes descontos são válidos para estadias entre fevereiro e junho ou de outubro a dezembro de 2021.
            </p>
            <p>
            Para além do alojamento, que poderá ser em apartamentos de tipologia T1, T2 no You and the sea e no Placid Village, em quarto duplo no Czar Lisbon Hotel e Algarve Race Resort, ou ainda num estúdio do Aldeia dos Capuchos, esta oferta para nómadas digitais inclui uma série de serviços adicionais, além da internet wi-fi de rápida velocidade, para que os hóspedes se sintam verdadeiramente no conforto de casa.
            </p>
            <p>
            Estes serviços vão desde o acesso gratuito ao ginásio e piscinas nos diferentes hotéis, descontos no SPA e restaurantes, serviço de limpeza e descontos na lavandaria, pequeno-almoço e ainda a possibilidade de utilizar espaços maiores para trabalhar, como salas de reuniões equipadas com todos os materiais tecnológicos necessários, como projetores e ecrãs para realizar videoconferências.
            </p>
            ',
            'img' => 'You_and_the_Sea_3_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'EXPORTAÇÕES DA ADEGA DE CANTANHEDE CRESCEM',
            'data' => Carbon::parse('2021-02-03'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'A Adega de Cantanhede fechou 2020 com as exportações a crescer 17,6%, cimentando a sua posição nos mercados internacionais.',
            'descricao' => '
            <p>
            Num ano particularmente desafiante, com as principais feiras internacionais do sector canceladas e o acompanhamento dos mercados in loco comprometido, o crescimento registado decorreu essencialmente do reconhecimento da qualidade dos seus vinhos, bem como da solidez das relações comerciais existentes e do elevado nível de confiança dos seus parceiros internacionais, numa altura em que essa confiança se tornou ainda mais relevante. Além disso, verificou-se um crescimento significativo de vendas nos canais on-line, uma tendência de mercado alavancada pelos constrangimentos que levaram à forte diminuição de atividade no on-trade (sector HoReCa).
            </p>
            <p>
            Os mercados externos foram liderados pelo Brasil, seguido da Rússia, EUA, França e Inglaterra, um TOP 5 que no seu conjunto cresceu 22%.
            </p>
            <p>
            Os resultados são igualmente reforçados pelos 126 prémios nacionais e internacionais que os vinhos da Adega de Cantanhede receberam em 2020, com especial destaque para as 8 Grandes Medalhas de Ouro, 44 Medalhas de Ouro e 10 pontuações acima dos 90 pontos em revistas internacionais da especialidade.
            </p>
            ',
            'img' => 'MAPA_MUNDO_MERCADOS-_II_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'VINTAGE 2017 DA NIEPOORT DISTINGUIDO EM CONCURSO',
            'data' => Carbon::parse('2021-02-02'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'O Vintage 2017 da Niepoort venceu na categoria “Melhor Vinho Fortificado do Mundo” no concurso Best Wine of the World 2021.',
            'descricao' => '
            <p>
            Com base na plataforma Tastingbook.com, de origem finlandesa, 190.000 profissionais e enófilos votaram, ao longo de três meses, em 20.675 vinhos de 115 países. Ao todo, foram mais de 3 milhões os votos recebidos. Após este período de votação, apenas os 100 vinhos mais votados, organizados em seis categorias diferentes, disputaram as finais, que decorreram em dezembro de 2020. Nestas, os vinhos foram avaliados e classificados duas vezes através de provas cegas pelo júri de profissionais da Tastingbook.com.
            </p>
            <p>
            As seis categorias principais dividiram-se entre Melhor Vinho Tinto, Melhor Vinho Branco, Melhor Vinho Rosé, Melhor Vinho Espumante, Melhor Champagne e Melhor Vinho Fortificado. Foi nesta última categoria que o Vintage Port 2017 da Niepoort venceu o mais alto galardão.
            </p>
            <p>
            Criado a partir de vinhas velhas, com idades entre os 60 e os 100 anos, no Cima Corgo, o Vintage 2017 é constituído por uvas de vinhas co-plantadas, pisadas a pé, em lagares de granito, com 100% de engaço. Esta crença na mistura de castas, como eram plantadas as videiras antigamente - e que permite sabores únicos e diferentes de ‘terroir’ para ‘terroir’ - é uma das apostas de longa data de Dirk Niepoort.
            </p>
            <p>
            Para mais informações sobre os resultados do concurso: https://tastingbook.com/pages/BWW2021_winners
            </p>
            ',
            'img' => 'Dirk_5238_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'QUINTA DO GRADIL LANÇA A SUA “CASA” ONLINE',
            'data' => Carbon::parse('2021-02-02'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Até ao próximo dia 14 de fevereiro, quem adquirir uma caixa de madeira de três unidades do novo vinho Maria do Carmo, em branco ou tinto, recebe gratuitamente uma garrafa de Espumante Rosé 100% Touriga Nacional, tamanho Magnum, para abrir no Dia dos Namorados. Esta oferta chega para brindar à mais recente Casa Online da Quinta do Gradil, localizada em www.quintadogradil.wine. O novo site surge como mais uma novidade da produtora de vinhos de Lisboa, com sede física na região do Cadaval, a juntar às muitas que tem vindo a comunicar nos últimos três meses.',
            'descricao' => '
            <p>
            “É também a nossa casa. É assim que sentimos este novo espaço online porque o idealizámos e desenhámos dessa forma, não apenas para ser uma loja de vinhos”, partilha Luís Vieira, “fomos construindo o nosso site ao mesmo tempo em que decorriam todas as transformações na Quinta do Gradil. O objetivo, desde sempre, foi que ambas as nossas casas, física e online, crescessem ao mesmo tempo, e que se refletissem uma na outra. Acima de tudo queremos que quem nos visite online, consiga desde logo sentir o nosso espírito e o nosso ADN”, conclui o proprietário da Quinta do Gradil.
            </p>
            <p>
            Quando se navega no site, além da loja de vinhos que funciona com entregas em Portugal Continental e Ilhas, pode ficar a conhecer-se a oferta em termos de Enoturismo, a história da Quinta do Gradil que se prolonga ao longo de “Sete Séculos de Vindimas” e as pessoas, que são a parte mais importante da empresa.
            </p>
            <p>
            O Espumante 100% Touriga Nacional Rosé que é agora oferecido a todas as pessoas que adquirirem uma caixa de 3 vinhos de Maria do Carmo, não foi selecionado por acaso para esta ação de lançamento do site. Hoje, sabe-se que o Palácio da Quinta do Gradil foi mandado edificar precisamente pela sua proprietária de meados do séc. XIX, Dona Maria do Carmo Romeiro da Fonseca, que hoje tem o seu nome espelhado nestes vinhos de gama superior, da qual faz parte esta garrafa de Espumante de edição única e muito limitada. “Sendo o novo site uma segunda casa, fez todo o sentido para nós podermos brindar os nossos clientes e amigos com este espumante que tem o nome de Maria do Carmo”, remata Luís Vieira.
            </p>
            ',
            'img' => 'MC-Branco_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'REVISTA DE VINHOS APRESENTA “OS MELHORES DO ANO”',
            'data' => Carbon::parse('2021-02-01'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'A Revista de Vinhos anuncia os protagonistas que mais se destacaram nos setores do vinho e da gastronomia em Portugal esta quinta-feira, dia 4 de fevereiro. Face ao atual contexto pandémico, o habitual jantar e gala de entrega de prémios é substituído por um programa online, que será emitido nas páginas de YouTube, Facebook e Instagram da Revista de Vinhos, a partir das 21 horas.',
            'descricao' => '
            <p>
            “Este modelo alternativo é a nossa resposta perante a situação que vivemos. Cumprimos todas as exigências e regras de prevenção e de segurança, mobilizamos diferentes equipas e conseguimos concretizar um programa que premeia e destaca autores e projetos de eleição. Celebramos de um modo diferente, é certo, mas com um impacto que antevemos ser muito positivo, o que de melhor é feito no nosso país em áreas fundamentais como o vinho, a gastronomia e o enoturismo. Esta 24ª edição dos prémios foi um desafio suplementar, que conseguimos superar, e que justamente sublinha quem trabalha bem em setores que, nalguns casos, têm sido dos mais afetados pela pandemia”, realça Nuno Pires, diretor da Revista de Vinhos.
            </p>
            <p>
            Os prémios “Homenagem”, “Personalidade do Ano no Vinho”, “Personalidade do Ano na Gastronomia”, “Vinho do Ano”, “Produtor do Ano”, “Restaurante do Ano”, “Chefe de Cozinha do Ano”, “Empresa do Ano” e “Enoturismo do Ano” são apenas alguns dos mais relevantes por entre um total de 24 categorias.
            </p>
            <div style="text-align: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-8fMw_Hlfpc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p>
            “Os Melhores do Ano” da Revista de Vinhos, conhecidos como os “óscares do vinho e da gastronomia”, terão as participações da Ministra da Agricultura, Maria do Céu Antunes, da Secretária de Estado do Turismo, Rita Marques, do presidente da Câmara Municipal do Porto, Rui Moreira, entre outras personalidades. A apresentação está a cargo de Maria Cerqueira Gomes, Úrsula Corona e José João Santos, havendo ainda a participação musical de Pierre Aderne e convidados.
            </p>
            <p>
            A emissão integral online acontece quinta-feira, 4 de fevereiro, pelas 21horas, nas páginas da Revista de Vinhos. Seguir-se-ão os compactos nos programas “A Essência”, emitidos na RTP3, RTP Internacional e Renascença e na brasileira Gula TV.
            </p>
            ',
            'img' => 'MA2020_1200x800.jpg',
        ]);
        Blog::create([
            'titulo' => 'MORREU ARNALDO GARCIA, PRESIDENTE DA DISTRIBUIDORA GARCIAS',
            'data' => Carbon::parse(''),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Liderava a Garcias, uma das maiores distribuidoras de vinhos e bebidas espirituosas a operar em Portugal.',
            'descricao' => '
            <p>
            Em comunicado enviado às redações, a Garcias informou no passado dia 29 o falecimento de Arnaldo Garcia, Presidente do Conselho de Administração da Garcias.
            </p>
            <p>
            A gestão e continuação do legado de uma empresa que emprega cerca de 300 funcionários está agora a cargo dos filhos, Filipa e João Garcia. "O seu exemplo de vida e força pessoal continuará presente", pode ler-se no final do breve comunicado.
            </p>
            <p>
            A WineCulture lamenta o desaparecimento e envia à família, amigos e a toda a vasta equipa da Garcias os mais sentidos pêsames.
            </p>
            ',
            'img' => 'garcias-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'ANUNCIADOS OS FINALISTAS DO PRÉMIO PFV',
            'data' => Carbon::parse('2021-01-27'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'A Primum Familiae Vini, constituída por doze famílias europeias produtoras de vinho, nomeou cinco empresas, oriundas de todo o mundo, como finalistas do prémio PFV ‘Família é Sustentabilidade’, no valor de €100.000. ',
            'descricao' => '
            <p>
            Matthieu Perrin, Presidente da PFV comentou: ‘Na PFV acreditamos que as empresas familiares formam o substrato da economia regional e nacional e que as melhores têm um profundo compromisso com o desenvolvimento sustentável. As melhores empresas familiares, tal como as finalistas aqui nomeadas, personificam responsabilidade social e ambiental, além de qualidade dos seus produtos. Estes valores duradouros são particularmente relevantes numa altura turbulenta como a pandemia que estamos a viver.
            </p>
            <p>
            Paul Symington, Chairman da PFV comentou: ‘As doze famílias PFV trabalham há gerações pela excelência nos nossos vinhos e para assegurar a independência das nossas empresas, apesar de desafios que, por vezes, pareceram intransponíveis. Criámos este prémio para expressar confiança na resiliência e na continuidade das empresas familiares, nos bons momentos e nos maus.’
            </p>
            <p>
            Em fevereiro, as doze famílias PFV reunirão novamente para eleger o vencedor — de entre os cinco finalistas nomeados — do prémio PFV no valor de €100.000 (cem mil euros). A decisão será anunciada em março de 2021.
            </p>
            <p><strong>Os finalistas PFV de 2021:</strong></p>
            <p>França</strong> - Makhila Ainciart Bergara: empresa familiar de seis gerações, produtora de magnificas bengalas, criadas à mão, na região Basca do sudoeste de França desde 1780. Produziu bengalas para o Papa João Paulo II, o Presidente Ronald Reagan, Charlie Chaplin, cada Presidente francês da 5.ª República e para os sete chefes de estado presentes na cimeira do G7, realizada em 2018 em Biarritz. www.makhila.com </p>
            <p>Japão</strong> - 沈壽官窯 (Chin Jukan Kiln): empresa familiar de 14 gerações, produtora de olaria Satsuma-yaki em Kagoshima desde 1876. A família, originária da Coreia, produz cerâmica no Japão desde 1623 com registos familiares que remontam 26 gerações. Vencedora de inúmeros prémios internacionais pela beleza dos seus produtos. www.chin-jukan.co.jp </p>
            <p>Itália</strong> - Manetti Battiloro: empresa familiar de 15 gerações, produtora de folha de ouro em Florença desde 1582. Matteo Manetti trabalhou com Michelangelo na Basílica de São Pedro em Roma no final do século XVI e criou o globo de ouro que coroa a cúpula da igreja. Em 1602, Matteo restaurou o magnífico globo que encima a cúpula do ‘Duomo’ de Florença, que tinha sido danificado por um relâmpago. O mesmíssimo globo foi restaurado pelos descendentes de Matteo em 2002. A empresa é hoje líder mundial na produção de folha de ouro e os seus produtos adornam prestigiados monumentos em Paris, Nova Iorque, Londres e Moscovo. www.manetti.com </p>
            <p>Reino Unido</strong> - The Goring Hotel: único hotel de luxo em Londres ainda nas mãos da família fundadora. Estabelecido em 1910 por Otto Goring, o hotel é gerido pela 4.ª geração e detém o Royal Warrant (alvará real da Rainha de Inglaterra). Possui um registo exemplar de ajuda aos mais carenciados na comunidade local, além da gestão de um dos mais conceituados hotéis de Londres. www.thegoring.com</p>
            <p>Bélgica</strong> - Maison Bernard: um negócio familiar em Bruxelas que é o mais antigo luthier (fabricante de instrumentos de cordas) da Europa, fabricante e reparador de violinos, violas, violoncelos e arcos para alguns dos mais célebres músicos do mundo. A Maison Bernard restaurou recentemente um violino Stradivarius datado de 1723 — exemplo notável do brilho dos seus artífices. www.maison-bernard.com</p>
            ',
            'img' => '12_PFV_Families_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'NAUVEGAR COM PRATA NOS WORLD BRAND DESIGN SOCIETY AWARDS',
            'data' => Carbon::parse('2021-01-27'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'O World Brand Design Society Awards é uma competição internacional que celebra a excelência e promove os melhores trabalhos criativos, de agências e estúdios de design de todo o mundo. O estúdio de design Nauvegar, sediado no coração do Vale do Douro, foi premiado com prata nessa competição com o projeto Quinta dos Montes - Parcela Nº 5.',
            'descricao' => '
            <p>
            “Desde a fundação, o nosso objetivo tem sido estabelecer o Nauvegar como pedra angular do Vale do Douro para o negócio do design de vinhos, e nos últimos 3 anos, o nosso estúdio conquistou uma forte reputação neste mercado. Esta distinção é uma oportunidade maravilhosa para celebrar o esforço, dedicação e total entrega da nossa pequena equipa, e para mostrar, com orgulho, que é possível estar no interior do país, numa pequena aldeia como Covas do Douro, e desenvolver projetos criativos de topo, ao nível do melhor que se faz em qualquer grande capital mundial!", referiu Gustavo Roseira, CEO e Diretor Criativo do estúdio.
            </p>
            <p>
            Relativamente ao projeto que acaba de ser premiado, Gustavo conta como tudo aconteceu:
            </p>
            <p>
            “Estávamos a passear pelas belíssimas vinhas da Quinta dos Montes, no Vale do Douro, com o nosso bom amigo, e enólogo da quinta, Pedro Sequeira, enquanto ele nos contava sobre a sua última criação, um vinho de uma só vinha, proveniente de uma parcela muito especial da propriedade.
            </p>
            <p>
            Quando chegamos à Parcela Nº 5, sentimos definitivamente algo especial e único! É difícil pôr em palavras o quão mágicas as vinhas muito velhas do Douro podem ser… Esta é uma parcela minúscula, com apenas 0,61 hectares, mas com uma enorme diversidade, 23 castas diferentes com mais de 100 anos. Foi como entrar num autêntico museu vivo! O Pedro explicava o amor e cuidado que dedicou a esta vinha, e como as plantas são tratadas uma a uma, “Cêpa-a-Cêpa”, e o seu sonho de expressar de alguma forma o espírito do lugar e a textura complexa que as cêpas velhas têm, na garrafa.
            </p>
            <p>
            Instantaneamente, muitas ideias começaram a "fermentar" na nossa imaginação. Assim que voltamos à nossa "adega criativa", a mesa, o papel, o lápis, diversas experiências começaram a surgir. Estávamos a cortar camadas de papel com diferentes formatos, na tentativa de recriar algumas ideias que tínhamos para representar as vinhas, quando percebemos que podíamos integrar um conceito de dualidade, que comunicaria ao mesmo tempo as complexas texturas em camadas das cêpas velhas e a sinuosa topografia das vinhas do Douro!
            </p>
            <p>
            No final, devido à complexidade das formas e aos pequenos detalhes de cada camada, parte do processo de produção dos rótulos teve de ser feito manualmente, um a um, tal como o cuidado com estas vinhas centenárias e como a nossa abordagem de design, que foi desenvolvida minuciosamente à mão.
            </p>
            <p>
            Tudo neste vinho, em todas as fases de criação, nasceu desta paixão pelo artesanal, resultando numa joia autêntica e rara. Foram lançadas apenas 1333 garrafas, tornando o lema “Cêpa-a-Cêpa”, realmente digno.”
            </p>

            ',
            'img' => 'Nauvegar_QuintaDosMontes_ParcelaN5_2_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'MERCADONA ELIMINA SACOS DE PLÁSTICO DE USO ÚNICO',
            'data' => Carbon::parse('2021-01-26'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Fiel ao seu compromisso de dizer “Sim a continuar a cuidar do Planeta”, a Mercadona cumpre hoje o primeiro marco da Estratégia 6.25 e elimina os sacos de plástico de uso único em todas as secções das suas lojas, uma ação que levou a cabo ao longo de 2020. Agora, a empresa oferece aos seus clientes sacos compostáveis feitos de fécula de batata, que devem ser depositados no contentor de lixo orgânico. Esta informação está indicada através do pictograma incluído nos sacos, com a intenção de informar os clientes como fazer a separação e reciclagem adequada dos seus resíduos. Este símbolo foi, também, incorporado nos restantes sacos na linha de caixas, em três opções de sacos reutilizáveis e sustentáveis disponíveis na Mercadona.',
            'descricao' => '
            <p>
            Além disso, a empresa disponibiliza caixotes para a deposição seletiva dos resíduos em todas as secções da loja, para que os clientes possam separar e depositar os seus resíduos e, assim, contribuir para a economia circular. O cumprimento desta primeira ação da Estratégia 6.25 representa uma redução de 3.200 toneladas de plástico por ano. Refira-se que a Estratégia 6.25 tem o triplo objetivo de, até 2025, reduzir 25% do plástico das embalagens, ter todas as embalagens de plástico recicláveis e reciclar todos os resíduos de plástico gerados nas suas instalações. Este objetivo está a ser cumprido através de um total de seis ações que envolvem modificações em diferentes processos da empresa, desde redesenhar as embalagens em coordenação com os fornecedores, adequar lojas e logística, a gestão de resíduos, entre outros. No seu conjunto, a empresa prevê investir mais de 140 milhões de euros nos próximos quatro anos para a concretização de todas as ações que integram esta estratégia.
            </p>
            <p>
            A empresa começou a trabalhar nesta estratégia em 2019, envolvendo todos os colaboradores no desafio de “Continuar a cuidar do Planeta” e tornar os diversos processos da linha de montagem mais sustentáveis. A este nível, refira-se que a Mercadona possui uma equipa de trabalho que coordena todas as áreas de atuação da Estratégia 6.25, que é composta por trabalhadores dos diferentes departamentos da empresa, como Lojas, Prescrição, Informática, Compras, Logística, Finanças, Recursos Humanos, Relações Externas e Obras.
            </p>
            <p>
            Nos últimos quatro meses, a Mercadona adaptou um total de 72 lojas em Espanha e Portugal ao modelo de Loja 6.25, que será alargado a toda a cadeia durante 2021. Em Portugal já existe um supermercado com este conceito, em Matosinhos (Porto). Estas lojas, onde é possível observar os avanços da Estratégia 6.25, têm como objetivo ouvir a opinião de clientes e colaboradores sobre todas as ações que a empresa está a desenvolver nesta área. Neste período, foram recebidas mais de 5.000 opiniões e sugestões, tanto de clientes como de colaboradores, que ajudam a melhorar a aplicação das diferentes ações definidas para reduzir o plástico e promover a economia circular. Gradualmente, a Mercadona irá disponibilizar mais informação sobre a Estratégia 6.25 na secção “Cuidemos do Planeta” do seu site corporativo, onde é possível encontrar, também, conteúdos sobre reciclagem, sustentabilidade e compromisso ambiental.
            </p>
            <p>
            Por outro lado, o Plano de Responsabilidade Social vai ao encontro da componente social e ética através de distintas formas de atuação sustentáveis, que reforçam a sua aposta no crescimento partilhado. No âmbito desta política, a Mercadona colabora com mais de 290 cantinas sociais, 60 bancos alimentares e outras entidades sociais em Portugal e Espanha, às quais doa diariamente. Em 2020, a empresa doou um total de 17 mil toneladas de alimentos a todas estas entidades e organizações, 1.200 em Portugal e 15.800 em Espanha, valores que têm vindo a aumentar desde que a empresa tomou a decisão de reforçar os processos de doação de produtos de primeira necessidade às Cantinas Sociais e Bancos Alimentares com os que tem vindo a colaborar regularmente. Outra linha estratégica do Plano de Responsabilidade Social é a sustentabilidade. Para tal, conta com um Sistema de Gestão Ambiental próprio, baseado nos princípios da Economia Circular e focado na otimização logística, na eficiência energética, gestão de resíduos, produção sustentável e na redução de plástico.
            </p>
            <p>
            Pensando na mobilidade sustentável dos clientes, a empresa já conta com 1.350 lugares de estacionamento com pontos de recarga para veículos elétricos, localizados nos parques de estacionamentos de 501 lojas. A Mercadona iniciou a instalação de pontos de recarga de veículos elétricos em 2017, com a implementação do Novo Modelo de Loja Eficiente, e prevê continuar a aumentar este número ao longo de 2021.
            </p>
            ',
            'img' => 'Mercadona_Estrategia_6.25_Sacos_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'CHAMPAGNE LOUIS ROEDERER GANHA PRODUTOR DO ANO',
            'data' => Carbon::parse('2021-01-25'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Provam também conseguiu no mesmo concurso bons resultados.',
            'descricao' => '
            <p>
            O concurso Champagne & Sparkling Wine World Championshiop, na edição de 2020, premiou num total de 13 galardões a casa Louis Roederer. Desde logo na mais alta distinção da competição: Campeão do Mundo 2020 Supremo.
            </p>
            <p>
            Mas os prémios não se ficaram por aqui. Ganhou ainda o de Produtor do Ano e a referência Cristal Rosé 2004 Magnum venceu o prémio de Melhor Champanhe de França.
            </p>
            <p>
            No total, contam-se 13 medalhas, 11 de ouro e duas de prata, o que representa o maior número de medalhas de ouro recebido por um só produtor.
            </p>
            <p>
            Portugal esteve representado nos vencedores destes prémios pela Provam, Produtores de Vinhos Alvarinho Monção. Mais concretamente uma medalha de ouro e outra de prata , no caso o NV Castas de Monção e o Provam NV Coto de Mamoelas, respetivamente.
            </p>
            ',
            'img' => 'espumante_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'CONCURSO MUNDIAL DE BRUXELAS ALTERA DESTINO',
            'data' => Carbon::parse('2021-01-25'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Luxemburgo será o próximo palco deste concurso internacional de vinhos. A edição inicialmente prevista para Yinchuan (Ningxia) realizar-se-á em 2022.',
            'descricao' => '
            <p>
            A próxima edição do Concurso Mundial de Bruxelas (CMB), que iria ter lugar entre os dias 21 e 23 de maio em Yinchuan, Ningxia, China, irá acontecer, nos mesmos dias, no Luxemburgo, uma década depois de o Grão Ducado ter recebido a prova.
            </p>
            <p>
            O concurso terá assim lugar no centro de congressos e de exposições, o LuxExpo, situado no bairro de negócios da cidade do Luxemburgo. Oportunidade para visitar as cinco regiões vinícolas existentes no país, marcadas pelo vale do Mosel, que separa o Luxemburgo da Alemanha, ao longo de 42 quilómetros. E apreciar, uma década depois, qual a evolução registada nos vinhos luxemburgueses, com destaque para o inevitável Cremant. Uma coisa é certa: com cerca de 20% da população do Grão Ducado de origem portuguesa, o contingente nacional que habitualmente toma parte deste concurso irá sentir-se em casa.
            </p>
            <p>
            Com Schengen a sul e Wasserbilig a norte, mais de 340 viticultores granjeiam quase 1300 hectares de vinhas, das quais 90% são plantadas com castas para produção de vinhos brancos e espumantes.
            </p>
            ',
            'img' => 'bruxelas_alta.jpg',
        ]);

        Blog::create([
            'titulo' => 'PORTUGAL GANHA QUOTA EM VOLUME E VALOR',
            'data' => Carbon::parse('2020-11-05'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => 'Números relativos às exportações de vinho português.',
            'descricao' => 'Texto 1',
            'img' => 'garrafas-garrafeira-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'BAGOS D OURO E FIRMO CRIAM CADERNO SOLIDÁRIO',
            'data' => Carbon::parse('2020-11-05'),
            'id_user' => 30,
            'id_categoria' => 4,
            'preview' => 'Este Natal, a Bagos D’Ouro está a trabalhar no combate ao abandono escolar e à exclusão social. A Firmo Portugal criou uma edição',
            'descricao' => 'Texto 1',
            'img' => 'caderno-firmo-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'CHEFS DA NOVA GERAÇÃO PROMOVEM CONSERVAS PORTUGUESAS',
            'data' => Carbon::parse('2020-11-04'),
            'id_user' => 30,
            'id_categoria' => 1,
            'preview' => '“Vamos conservar o que é nosso.” É este o claim da campanha criada pela Associação Nacional de Industriais de Conservas de Peixe',
            'descricao' => 'Texto 1',
            'img' => 'Vamos_conservar_o_que_e_nosso_(1)_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'DIA MUNDIAL DO ENOTURISMO',
            'data' => Carbon::parse('2020-11-04'),
            'id_user' => 26,
            'id_categoria' => 1,
            'preview' => 'No próximo dia 8 de novembro comemora-se o Dia Mundial do Enoturismo.',
            'descricao' => 'Texto 1',
            'img' => 'Dia_Mundial_Enoturismo_Soalheiro_artigo.jpg',
        ]);
        Blog::create([
            'titulo' => 'FRANÇA PROÍBE VENDA DE PRODUTOS NÃO ESSENCIAIS',
            'data' => Carbon::parse('2020-11-04'),
            'id_user' => 26,
            'id_categoria' => 3,
            'preview' => 'Medida aplica-se às grandes superfícies e começou no passado dia 3.',
            'descricao' => 'Texto 1',
            'img' => 'IMG_2192.jpg',
        ]);
        Blog::create([
            'titulo' => 'QUINTA DO GRADIL APRESENTA REBRANDING',
            'data' => Carbon::parse('2020-11-04'),
            'id_user' => 29,
            'id_categoria' => 3,
            'preview' => 'A Quinta do Gradil apresentou mais uma novidade: nasceu a nova identidade deste produtor da região de Lisboa.',
            'descricao' => 'Texto 1',
            'img' => 'gradil-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'NOVO MERCURE PORTO CENTRO ALIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'id_user' => 6,
            'id_categoria' => 2,
            'preview' => 'Abre as portas o Mercure Porto Centro Aliados, a nova proposta de Mercure Hotels, pertencente ao Grupo Accor.',
            'descricao' => 'Texto 1',
            'img' => 'mercure-aliados-alta.jpg',
        ]);
        Blog::create([
            'titulo' => 'VINHOS DO CONTINENTE PREMIADOS',
            'data' => Carbon::parse('2020-11-03'),
            'id_user' => 9,
            'id_categoria' => 5,
            'preview' => 'Foram 57 os vinhos exclusivos do Continente que, este ano, conquistaram mais de 100 medalhas em prestigiados concursos.',
            'descricao' => 'Texto 1',
            'img' => 'VinhosPremiados_CNT_FB_03_artigo.jpg',
        ]);
    }
}
