<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinhos;

class VinhosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vinhos::create([
            'nome' => '2017 João Portugal Ramos Vinha do Jeremias Syrah tinto',
            'id_categoria' => 1,
            'id_produtor' => 34,
            'img' => '1.jpg',
            'descricao'  => "Criar um vinho é uma arte que em Portugal fomos aperfeiçoando ao longo de séculos, hoje reforçada por um maior conhecimento e melhores meios. Raramente um bom vinho é fruto do acaso. A experiência adquirida ao longo do tempo por João Portugal Ramos, leva-o a acreditar que um vinho reflete a natureza da terra que o viu nascer e é a expressão de quem o produz. O saber, a experiência e a tecnologia permitem aperfeiçoar com rigor os diversos fatores que influenciam a personalidade de um vinho. “Fazer brilhar todo o potencial natural do nosso país nesta área, criando e reinventando cada vinho, é para mim uma paixão”.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '1984 Mouchão tinto',
            'id_categoria' => 1,
            'id_produtor' => 34,
            'img' => '2.jpg',
            'descricao'  => "No início do século XIX, Thomas Reynolds migrou para a região do Alentejo tendo como objetivo o negócio da cortiça. Três gerações depois, o seu neto John Reynolds adquiriu a Herdade do Mouchão para a produção de vinhos. Plantaram-se várias vinhas, em 1901 construiu-se uma adega tradicional e em 1929, instalou-se a destilaria, a mesma que ainda hoje é utilizada para produzir a aguardente do Mouchão. Hoje a Herdade do Mouchão continua a ser gerida e trabalhada pelos descendentes da família original. Todo o processo de vinificação se mantém praticamente intocável, preservando a tradicional vindima à mão e a fermentação das uvas em lagares de pedra com pisa a pés. Num mundo enológico em constante evolução, a Herdade do Mouchão mantém-se como sempre foi, uma tradição de família.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2003 Mouchão Colheitas Antigas tinto 1,5L',
            'id_categoria' => 1,
            'id_produtor' => 31,
            'img' => '3.jpg',
            'descricao'  => "No início do século XIX, Thomas Reynolds migrou para a região do Alentejo tendo como objetivo o negócio da cortiça. Três gerações depois, o seu neto John Reynolds adquiriu a Herdade do Mouchão para a produção de vinhos. Plantaram-se várias vinhas, em 1901 construiu-se uma adega tradicional e em 1929, instalou-se a destilaria, a mesma que ainda hoje é utilizada para produzir a aguardente do Mouchão. Hoje a Herdade do Mouchão continua a ser gerida e trabalhada pelos descendentes da família original. Todo o processo de vinificação se mantém praticamente intocável, preservando a tradicional vindima à mão e a fermentação das uvas em lagares de pedra com pisa a pés. Num mundo enológico em constante evolução, a Herdade do Mouchão mantém-se como sempre foi, uma tradição de família.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Herdade dos Grous Moon Harvest tinto',
            'id_categoria' => 1,
            'id_produtor' => 32,
            'img' => '4.jpg',
            'descricao'  => "Criada de raiz na paisagem Alentejana encontra-se a Herdade dos Grous. Em Albernoa, a 17 quilómetros de Beja, a Herdade dos Grous reúne a produção de vinho, agro-pecuária, turismo rural e enoturismo. O Alentejo, a maior província em Portugal, guarda consigo o charme tradicional português e a herança Moura, evidente em toda a sua arquitetura. O clima Continental de influências mediterrânicas oferece condições ideias para a produção de grandes vinhos e de produtos regionais de altíssima qualidade.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Quinta da Alorna Touriga Nacional rosé',
            'id_categoria' => 3,
            'id_produtor' => 32,
            'img' => '9.jpg',
            'descricao'  => "A Quinta da Alorna nasceu em 1723, mais tarde D. Pedro de Almeida, o I Marquês de Alorna, após ter liderado a conquista da praça-forte de Alorna na Índia, conferiu à propriedade o nome que hoje tem. Na margem do Rio Tejo e com a entrada marcada por uma árvore magnífica e rara no mundo, conhecida por bela sombra, a Quinta da Alorna destaca-se não só pela qualidade dos vinhos que produz como também pelos seus espaços naturais. Os vinhos da Quinta da Alorna são feitos a partir de uma seleção das melhores castas e produzidos com recurso às novas tecnologias de vinificação.",
            'regiao'  => "Tejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Lavradores de Feitoria rosé',
            'id_categoria' => 3,
            'id_produtor' => 33,
            'img' => '10.jpg',
            'descricao'  => "Todos os vinhos da Lavradores de Feitoria – desde o grande consumo até à grande guarda – são equilibrados, elegantes e orientados para a boa gastronomia, mas sempre com um cunho do carácter do Douro. Deve esperar-se, e exigir-se, a personalidade forte de cada marca enquanto expressão de terroir, de conceito, ou mesmo de fantasia.",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Quinta da Lagoalva rosé',
            'id_categoria' => 3,
            'id_produtor' => 34,
            'img' => '5.jpg',
            'descricao'  => "A Quinta da Lagoalva de Cima estende-se pela margem sul do Tejo, a cerca de 2 km da Vila de Alpiarça e a 11 Km de Santarém. Em 1834, a Quinta da Lagoalva é comprada por Henrique Teixeira de Sampayo, 1º conde da Póvoa. Em 1841-42 todos os bens passam para D. Maria Luisa Noronha de Sampaio, que casa em 1846 com D. Domingos António Maria Pedro de Souza e Holstein, 2º Duque de Palmela, revertendo a partir dessa época os bens para a Casa Palmela. Sucessivamente sempre em poder dos seus descendentes, as terras são hoje pertença da Sociedade Agrícola Quinta da Lagoalva de Cima SA.",
            'regiao'  => "Tejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Carlos Reynolds rosé',
            'id_categoria' => 3,
            'id_produtor' => 34,
            'img' => '6.jpg',
            'descricao'  => "Thomas Reynolds, marinheiro e comerciante inglês, chega a Portugal em 1820, atraído pelo negócio do vinho e tem dois filhos, Thomas e Robert. É a partir do Porto que abastece o seu armazém comercial em Londres com produtos ibéricos. Em 1838, introduzem-se na indústria corticeira em Espanha, expandindo-se até Portugal acabando por se fixar em Estremoz. Após a família ter partido para a Nova Zelândia Robert fica em Estremoz à frente dos negócios, que rapidamente desenvolve com a aquisição de novas terras e a produção de vinhos de qualidade, atividade esta que exercia com particular empenho e paixão. O Alentejo converte-se no berço definitivo dos Reynolds de Portugal e de Robert, o patriarca da família. Desse berço procedem o filho primogénito de Robert, Robert Rafael e, deste, Carlos. Carlos tem uma primeira filha chamada Gloria, Gloria Reynolds. Em sua honra, e de todos os seus antepassados que viveram no Alentejo, Julian, filho de Gloria, produz um vinho de qualidade, que leva o nome da sua mãe – Gloria Reynolds.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => '2019 Adega do Sôr rosé',
            'id_categoria' => 3,
            'id_produtor' => 35,
            'img' => '7.jpg',
            'descricao'  => "Touriga Nacional. Revela aromas de intensidade média, a rebuçado de framboesa, morango, cereja e pêssego, com notas minerais e toques de floral. Boa acidez com sabor fresco a frutos vermelhos, com um perfil frutado e fresco.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
		Vinhos::create([
            'nome' => 'Leve Penafirme rosé',
            'id_categoria' => 3,
            'id_produtor' => 35,
            'img' => '8.jpg',
            'descricao'  => "A Encosta da Vila Sociedade Agrícola Lda, está situada na região vinícola de Lisboa. Sob a influência do oceano Atlântico, a diversidade da sua paisagem reúne as condições ideais para a produção de uvas de excelente qualidade. Utilizando as melhores castas portuguesas como Arinto (brancos), Tinta Roriz e Touriga Nacional (tintos) combinadas com a internacional Syrah, produzem vinhos encorpados e de excepcional qualidade aromática.",
            'regiao'  => "Lisboa",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Barranco Longo rosé',
            'id_categoria' => 3,
            'id_produtor' => 35,
            'img' => '11.jpg',
            'descricao'  => "A Quinta do Barranco Longo localizada em pleno Barrocal Algarvio, é um projecto de Rui Virgínia que idealizou fazer um vinho personalizado, arrojado e de qualidade e elevar o Algarve a zona de vinhos de eleição. Rodeou-se de uma equipa jovem e qualificada, fez da sua quinta uma vinha modelo e, na sua adega, aliou o tradicional ao tecnológico, dando expressão à sua estratégia de valorização dos pormenores e de aperfeiçoamento constante.",
            'regiao'  => "Algarve",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Crasto Superior branco',
            'id_categoria' => 4,
            'id_produtor' => 31,
            'img' => '12.jpg',
            'descricao'  => "Situada na margem direita do rio Douro, entre a Régua e o Pinhão, a Quinta do Crasto, é uma propriedade com cerca de 130 hectares, dos quais 70 são ocupados por vinhas. Fazem também parte do património da empresa a Quinta do Querindelo, com 10 hectares de Vinha Velha, e a Quinta da Cabreira, no DouroSuperior, com 114 hectares de vinha. Com localização privilegiada na Região Demarcada do Douro, a Quinta do Crasto é propriedade da família de Leonor e Jorge Roquette há mais de um século. Como costuma ser com as grandes Quintas do Douro, a origem da Quinta do Crasto remonta a tempos longínquos - o nome Crasto deriva do latim 'castrum', que significa forte romano.",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 24,
        ]);
        Vinhos::create([
            'nome' => '2016 Mãos Reserva branco',
            'id_categoria' => 4,
            'id_produtor' => 18,
            'img' => '13.jpg',
            'descricao'  => "É um vinho gastronómico com aroma predominante a amendoim, folhas de chá e notas cítricas. Na boca é denso e amanteigado. Acidez bem presente no fim de boca.",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 25,
        ]);
        Vinhos::create([
            'nome' => '2019 Pancas branco',
            'id_categoria' => 4,
            'id_produtor' => 31,
            'img' => '14.jpg',
            'descricao'  => "A Quinta de Pancas está localizada a 45 km a noroeste da cidade de Lisboa, na freguesia de Santo Estevão e Triana, no chamado “Alto Concelho de Alenquer” junto ao lugar de Pancas. As terras de Alenquer estendem se entre a Serra de Montejunto e a lezíria da margem direita do rio Tejo, desdobrando se numa paisagem de montanhas, montes, vales e planícies. A propriedade tem cerca de 50 hectares de vinha . Atualmente as variedades tintas são: Cabernet Sauvignon, Touriga Nacional , Syrah , Merlot, Castelão , Alicante Bouschet, Tinta Roriz, Touriga Franca, Petit Verdot e Malbec. Quanto às castas brancas temos na propriedade: Arinto, Chardonnay e Vital.",
            'regiao'  => "Lisboa",
			'qnt_cl'  => 75,
			'perct_alco'  => 24,
        ]);
        Vinhos::create([
            'nome' => '2019 Encosta do Guadiana branco',
            'id_categoria' => 4,
            'id_produtor' => 31,
            'img' => '15.jpg',
            'descricao'  => "O proeminente enólogo português Rui Reguinga lidera a equipa de enologia desde a primeira colheita. Adepto dos vinhos de “terroir” é um maestro atento a cada nota, para exprimir toda a intensidade da região. Assim apurou uma gama de vinhos equilibrados e elegantes, que encerram aromas, paladares e estrutura num perfil moderno, proporcionando boas harmonizações gastronómicas.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 António Maçanita Fita Preta branco',
            'id_categoria' => 4,
            'id_produtor' => 18,
            'img' => '16.jpg',
            'descricao'  => "Joana e António Maçanita há muito tinham um sonho. Criar um vinho com caráter e personalidade própria, bem ao estilo dos dois irmãos e enólogos. A oportunidade surgiu pelas terras do Douro, onde Joana realiza parte da sua atividade profissional. Por entre patamares e vinhas ao alto, deparou-se com uma matéria-prima muito especial, impossivel de ficar indiferente, ligou ao António e desafiou-o. Em 2011 são lançadas as raízes para o projeto dos irmãos Maçanita no Douro. As vinhas encontram-se no Douro, sub-região do Cima Corgo, perto do Pinhão. Foram cuidadosamente escolhidas para enquadrarem o perfil certo, uvas com muita concentração, riqueza e frescura. Os dois irmãos percorrem juntos as vinhas nas operações determinantes na qualidade e sanidade das uvas. Com uma enologia pouco intreventiva, em que a extração da cor e da estrutura do vinho é feita de forma suave e lenta, os vinhos Maçanita são, a pura expressão da enologia 'à Maçanita', a fruta acima de tudo.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2019 Arca Nova Alvarinho branco',
            'id_categoria' => 4,
            'id_produtor' => 18,
            'img' => '17.jpg',
            'descricao'  => "O Alvarinho mais fresco e elegante de sempre. A sua estrutura complexa aliada a uma boa acidez e mineralidade fazem deste Alvarinho um vinho que dá que falar. Límpido e cristalino de cor citrina. Fruta abundante com notas complexas de citrinos confitados onde se destaca a toranja. De salientar ainda os aromas tropicais bem integrados no conjunto. Alta capacidade de evolução. Estrutura complexa. Volumoso na boca com uma excelente acidez. Muito equilibrado, com estrutura e forte fim-de-boca.",
            'regiao'  => "Vinho Verde",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2013 Espumante Borges Real Senhor Blanc de Noir Velha Reserva 6L',
            'id_categoria' => 5,
            'id_produtor' => 31,
            'img' => '18.jpg',
            'descricao'  => "Feito de Touriga Nacional, tem uma leve tonalidade de uvas tintas, com muita fruta, notas de biscoito, ligeiramente floral, excelente frescura e harmonia com grande equilíbrio na boca. Encorpado mas num perfil elegante. É fino, leve e requintado.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 6,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2016 Espumante Quinta dos Abibes Arinto & Baga',
            'id_categoria' => 5,
            'id_produtor' => 34,
            'img' => '19.jpg',
            'descricao'  => "Com 10 hectares de superfície, sete dos quais de vinha, a Quinta dos Abibes situa-se no sopé da Serra do Buçaco, freguesia de Aguim, concelho de Anadia. Adquirida em 2003, após 12 anos de total abandono, foi objecto de um plano de engenharia agrícola (drenagem e correcção de solos) e de subsequente planificação e execução do plantio das vinhas. A adequação castas/solo/clima foi também objecto de apurada ponderação, tendo em vista vinhos únicos de elevada qualidade. Consubstancia, assim, um projecto cujo imaginário radica em ancestralidades caras à Bairrada, a Portugal e aos portugueses: a vinha e o vinho como elementos estruturantes da nossa cultura.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2016 Espumante Monte do Pintor',
            'id_categoria' => 5,
            'id_produtor' => 34,
            'img' => '20.jpg',
            'descricao'  => "A Sociedade Agrícola da Sossega, Lda. - proprietária do Monte do Pintor - foi constituída em 1991 e tem como objectivo principal a produção e comercialização de vinhos. O primeiro vinho produzido por esta sociedade data de 1993. Em 1995 iniciou-se a comercialização de um vinho regional alentejano com a marca Monte do Pintor. A vinha está instalada em encostas suaves expostas a Sul em solos definidores de um distinto “Terroir”. No encepamento predominam as tradicionais castas tintas alentejanas Trincadeira e Aragonez bem como Castelão, Alfrocheiro, Tinta Caiada, Alicante, Moreto e e nas castas brancas Verdelho, Arinto e Antão-Vaz. A data das vindimas é uma decisão criteriosamente tomada pelo enólogo, que diariamente, faz análises à maturação das uvas, casta por casta, controlando assim a acidez, o açúcar, a cor e a riqueza dos taninos. A vindima é feita exclusivamente à mão sendo os cachos recolhidos em pequenas caixas individuais (para que não haja esmagamento antecipado das uvas antes da chegada à Adega).",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2018 Espumante Terras do Demo Bruto',
            'id_categoria' => 5,
            'id_produtor' => 34,
            'img' => '21.jpg',
            'descricao'  => "Vinho Espumante Branco, de casta Malvasia Fina. Apresenta um aspecto limpo, com bolha fina e persistente e cor levemente citrina com tons de palha. O aroma é intenso, primoroso a flores de malvasia, com um sabor fresco e muito frutado, prolongado no final. Acompanha mariscos, ostras, peixes, aves e carnes brancas.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2017 Espumante Quinta do Gradil Reserva Brut Nature branco',
            'id_categoria' => 5,
            'id_produtor' => 18,
            'img' => '22.jpg',
            'descricao'  => "Arinto e Chardonnay. Na prova revela uma boa complexidade de aromas, aliados à acidez e frescura, típicas das castas que lhe deram origem.",
            'regiao'  => "Lisboa",
			'qnt_cl'  => 75,
			'perct_alco'  => 12,
        ]);
        Vinhos::create([
            'nome' => '2019 Espumante Pequenos Rebentos Ancestral Pet Nat',
            'id_categoria' => 5,
            'id_produtor' => 18,
            'img' => '23.jpg',
            'descricao'  => "Márcio Lopes nasceu no Porto, em 1983, e o seu gosto pela ruralidade cresceu na companhia dos seus avós, que sempre trabalharam na agricultura. Depois de ter tirado a licenciatura de Engenharia Agronómica, que terminou em 2006, começou a trabalhar com Anselmo Mendes já em 2005, em Melgaço. Depois em 2008 esteve na Austrália, onde realizou duas vindimas, em Rutherglen e na Ilha da Tasmânia. Em 2010, começou com dois projectos pessoais, Pequenos Rebentos e Proibido. Em 2017, abraçou um novo projeto na Ribeira Sacra, Espanha.",
            'regiao'  => "Vinho Verde",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2016 Espumante Sidónio de Sousa Special Cuvée',
            'id_categoria' => 5,
            'id_produtor' => 31,
            'img' => '24.jpg',
            'descricao'  => "Da Bairrada e um 'Baga Friend', Sidónio de Sousa é um dos grandes produtores de vinho da região. Reconhecido por ter entre os mais antigos algumas das melhores vinhas Baga da Bairrada, continua a fazer o seu vinho de uma forma tradicional, resultando em vinhos suculentos, requintados com boa fruta e envelhecidos em carvalho velho Português, raro hoje em dia, mesmo em Portugal.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2015 Espumante Quinta das Bágeiras Grande Reserva',
            'id_categoria' => 5,
            'id_produtor' => 35,
            'img' => '25.jpg',
            'descricao'  => "O nome Mário Sérgio Alves Nuno poderá não dizer muito aos mais incautos e distraídos, mas não é nada menos que o grande mentor por detrás dos grandes vinhos da Quinta das Bágeiras. A história da Quinta das Bágeiras resume-se já ao trabalho de 3 gerações, no entanto apenas em 1989, e sob a alçada de Mário Sérgio, se começou a engarrafar e a vender os vinhos sob o nome Quinta das Bágeiras. Em boa hora começaram, pois depressa se tornou uma referência nos vinhos da Bairrada e em Portugal. Nesta casa tudo é feito com o maior respeito pela tradição, pelo saber antigo, respeitando a vinha, a uva e o vinho. O resultado é gratificante, com vinhos genuínos, com enorme carácter e pureza. Embora com feitos com procedimentos antigos, os vinhos da Quinta das Bágeiras não são vinhos de modas, mas que estão sempre na moda. Impreterível conhecê-los.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2017 Espumante Quinta das Bágeiras Super Reserva 1,5L',
            'id_categoria' => 5,
            'id_produtor' => 35,
            'img' => '26.jpg',
            'descricao'  => "O nome Mário Sérgio Alves Nuno poderá não dizer muito aos mais incautos e distraídos, mas não é nada menos que o grande mentor por detrás dos grandes vinhos da Quinta das Bágeiras. A história da Quinta das Bágeiras resume-se já ao trabalho de 3 gerações, no entanto apenas em 1989, e sob a alçada de Mário Sérgio, se começou a engarrafar e a vender os vinhos sob o nome Quinta das Bágeiras. Em boa hora começaram, pois depressa se tornou uma referência nos vinhos da Bairrada e em Portugal. Nesta casa tudo é feito com o maior respeito pela tradição, pelo saber antigo, respeitando a vinha, a uva e o vinho. O resultado é gratificante, com vinhos genuínos, com enorme carácter e pureza. Embora com feitos com procedimentos antigos, os vinhos da Quinta das Bágeiras não são vinhos de modas, mas que estão sempre na moda. Impreterível conhecê-los.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 150,
			'perct_alco'  => 24,
        ]);
        Vinhos::create([
            'nome' => '2015 Casa de Arrochella Vila Flor Reserva tinto',
            'id_categoria' => 1,
            'id_produtor' => 18,
            'img' => '27.jpg',
            'descricao'  => "Com cerca de 600ha, distribuídos por 5 quintas, a Casa de Arrochella faz parte da nova geração de produtores de vinhos DOC Douroe azeites DOP Trás-os-Montes. Descendente e Sucessor de Nicolau de Arrochella Moraes e Castro Pimentel, 1.º Conde de Arrochella, Bernardo de Arrochella Alegria é o grande impulsionador deste projecto que possui mais de 600ha no DouroSuperior, com mais de 115ha de vinhas, e que procurou unir as ligações e a história dos importantes Vínculos da Casa de Arrochella na região de Trás-os-Montes e Alto Douroà sua paixão e entrega ao Douro, assumindo assim este projecto como um desafio também cultural no qual a Casa de Arrochella pretende valorizar a excelência e as potencialidades únicas da sua região duriense, como o seu legado para as futuras gerações.",
            'regiao'  => "Douro",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2013 Cortes de Cima Incógnito verde',
            'id_categoria' => 2,
            'id_produtor' => 35,
            'img' => '28.jpg',
            'descricao'  => "Em 1988, um casal constituído por um dinamarquês e uma americana partiram num veleiro à procura de um lugar para criar uma família, plantar uma vinha e produzir vinho... e assim começa a história das Cortes de Cima, actualmente, uma das principais adegas portuguesas. Localizada na Vidigueira as Cortes de Cima é uma propriedade familiar dirigida diariamente por Hans e Carrie Jorgensen, com uma área de 140 ha de vinha, produzem-se as castas Aragonez, Syrah, Touriga Nacional, Trincadeira, Petit Verdot, Antão Vaz e Verdelho. As vinhas mais antigas, foram plantadas em 1991 quando a casta Syrah não era permitida pelas regulamentações da região. Ainda assim, Hans, convencido de que tínha o clima e o solo ideal para esta variedade do Ródano, criou o primeiro vinho “ilegal” Syrah, produzido em 1998 e comercializado com o nome Incógnito que depressa ganhou fama em Portugal e medalhas em Londres, Bruxelas e Bordéus.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2014 Herdade do Esporão Vinha do Badeco Touriga Nacional verde',
            'id_categoria' => 2,
            'id_produtor' => 31,
            'img' => '29.jpg',
            'descricao'  => "A Herdade do Esporão alberga um terroir único fruto da aliança de um clima muito particular, regulado e amenizado pelo grande lago central, com os diferentes tipos de solo, exposições e pelo vasto património vitícola constituído por castas autóctones, castas oriundas de outras regiões vitivinícolas e castas internacionais. A paisagem tipicamente mediterrânica é composta por suaves planícies ondulantes que ocupam um pouco mais de 1.800 hectares de área total, 450 hectares dos quais ocupados com vinha e cerca de 80 hectares ocupados com olivais.",
            'regiao'  => "Alentejo",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);
        Vinhos::create([
            'nome' => '2015 Marquês de Marialva Baga Reserva verde',
            'id_categoria' => 2,
            'id_produtor' => 34,
            'img' => '30.jpg',
            'descricao'  => "Cientes do enorme potencial das terras de Cantanhede para a produção de vinhos de qualidade superior, em 1954 um conjunto de 100 agricultores funda a Adega Cooperativa de Cantanhede. Contando hoje com cerca de 700 viticultores associados activos e uma produção média anual de 6 a 7 milhões de quilos de uva, esta Adega é o principal produtor da Região Demarcada da Bairrada, representando 30 a 40% da produção global da região e certifica cerca de 80% da sua produção, sendo líder destacado nas vendas de vinhos DOC Bairrada e IG Beira Atlântico.",
            'regiao'  => "Bairrada",
			'qnt_cl'  => 75,
			'perct_alco'  => 23,
        ]);

    }
}
