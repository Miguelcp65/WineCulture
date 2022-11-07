@extends("paginas.frontend.layout")

@section('title', 'Sobre Vinhos')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/sobre_vinhos.css') }}">
@endsection

@section("content")

<div id="body">
    <div class="container-sobrevinhos" >
        <div class="all" >
            <div class="all2" >

                <div class="sidenav1 sticky-top" >
                    <a class="tab active1" onclick="toggle('one')">História do Vinho</a>
                    <a class="tab" onclick="toggle('two')">Classificação dos Vinhos</a>
                    <a class="tab" onclick="toggle('three')">O processo de produção e fermentação</a>
                    <a class="tab" onclick="toggle('four')">Degustação</a>
                    <a class="tab" onclick="toggle('five')">Armazenamento</a>
                    <a class="tab" onclick="toggle('six')">Produção</a>
                    <a class="tab" onclick="toggle('seven')">Consumo</a>
                    <a class="tab" onclick="toggle('eight')">Copos e garrafas</a>
                    <a class="tab" onclick="toggle('nine')">Culinária</a>
                </div>

                <!-- Page content -->
                <div class="text">
                    <div class="main">
                        <div class="holder">
                            <div class="oneTxt">
                                <div class="hero-image1">
                                    <div class="hero-text">
                                        <h1>História do vinho</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>As evidências arqueológicas sugerem que a mais antiga produção de vinho teve lugar em vários locais da Geórgia, Irão,Turquia e China entre 8000 e 5000 a.C.. As evidências arqueológicas tornam-se mais claras e apontam para a
                                        domesticação da videira, em sítios do Oriente Próximo, Suméria e Egipto, no início da Idade do Bronze, desde aproximadamente 3000 a.C..</p>
                                    <p>As mais antigas evidências sugerindo a produção de vinho na Europa, e entre as mais antigas do mundo, são originárias de sítios arqueológicos na Grécia, datados de 6500 a.C.. De facto, várias fontes gregas, bem como Plínio
                                        o Velho, descrevem como os antigos gregos utilizavam gesso parcialmente desidratado antes da fermentação e um tipo de cal após aquela com o propósito de diminuir a acidez. O escritor grego Teofrasto é a mais antiga fonte
                                        conhecida a descrever esta prática de vinificação entre os antigos gregos. Antigo Egito, o vinho tornou-se parte da história registada, desempenhando um papel importante na vida cerimonial. O vinho teria sido introduzido
                                        no Egipto pelos gregos. São também conhecidos vestígios de vinho na China, datados do segundo e primeiro milénios a.C..</p>
                                    <span class="ttext">
                                        <p>O vinho era comum na Grécia e Roma clássicas. Os antigos gregos introduziram o cultivo de videiras, como a Vitis vinifera, nas suas numerosas colónias na Itália, Sicília, França meridional, Península Ibérica. Dioniso era o
                                            deus grego do vinho e da diversão, e o vinho era frequentemente mencionado nos escritos de Homero e Esopo. Muitas das principais regiões vinhateiras da Europa Ocidental actual foram estabelecidas pelos romanos. A tecnologia
                                            de fabricação do vinho melhorou consideravelmente durante o tempo do Império Romano. Eram, já então, conhecidas muitas variedades de uvas e de técnicas de cultivo e foram criados os barris para a armazenagem e transporte
                                            do vinho.</p>
                                        <p>Desde o tempo dos romanos, pensava-se que o vinho (eventualmente misturado com ervas e minerais) tivesse também propriedades medicinais. Nesses tempos, não era invulgar dissolverem-se pérolas no vinho para se conseguir mais
                                            saúde. Cleópatra criou a sua própria lenda ao prometer a Marco António que ela "beberia o valor de uma província" numa taça de vinho, após o que bebeu uma valiosa pérola com uma taça de vinho.</p>
                                        <p>Na bíblia cristã o termo vinho aparece cerca de 140 vezes, dentre as quais duas passagens são mais amplamente conhecidas: a transformação da água em vinho e a instituição da Eucaristia (ou Santa Ceia, como é mais conhecida
                                            entre os protestantes). Durante a Idade Média, a Igreja Cristã era uma firme apoiante do vinho, o qual era necessário para a celebração da missa católica. Em locais como a Alemanha, a cerveja foi banida e considerada pagã
                                            e bárbara, enquanto que o consumo de vinho era visto como civilizado e como sinal de conversão. O vinho era proibido pelo Islão, mas, após os primeiros avanços de Geber e outros químicos muçulmanos sobre a destilação do
                                            vinho, este passou a ter outros usos, incluindo cosméticos e medicinais. De facto, o cientista e filósofo persa do século X, Al-Biruni descreveu várias receitas em que o vinho era misturado com ervas, minerais e até mesmo
                                            gemas, com fins medicinais. O vinho era tão venerado e o seu efeito tão temido que foram elaboradas teorias sobre qual seria a melhor gema para fabricar taças para contrariar os seus efeitos secundários considerados indesejáveis.
                                            Muitos cientistas clássicos como Al-Biruni, Teofrasto, Georg Agricola, Albertus Magnus bem como autores mais recentes como George Frederick Kunz descrevem os muitos usos talismânicos e medicinais do vinho combinado com
                                            minerais.
                                        </p>
                                        <p>Portugal é um país com uma longa tradição na produção de vinho, tendo sido exportador deste produto desde tempos remotos. A produção de uvas e de vinho é tradicionalmente dispersa, com elevado número de produtores de uvas e
                                            um elevado número de pequenas adegas. Nas décadas de 50 e 60 do século XX, houve um esforço de concentração da oferta de vinho, com a criação de mais de uma centena de adegas cooperativas distribuídas por todo o país. Essas
                                            adegas, na sua grande maioria, permaneceram ativas até à adesão de Portugal à CEE e transformavam as uvas de milhares de pequenos agricultores, a maioria dos quais em explorações polivalentes. Para muitos desses agricultores,
                                            a receita proveniente das uvas que entregavam à adega constituía a verba mais avultada que entrava na exploração (e, na maioria dos casos, no agregado familiar) ao longo de todo o ano, sendo essa a verba que permitia fazer
                                            alguns investimentos de melhoria da exploração ou aquisição de património.</p>
                                    </span>
                                    <div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>

                            </div>
                            <div class="twoTxt">
                                <div class="hero-image2">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Classificação dos vinhos</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>
                                        Existem cinco tipos distintos de vinhos: os vinhos tintos, os brancos, os rosés, os espumantes, e os vinhos fortificados. Em Portugal existe um tipo de vinho específico, o vinho verde, que pode ser tinto ou branco, mas devido à sua acentuada acidez pode
                                        ser considerado como uma categoria à parte. Os vinhos tintos podem ser obtidos através das uvas tintas ou das tintureiras (aquelas em que a polpa também possui pigmentos). Os vinhos brancos podem ser obtidos através de
                                        uvas brancas ou de uvas tintas desde que as cascas dessas uvas não entrem em contato com o mosto e que essas não sejam tintureiras. Já os vinhos rosés podem ser feitos de duas maneiras: misturando-se o vinho tinto com o
                                        branco ou diminuindo o tempo de maceração (contato do mosto com as cascas) durante a vinificação do vinho tinto
                                    </p>
                                    <p>
                                        O espumante é um vinho que passa por uma segunda fermentação alcoólica, que pode ser na garrafa, chamado de método tradicional ou <i>champenoise</i>, ou em auto-claves (tanques isobarométricos) chamados
                                        <i>charmat</i>. Ambas as formas de vinificação fazem a fermentação em recipiente fechado, incorporando assim dióxido de carbono (CO
                                        <sub>2</sub>) ao liquido e dando origem às borbulhas ou <i>pérlage</i>.
                                    </p>
                                    <p>
                                        Os vinhos fortificados são aqueles cuja fermentação alcoólica é interrompida pela adição de aguardente (~70% vol). De acordo com o momento da interrupção, e da uva que está sendo utilizada, ficará mais ou menos doce. O grau alcoólico final dos vinhos
                                        fortificados fica entre 19-22% vol. Os mais famosos são o Vinho do Porto (Portugal), o Vinho da Madeira (Portugal), o Xerez (Espanha) e o Marsala (Sicília).
                                    </p>
                                    <span class="ttext">
                                        <p>
                                            Por conta de obras cinematográficas de parca pesquisa histórica, a maioria das pessoas julga que o consumo do vinho era comum no Egipto e há quem diga que é de lá sua obscura origem. Entretanto o vinho era mercadoria importada pelo Egipto, cuja bebida
                                            nacional era a cerveja, normalmente feita de restos de pães.
                                        </p>
                                        <p>
                                            Os vinhos de péssima qualidade são designados vulgarmente por "zurrapa".
                                        </p>
                                        <p>
                                            Cada país e cada região produtora possui uma classificação própria. Veja a classificação italiana em DOCG, a francesa em >AOC e a da União Europeia em Denominação de Origem Protegida. Portugal foi um país pioneiro, no que diz respeito à criação de denominações
                                            de origem para os seus vinhos, com a criação da região demarcada do Vinho do Porto, em 1756. A região foi redefinida em 1907 e logo a seguir, em 1908, ficando nessa altura com os limites muito próximos dos que ainda hoje
                                            tem. No mesmo ano (1908), foram criadas as regiões demarcadas do Vinho Verde, de Carcavelos e do Dão. Em 1911, foi demarcada a região de Bucelas (vinhos brancos).
                                        </p>
                                        <p>
                                            Com a adesão de Portugal à CEE (actual União Europeia), o sector vitivinícola foi objeto de medidas de pré‑adesão, pelo que no início dos anos 80 a sua organização em regiões demarcadas (dez regiões tradicionalmente produtoras de vinho que recebiam a
                                            designação de “Regiões Demarcadas”, nomeadamente, Douro/Vinho do Porto, Vinho Verde, Dão, Bairrada, Bucelas, Colares, Carcavelos, Setúbal – Moscatel, Madeira e Algarve) sofreu uma importante alteração, visando cumprir as
                                            regras da política agrícola europeia – criação de áreas de Denominação de Origem Controlada (DOC) e classificação qualitativa dos vinhos através das categorias VQPRD (Vinho de Qualidade Produzido em Região Determinada),
                                            Vinho Regional e Vinho de Mesa. A lei-quadro das Regiões Demarcadas, publicada em 1985, e o consequente decreto‑lei n.º 429 de 1986 alteraram a designação “Região Demarcada” para “Denominação de Origem Controlada” ou DOC.
                                            Além disso, foram criadas 28 novas regiões que passaram a designar‑se por IPR (Indicação de Proveniência Regulamentada). Ao mesmo tempo, a Junta Nacional do Vinho foi substituída pelo atual Instituto da Vinha e do Vinho
                                            (IVV), organismo que responde às exigências da política de mercado europeia e que definiu os mapas vitivinícolas nacionais; ou seja, já antes da adesão à CEE, o setor sofreu alterações com vista à integração do país na
                                            Comunidade Europeia.
                                        </p>
                                        <p>
                                            No virar do século existiam em Portugal 23 regiões DOC e nove regiões IPR, num total de 32 regiões de produção de vinhos denominados VQPRD.
                                        </p>
                                        <p>
                                            Os vinhos são assim classificados:
                                        </p>
                                        <h2>Quanto à classe</h2>
                                        <ul>
                                            <li>
                                                de mesa: graduação alcoólica de 8,6° a 14° G.L., possui as seguintes subdivisões:
                                                <ul>
                                                    <li>
                                                        finos ou nobres: Vinhos produzidos somente de uvas viníferas</a>.
                                                    </li>
                                                    <li>
                                                        especiais: Vinhos mistos, produzidos de variedades viníferas e uvas híbridas ou americanas.
                                                    </li>
                                                    <li>
                                                        comuns: Vinhos produzidos predominantemente com variedades híbridas ou americanas.
                                                    </li>
                                                    <li>
                                                        frisantes ou gaseificados: Vinhos com gaseificação mínima de meia atmosfera e máxima de duas atmosferas.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                leve: graduação alcoólica de 7° a 8,5° G.L., elaborado sempre com uvas viníferas.
                                            </li>
                                            <li>
                                                espumante: resultante unicamente de uma segunda fermentação alcoólica, possui alto nível de dióxido de carbono, resultando em borbulhas (graduação alcoólica de 10° a 13° G.L.).
                                                <ul>
                                                    <li>
                                                        champanhe - É um espumante feito essencialmente com as uvas Chardonnay e Pinot Noir, mundialmente conhecida, produzida exclusivamente na região homônima na França. Champagne é uma denominação de origem.
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                licoroso: graduação alcoólica de 14° a 18° G.L. Adicionado, ou não, de álcool potável, caramelo, concentrado de mosto e sacarose.
                                            </li>
                                            <li>
                                                composto ou fortificado: graduação alcoólica de 15° a 18° G.L., obtida pela adição ao vinho de plantas amargas ou aromáticas, substâncias de origem mineral ou animal.
                                            </li>
                                        </ul>
                                        <h2>Quanto à cor</h2>
                                        <ul>
                                            <li>
                                                tinto: produzido a partir de variedades de uvas tintas, com longo contato com a casca da fruta. A diferença de tonalidade depende de tipo de fruto, do tempo e do método de envelhecimento.
                                            </li>
                                            <li>
                                                branco: produzido em sua maioria, a partir de uvas brancas. Quando produto de uvas tintas, a fermentação é feita com a ausência das cascas.
                                            </li>
                                            <li>
                                                rosado, <i>rosé</i> ou clarete: com aparência intermediaria pode ser produzido de duas formas:
                                                <ul>
                                                    <li>de uvas tintas: com breve contato com as cascas que dão a pigmentação ao vinho, que após são separadas.
                                                    </li>
                                                    <li>por corte: obtém-se pela mistura de um vinho branco com um vinho tinto.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <h2>Quanto ao teor de açúcar</h2>
                                        <ul>
                                            <li>Vinho Seco: 0 a 4 g/L;</li>
                                            <li>Vinho meio-seco ou semi-sec: 4,1 a 25 g/L;</li>
                                            <li>Vinho suave: mais de 25,1 a 80 g/L.</li>
                                        </ul>
                                        <h2>Quanto à variedade da uva</h2>
                                        <p>
                                            Todos nós sabemos que o vinho é feito com uvas. Mas não são aquelas encontradas no supermercado. As uvas próprias para o vinho são chamadas, em latim, de <i>Vitis Vinifera</i> – têm pele grossa, bagos pequenos e doces e
                                            contêm sementes. No mundo todo, são mais de 1.300 variedades diferentes, algumas mais comuns, outras específicas de um país ou até de uma região.
                                        </p>
                                        <p>
                                            Os primeiros termos com os quais você deve se acostumar no mundo dos vinhos para saber o que você está bebendo são Varietal e Assemblage (também substituído por Corte ou Blend).
                                        </p>
                                        <h4>Varietal</h4>
                                        <p>
                                            O vinho varietal é aquele produzido com um único tipo de uva, ou que pelo menos tenha grande predominância da mesma uva em sua composição. Se você está no supermercado, por exemplo, e vê um vinho em que no rótulo está escrito Merlot, é um varietal. Ou
                                            Cabernet Sauvignon. Ou Sauvignon Blanc. O importante é ter o nome de uma única uva.
                                        </p>
                                        <p>
                                            Esse tipo de vinho surgiu na década de 1960, como estratégia de marketing dos norte-americanos. Eles queriam ser competitivos em um mercado dominado pelos europeus, que nomeavam seus vinhos a partir da região em que eram produzidos – na época, o conceito
                                            vendido era o de terroir, por isso os vinhos eram de Bordeaux, Rioja, Douro etc. Os americanos passaram a produzir Cabernet Sauvignon, Chardonnay, Pinot Noir e outros vinhos varietais que começaram a fazer sucesso no mercado.
                                            Por conta disso, os varietais são mais encontrados no Novo Mundo, enquanto no Velho Mundo ainda se produz mais vinhos de corte.
                                        </p>
                                        <p>
                                            Para ser considerado varietal, o vinho não precisa ter 100% da uva que está estampada no rótulo. A legislação muda a cada país, mas é possível ter um pequeno percentual de outras uvas, para que o enólogo tenha liberdade para produzir um vinho de melhor
                                            qualidade. No Brasil, Chile e Nova Zelândia, por exemplo, para ser varietal é preciso ter 75% de uma única uva. Na Austrália e na África do Sul, 85%; em algumas regiões dos Estados Unidos, o percentual sobe para 90%. Assim,
                                            é legítimo dizer que para ser varietal o vinho deve conter entre 75% e 90% da uva que está no seu rótulo.
                                        </p>
                                        <p>
                                            Mas para que essa "mistura" é necessária? Muitas vezes para "consertar o vinho". Se você olhar um rótulo de vinho varietal norte-americano, por exemplo, além da uva principal há mais três ou quatro pequenas quantidades de outras uvas. Para eles, o mais
                                            importante é garantir o padrão de qualidade, mantendo o mesmo sabor do vinho em todas as safras.
                                        </p>
                                        <p>
                                            Um exemplo de varietal é o Chianti, que pela legislação italiana deve conter 90% de Sangiovese em sua composição. Os outros 10% geralmente são de Malvasia e Canaiolo, em proporções que variam de produtor para produtor.
                                        </p>
                                        <p>
                                            Outra situação é quando o enólogo quer incluir no vinho características específicas. A Cabernet Sauvignon, por exemplo, produz vinhos encorpados, estruturados e com taninos às vezes agressivos. Adicionando uma pequena quantidade de Merlot, o vinho fica
                                            mais redondo, com taninos macios e elegantes.
                                        </p>
                                        <p>
                                            Da próxima vez que for experimentar um varietal, dê uma olhadinha no rótulo: você pode ter ali uma dica das características do vinho, de acordo com as variedades que foram misturadas à uva principal.
                                        </p>
                                        <h4>Corte, Assemblage ou Blend</h4>
                                        <p>
                                            É tudo a mesma coisa: corte, em português; assemblage, em francês; e blend, em inglês. Significa a mistura de dois ou mais tipos de uvas para criar um vinho especial. Há alguns cortes que já se tornaram clássicos, como o Corte Bordalês (de >Bordeaux),
                                            imitado no mundo todo. Esse corte leva Cabernet Sauvignon, Merlot e Cabernet Franc, podendo ser adicionadas também outras uvas como Petit Verdot, Malbec e Carménère, essas últimas com menos frequência.
                                        </p>
                                        <p>
                                            Os cortes são utilizados para melhorar o vinho, criar diferentes composições, somar qualidades e multiplicar a complexidade de sabores e aromas.
                                        </p>
                                        <p>
                                            Uma curiosidade: existem também assemblages de uma única uva! Isso acontece quando se misturam safras diferentes, ou mesmo uvas da mesma casta, mas de vinhedos diferentes.
                                        </p>
                                        <p>
                                            Pode também ser produzido vinho a partir dos frutos de videiras de outras espécies ou de videiras híbridas, criadas pelo cruzamento genético de duas espécies.
                                            <i>Vitis labrusca</i>, <i>Vitis aestivalis</i>, <i>Vitis rupestris</i>, <i>>Vitis rotundifolia</i> e <i>Vitis riparia</i> são espécies nativas da América do Norte, cujas uvas são geralmente consumidas como fruta, ou na
                                            forma de sumo ou doce de uva, e por vezes transformadas em vinho.
                                        </p>
                                        <p>
                                            Não se deve confundir o termo <i>híbridas</i> com a prática da enxertia. A maioria das vinhas do mundo encontram-se plantadas com <i>Vitis vinifera</i> enxertadas em bacelos de espécies norte-americanas. Esta prática é
                                            comum, uma vez que as espécies da América do Norte são resistentes à filoxera, um insecto parasita das raízes da videira que eventualmente causa a sua morte. No final do século XIX as vinhas da Europa foram devastadas por
                                            este insecto, provocando a destruição maciça das vinhas então existentes bem como de eventuais replantações. A enxertia é feita em todos os países produtores de vinho, excepto o Chile e Argentina, ainda não expostos ao
                                            insecto.
                                        </p>
                                        <p>
                                            A variedade das uvas, a orientação das encostas, a elevação e a topografia da vinha, o tipo e a química do solo, o clima e as condições sazonais sob as quais as uvas crescem, e ainda as culturas de leveduras locais, todos juntos formam o conceito de <i>
                                                terroir</i>. O número de combinações possíveis faz com que existam grandes variedades entre os produtos vinícolas, a qual é ainda aumentada pelos processos de fermentação, acabamento e envelhecimento.
                                        </p>
                                        <p>
                                            Porém, as diferenças de sabor não são desejáveis para os grandes produtores de vinho de mesa ou de outros vinhos mais baratos, nos quais a consistência é mais importante. Estes produtores tentaram minimizar as diferenças entre as uvas de várias proveniências
                                            utilizando tecnologias como a micro-oxigenação, filtração de taninos, a centrifugação, a micro e ultrafiltração, a osmose inversa , a evaporação, tratamentos térmicos, electrodiálise, a coluna de cone rotativo entre outras.
                                        </p>
                                        <h2>Quanto ao aroma</h2>
                                        <p>
                                            Devido à complexa constituição presente no vinho, existem três tipos de análise (Gustativa, olfativa e visual). Os aromas transmitem cada característica presente no vinho. Cada vez que um vinho é servido, engarrafado ou degustado, seu aroma se modifica.
                                            Estão presentes no nariz as mucosas olfativas, local onde são presenciados os aromas. Alguns vinhos são produzidos a partir de combinações e para que as tais sejam identificadas, a análise olfativa é necessária. É uma bebida
                                            recheada de mistérios e sabores.
                                        </p>
                                        <p>
                                            Os aromas mais reconhecidos são os florais, vegetais, balsâmicos, frutados, minerais, animais e o de especiarias. Também são classificados em aromas primários (uvas e vinícolas), secundários (processo de fermentação) e terciários (bouquet ou processo
                                            de amadurecimento).
                                        </p>
                                        <h4>Utilização de diferentes leveduras no processo de fabricação e seu impacto nas características organolépticas do vinho</h4>
                                        <p>
                                            Há inúmeros métodos para melhorar o aroma de vinhos, como maceração a frio, utilização de enzimas, processo de congelamento pré-fermentativo, utilização de inóculos diferentes e alguns casos inóculos mistos com o intuito de trazer características únicas
                                            na produção de vinho.
                                        </p>
                                        <p>
                                            Obter um aroma e cor equilibrado e que vá de encontro ao paladar e aos olhos do consumidor ao final do processo de produção do vinho é um dos pontos chaves envolvidas no decorrer do processo. A utilização de leveduras não
                                            <i>Saccharomyces</i> ganharam popularidade em enologia, pois a maioria delas tem a capacidade de aumentar a acidez do vinho ao mesmo tempo que reduz o teor alcoólico e aumentam a estabilidade da cor, além de modificar
                                            e produzir compostos químicos aromáticos específicos que estão diretamente relacionados ao aroma e sabor do vinho. Em estudos anteriores onde foram utilizadas cepas de
                                            <i>T. delbrueckii</i> e <i>S. cerevisiae</i> demostraram que na fermentação mista o teor dos principais esteres etílicos aumentaram levemente na fermentação simultânea, enquanto diminui em 44% na fermentação sequencial
                                            utilizando essa duas cepas, em outros casos a inoculação sequencial de <i>Wickerhamomyces anomalus</i> e <i>S.
                                                cerevisiae</i> pode elevar a concentração de acetato de etila a um nível inaceitável, ou seja, o potencial enológico de leveduras não <i>Saccharomyces</i> varia de acordo com as diferentes estratégias de inoculação para a fermentação.
                                        </p>
                                        <p>
                                            Na produção de vinho descrita por Kong e colaboradores, 2019 foi utilizado uma fermentação mista com a cepa de <i>Pichia fermentans</i> e <i>S.
                                                cerevisiae</i> utilizando como substrato a uva Pearl com origem no sul da China. Foi obtido um vinho com teores de antocianina e antocianina polimérica elevados, sendo que esses compostos estão diretamente relacionados a estabilidade da cor
                                            do vinho tinto, além de ter apresentado um uma maior taxa de polimerização de compostos taninos que são os compostos responsáveis por dar a sensação de ressecamento na boca. As concentrações de compostos aromáticos derivados
                                            da também foram melhoradas por fermentação mista, incluindo álcoois, ésteres e feniletílicos superiores.
                                        </p>
                                        <h2>Vintage</h2>
                                        <p>
                                            Um vinho considerado <i>vintage</i> é aquele feito com a totalidade ou maioria de uvas produzidas em determinado ano e rotulado dessa forma. Muitos países permitem que o
                                            <i>vintage</i> tenha uma pequena porção de uvas de outra safra. Variações nas características das uvas de ano para ano podem incluir profundas diferenças de sabor, cor, aromas, corpo e equilíbrio. Um bom vinho tinto pode
                                            melhorar muito suas características com o envelhecimento, desde que bem armazenado. Consequentemente, é comum que um apreciador ou mesmo o fabricante guarde algumas garrafas de seus melhores vinhos para consumo futuro.
                                        </p>
                                        <p>
                                            Nos Estados Unidos, por exemplo, um vinho pode adquirir a denominação de <i>vintage</i> e rotulado com a região de produção (como o "Vale de Napa" na Califórnia) se ele tiver, pelo menos, 95 por cento de seu volume produzido
                                            com uvas colhidas naquele ano. Os fatores climáticos podem ter um grande impacto nas características dos vinhos que podem se estender a diferentes safras do mesmo <i>terroir.</i> Eles podem variar dramaticamente em sabor,
                                            qualidade e equilíbrio.
                                        </p>
                                        <p>
                                            Os vinhos não <i>vintage</i> podem ser produzidos a partir da mistura de mais de uma safra, num processo que visa a manter a confiança do mercado e manter uma certa qualidade mesmo em anos de safras ruins.
                                        </p>
                                    </span>
                                    <div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="threeTxt">
                                <div class="hero-image3">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">O processo de produção e fermentação</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <h3>A vindima (colheita)
                                    </h3>

                                    <p>A qualidade da uva tem enorme influência sobre o sabor e qualidade do vinho, por isso a vindima deve ser realizada no tempo certo. Uma vindima antes do tempo resulta em um vinho aguado, com baixa concentração de açúcar e, consequentemente,
                                        de álcool. Se a uma vindima for tardia, a uva produzirá um vinho rico em álcool, mas com pouca acidez. Os fatores fundamentais que influem na vindima:</p>
                                    <ul>
                                        <li>O clima - ensolarado, temperatura, umidade, etc.
                                        </li>
                                        <li>O terroir - a conjuntura dos fatores climáticos, de solo e humano.
                                        </li>
                                    </ul>
                                    <h3>O esmagamento</h3>
                                    <p>Era feito com os pés, tradição mantida até hoje em algumas poucas regiões. Hoje em dia, em geral, o processo é totalmente mecanizado, quase sem contato humano. O esmagamento da uva produz uma mistura deSumo, cascas e bagas
                                        que será chamado de mosto. No caso de vinhos tintos, essa mistura é enviada para os tanques, enquanto na elaboração de vinhos brancos, sólidos e líquidos são separados, usando-se apenas a fração líquida para a produção.
                                        É normal que 1&nbsp;kg de uva produza cerca de 650 a 700 ml de líquido.</p>
                                    <h3>A fermentação</h3>
                                    <p>É a parte mais complexa e importante do processo de fabricação do vinho. Nesta etapa, é necessário um controle rigoroso da temperatura, bem como a presença correcta de microrganismos responsáveis pela >fermentação. Dentre eles,
                                        o mais comum é uma levedura, a Saccharomyces cerevisae, e o controle da temperatura é fundamental, não devendo exceder os 25 a 30&nbsp;°C.</p>
                                        <span class="ttext">
                                        <p>Existem várias etapas na fermentação:</p>
                                    <h4>Fermentação tumultuosa</h4>
                                        <p>Ela dura poucos dias, quando ocorrem um grande desprendimento do gás carbônico e o aumento da temperatura.</p>
                                        <h4>Fermentação lenta </h4>
                                        <p>Com o passar dos dias, a fermentação começa a diminuir de intensidade devido à diminuição da presença do açúcar. Nesta etapa, o líquido separa-se da parte sólida (bagaço, cascas, etc) e são eliminados os últimos traços de glicose,
                                            que se transformam em álcool. São poucos os açúcares que ainda restam e, neste momento, o mosto já é o vinho propriamente dito.</p>
                                        <h3>Filtragem</h3>
                                        <p>Nesta etapa ocorre a filtração do vinho. Ele é clarificado com a retirada dos produtos e sedimentos que deixam o vinho turvo.
                                        </p>
                                        <h3>Envelhecimento</h3>
                                        <p>É uma das fases mais cultuadas do processo. Ocorre na grande maioria dos vinhos tintos, e na minoria dos demais. Esta fase é realizada em barris de carvalho e/ou na garrafa. Em ambos, o oxigênio, que passa pelos poros da madeira
                                            fará com que o vinho entre numa fase de desenvolvimento que transformará Os seus aromas, sabores e cor, com essas características ganhando em complexidade e qualidade. Pode variar em tempo de acordo com as características
                                            do produto, devendo esse tempo ser avaliado pelo enólogo. Para que ocorra da forma correta, o uso de bons barris, bem como o armazenamento da garrafa em locais adequados - com pouca luz e temperaturas amenas - é vital.</p>
                                        <h3>Lote</h3>
                                        <p>Também chamado de loteamento, o lote é a mistura de diferentes tipos de vinhos com a finalidade de obter um produto de maior qualidade e equilíbrio.</p>
                                        <p>Os vinhos tintos da região de Bordéus são produzidos com uvas cabernet sauvignon, cabernet franc, merlot, petit verdot ou, menos frequentemente, malbec. O uso de duas ou três dessas uvas é conhecido como lote bordalês.
                                        </p>
                                        <center>
                                            <table class="wikitable">
                                                <caption>
                                                    <b>Produção de vinho por país em 2005 e
                                                        2007</b>
                                                    <br>

                                                    <small>(toneladas)</small>
                                                </caption>
                                                <tbody>
                                                    <tr>
                                                        <th>Classificação</th>
                                                        <th>País</th>
                                                        <th>Produção 2005</th>
                                                        <th>Produção 2007</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            Itália
                                                        </td>
                                                        <td>5 056 648</td>
                                                        <td>8 519 418</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            França
                                                        </td>
                                                        <td>5 329 449</td>
                                                        <td>6 500 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            China
                                                        </td>
                                                        <td>1 300 000</td>
                                                        <td>6 250 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            Estados Unidos
                                                        </td>
                                                        <td>2 232 000</td>
                                                        <td>6 105 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            Espanha
                                                        </td>
                                                        <td>3 934 140</td>
                                                        <td>6 013 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                            Argentina
                                                        </td>
                                                        <td>1 564.000</td>
                                                        <td>2 900 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>
                                                            Chile
                                                        </td>
                                                        <td>788 551</td>
                                                        <td>2 350 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>
                                                            África do Sul
                                                        </td>
                                                        <td>1 157 895</td>
                                                        <td>1 600.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>
                                                            Austrália
                                                        </td>
                                                        <td>1 274 000</td>
                                                        <td>1 530 439</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>
                                                            Brasil
                                                        </td>
                                                        <td>320 000</td>
                                                        <td>1 341 806</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>
                                                            Alemanha
                                                        </td>
                                                        <td>1 014 700</td>
                                                        <td>1.300.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>
                                                            Portugal
                                                        </td>
                                                        <td>576 500</td>
                                                        <td>1 050 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>
                                                            Grécia
                                                        </td>
                                                        <td>437 178</td>
                                                        <td>950 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>
                                                            Roménia
                                                        </td>
                                                        <td>575 000</td>
                                                        <td>821 306</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>
                                                            Moldávia
                                                        </td>
                                                        <td>230 000</td>
                                                        <td>598 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>
                                                            Hungria
                                                        </td>
                                                        <td>485 000</td>
                                                        <td>543 400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>
                                                            Ucrânia
                                                        </td>
                                                        <td>240 000</td>
                                                        <td>415 000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>
                                                            Áustria
                                                        </td>
                                                        <td>258 000</td>
                                                        <td>329 825</td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>
                                                            Rússia
                                                        </td>
                                                        <td>512 000</td>
                                                        <td>328 810</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>
                                                            Croácia
                                                        </td>
                                                        <td>180 000</td>
                                                        <td>180 000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                        <p>Com o provável aquecimento global, as principais zonas vinícolas poderão ser geograficamente deslocadas para latitudes mais extremas, ou se verem obrigadas a mudar o perfil de suas vinhas. Com aumento médio de temperatura,
                                            previsto entre 1º a 4&nbsp;°C, no período de crescimento das videiras, com extremos de chuva, enchentes e picos de calor, a produção de uva será influenciada e as faixas do globo favoráveis à vinicultura serão deslocadas
                                            aos polo. Áreas tradicionais da produção de uva e vinho, impotentes em relação às mudanças climáticas, deverão alterar as variedades de uva cultivadas e aumentar a utilização de tecnologias como a irrigação e antecipar
                                            a colheita, o que não evitará produção de vinhos sem a tipicidade habitual. </p>




                                    </span><div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="fourTxt">
                                <div class="hero-image4">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Degustação</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>A degustação é o ato de examinar e avaliar o vinho. Os vinhos podem ser classificados segundo o efeito que causam nas papilas gustativas. A doçura é determinada pela quantidade de açúcar residual do vinho após a fermentação.
                                        Veja acima a classificação do vinho quanto ao teor de açúcar.</p>
                                    <p>É possível identificar sabores e aromas individuais graças ao complexo mix de moléculas que a uva e seu suco podem conter. A degustação frequentemente pode identificar as características de uma uva específica como também os
                                        sabores que resultaram da fabricação e maturação do vinho, seja intencional ou não. Os mais típicos elementos de sabor que são intencionalmente introduzidos no vinho são aqueles presentes nos barris de carvalho: chocolate,
                                        baunilha, café, além de mato ou couro. Outras variedades de minerais também são absorvidas pelo vinho.
                                    </p><span class="ttext">
                                        <h3>Serviço do vinho</h3>

                                        <p>Abrir um vinho não é apenas o ato de remover a rolha. Alguns rótulos dos vinhos alertam para que ele seja aberto algumas horas antes para que ele possa "respirar" enquanto outros exigem ser bebidos imediatamente. No caso dos
                                            champanhes, fazer a rolha estourar para sinalizar o início de uma celebração é uma atitude que deve ser evitada. Ao "estourar" a rolha, a pressão faz com que o líquido seja arremessado para fora bem como grande parte do
                                            gás carbônico ali presente desde a segunda fermentação. Com isso ele certamente perderá em qualidade.</p>
                                        <p>Caso o vinho tenha borras ou sedimentos, é necessário que se faça a decantação, ou seja, despejá-lo delicadamente em novo recipiente, o <i>decanter</i>, a fim de permitir melhor aeração e também de remover essas borras, ou
                                            depósitos sólidos provenientes da guarda por longo período.</p>
                                        <p>O vinho deve ser degustado no copo ou cálice específico colocando-se apenas uma quantidade suficiente para dois ou três goles. Uma vez aprovado, ele pode ser servido até atingir o máximo de um terço da altura do copo. Esse
                                            procedimento faz com que os aromas se concentrem dentro do copo além de permitir apreciar as cores do vinho em todas as suas tonalidades.</p>
                                        <dl>
                                            <dt>Temperaturas ideais para degustação do
                                                vinho</dt>
                                        </dl>
                                        <ul>
                                            <li>Vinhos tintos - 17 a 18&nbsp;°C</li>
                                            <li>Vinho do Porto Vintage - 16&nbsp;°C</li>
                                            <li>Vinhos tintos novos e os verdes - 12 a 14&nbsp;°C
                                            </li>
                                            <li>Vinhos da Madeira e Porto comuns - 12&nbsp;°C</li>
                                            <li>Vinhos brancos incluindo da Madeira e Porto - 10 a 11&nbsp;°C
                                            </li>
                                            <li>Vinhos Rosé - 10&nbsp;°C</li>
                                            <li>Vinhos brancos novos - 8 a 10&nbsp;°C</li>
                                            <li>Vinhos espumantes - 6 a 8&nbsp;°C</li>
                                        </ul>
                                        <h3>O brinde</h3>
                                        <p>O brinde só se popularizou no século XVI, na Inglaterra. Em inglês, o termo significa "toast" (torrada), que vem do hábito de colocar pão torrado num cálice. Ao beber à saúde de alguém, era preciso beber todo o vinho para então
                                            alcançar a torrada embebida.
                                        </p>
                                        <p>Mas existem inúmeras explicações para a prática do brinde. Uma delas diz que o brinde é o costume de bater levemente os copos uns nos outros antes de beber. Diz a lenda que essa prática começou para "misturar" o conteúdo dos
                                            copos antes de bebê-lo. Se algum deles estiver com veneno, ele seria diluído nos demais copos e seus efeitos diminuídos.</p>
                                        <p>Hoje em dia, essa questão é muito mais prosaica. O brinde é usado na celebração e em grandes acontecimentos em que o contato com os copos indica o desejo de união, paz e alegria entre os presentes. O brinde evoluiu a ponto
                                            de não se limitar apenas ao toque das taças. Diz-se que o brinde é uma oportunidade de realçar e reunir os cinco sentidos humanos nos do vinho:</p>
                                        <ul>
                                            <li>O olfato: representado pelo aroma
                                            </li>
                                            <li>O paladar: representado pelo sabor
                                            </li>
                                            <li>O tato: representada pela temperatura
                                            </li>
                                            <li>A visão: representada pelas cores
                                            </li>
                                            <li>A audição: representada pelo som do toque das taças já que não há a possibilidade de "ouvi-lo"
                                            </li>
                                        </ul>
                                    </span><div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="fiveTxt">
                                <div class="hero-image5">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Armanezamento</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>
                                        A maioria dos vinhos é vendida em garrafas de vidro e seladas com rolhas de cortiça. Recentemente alguns produtores de vinho vem buscando alternativas como tampas atarrachantes ou rolhas sintéticas, não muito bem vistas pela maioria. É consenso entre
                                        os grandes produtores, leia-se "os melhores vinhos", o uso das rolhas de cortiça, especialmente as produzidas em Portugal, pois ainda é tido como o produto mais adequado.
                                    </p><span class="ttext">
                                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu
                                            when clicked.
                                        </p>
                                    </span><div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sixTxt">
                                <div class="hero-image6">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Produção</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>Em 2005 os maiores produtores mundiais de uvas eram: França, Itália, Espanha, Estados Unidos, Argentina, Austrália, África do Sul, Alemanha, Chile, Portugal, Roménia, Rússia, Hungria, Áustria e Grécia. Em 2003 os líderes em
                                        volume de exportação por quota de mercado mundial eram: França (22%), Itália (20%), Espanha (17%), Austrália (8%), Chile (6%), Estados Unidos (5%), Portugal (4%) e Alemanha (4%).</p>
                                    <p>Em 2007, as 13 maiores nações produtoras de uvas foram: Itália, França, China, Estados Unidos, Espanha, Argentina, Chile, África do Sul, Austrália, Brasil, Alemanha, Portugal e Grécia como mostra a tabela abaixo.
                                    </p>
                                </div>
                            </div>
                            <div class="sevenTxt">
                                <div class="hero-image7">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Consumo</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>A maioria dos vinhos é vendida em garrafas de vidro e seladas com rolhas de cortiça. Recentemente alguns produtores de vinho vem buscando alternativas como tampas atarrachantes ou rolhas sintéticas, não muito bem vistas pela
                                        maioria. É consenso entre os grandes produtores, leia-se "os melhores vinhos", o uso das rolhas de cortiça, especialmente as produzidas em Portugal, pois ainda é tido como o produto mais adequado.</p>
                                    <p>As adegas são os lugares designados especialmente para a guarda e a maturação do vinho. Numa adega climatizada, vários factores como temperatura e humidade são controlados por sistemas eletrônicos. Em contraste, as melhores
                                        adegas ainda são aquelas sob a terra, sem sistemas controladores, implantadas em locais cuidadosamente estudados. Estima-se que a Casa Moët & Chandon, de Champagne - França, tenha cerca de 28&nbsp;km de túneis onde descansam
                                        seus vinhos antes de ser comercializados.</p> <span class="ttext">
                                        <p>O vinho é um alimento natural e perecível. Se deixado exposto ao calor, luz, vibrações ou flutuações de temperatura e umidade, para todos os tipos de vinho, ele certamente irá estragar. Quando devidamente armazenado o vinho
                                            não apenas mantém sua qualidade, mas também melhora e cresce em aroma, sabores e complexidade. Os experts aconselham a manter os vinhos entre 14 e 17&nbsp;°C, em locais frescos com umidade de entre 60 e 70% e sem luz. Os
                                            vinhos devem estar deitados, para que a rolha não resseque.
                                        </p>
                                        <div class="center">
                                            <div class="thumb tnone">
                                                <div class="thumbinner" style="width:302px;">
                                                    <div class="thumbcaption">
                                                        Consumo anual de vinho por habitante:
                                                        <br>
                                                        <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column">
                                                            <span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background: #eeeeee; color:black; font-size:100%; text-align:center;">
                                                                &nbsp;</span>&nbsp; menos de 1 litro.
                                                        </div>
                                                        <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column">
                                                            <span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background: #eed4d3; color:black; font-size:100%; text-align:center;">
                                                                &nbsp;</span>&nbsp; de 1 a 7 litros.
                                                        </div>
                                                        <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column">
                                                            <span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background: #dea2a0; color:black; font-size:100%; text-align:center;">
                                                                &nbsp;</span>&nbsp; de 7 a 15 litros.
                                                        </div>
                                                        <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column">
                                                            <span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background: #ae6f6d; color:black; font-size:100%; text-align:center;">
                                                                &nbsp;</span>&nbsp; de 15 a 30 litros.
                                                        </div>
                                                        <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column">
                                                            <span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background: #5f0400; color:black; font-size:100%; text-align:center;">
                                                                &nbsp;</span>&nbsp; Mais de 30 litros.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Os consumidores europeus têm se mostrado mais exigentes ao longo dos anos, mais seletivos e preocupados com a qualidade. Há também grande curiosidade quanto aos vinhos de outras regiões do mundo. Na América do Sul, Chile e
                                            Argentina são os grandes países produtores de vinhos de qualidade, o que levou todo o mercado do continente a também ser mais exigente.
                                        </p>
                                    </span><div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="eightTxt">
                                <div class="hero-image8">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Copos e Garrafas</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <div class="thumb tmulti tright">
                                        <div class="thumbinner" style="width:298px;max-width:298px">
                                            <div class="trow">
                                                <div class="thumbcaption" style="text-align:left;background-color:transparent">
                                                    Taças diferentes para vinhos distintos: branco e tinto.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>O copo ou taça, tem grande influência na degustação do vinho. Alguns dos grandes fabricantes de cristais (como a austríaca) produzem copos diferentes para cada tipo de vinho incluindo-se aí as uvas e as regiões onde são produzidas.
                                    </p>
                                    <p>O único meio de produzir um copo específico para determinado vinho é experimentando-o. Utilizam-se vários tipos diferentes de taças - mais ou menos arredondadas, mais abertas, mais fechadas, mais estreitas, etc. - e faz-se
                                        a degustação com grande número de enólogos que irão determinar em qual tipo de copo o vinho ganha em qualidade. O formato escolhido passa a ser utilizado para aquele tipo de uva, vinho ou região específica. A Riedel costuma
                                        fazer esse tipo de degustação regularmente.
                                    </p> <span class="ttext">

                                        <p>Um fato curioso é a presença de concavidade no fundo de várias garrafas de vinho, anedotalmente associada à sua qualidade. Embora seja comum ouvir a informação de que quanto maior a concavidade, melhor o vinho, não há fontes
                                            confiáveis que confirmem essa relação e pode-se ver facilmente vinhos bons e caros com concavidade menor que alguns de qualidade inferior ou, mesmo, sem concavidade alguma. Não há uma explicação consensual para o real propósito
                                            da concavidade, apesar de haver algumas mais comuns, como:</p>
                                        <ul>
                                            <li>É um remanescente histórico da era em que as garrafas eram feitas artesanalmente, sopradas através de um cano. Essa técnica deixava uma ponta na base da garrafa, fazendo com que fosse necessária a concavidade para que essa
                                                ponta não arranhasse a mesa ou deixasse a garrafa instável (sem equilíbrio).</li>
                                            <li>Teria a função de deixar a garrafa mais estável, já que uma pequena imperfeição na mesa seria suficiente para desestabilizar uma garrafa de fundo plano.</li>
                                            <li>Consolida os sedimentos em um anel espesso no fundo da garrafa, diminuindo a quantidade de resíduos despejada nas taças, ao ser servido o vinho.</li>
                                            <li>Aumenta a resistência das garrafas, permitindo que armazenem vinhos ou champanhe com pressão mais elevada.
                                            </li>
                                            <li>Mantém as garrafas fixas em pinos de esteiras condutoras nas linhas de produção onde as garrafas são preenchidas.
                                            </li>
                                            <li>Acomoda os dedos, facilitando o serviço do vinho.
                                            </li>
                                            <li>De acordo com a lenda, a concavidade era usada pelos servos. Eles frequentemente sabiam mais que seus mestres sobre o que se passava na cidade e, com o dedo colocado na concavidade, sinalizavam caso o convidado não fosse
                                                confiável.
                                            </li>
                                            <li>Disponibiliza uma melhor pegada manual para a produção tradicional de vinho espumante.</li>
                                            <li>Diminui o volume real da garrafa, dando a falsa impressão de que se está levando mais vinho que a quantidade real.</li>
                                            <li>As tavernas possuíam um pino de aço verticalmente fixado no bar, onde as garrafas vazias teriam seus fundos perfurados de modo a garantir que não seriam cheias novamente.</li>
                                            <li>A concavidade age como uma lente, refratando a luz e tornando a cor do vinho mais chamativa.</li>
                                            <li>Diminui a chance de a garrafa ressonar durante o transporte.
                                            </li>
                                            <li>Permite o empilhamento mais fácil das garrafas.
                                            </li>
                                        </ul>
                                        <h3>Medidas</h3>
                                        <dl>
                                            <dt>Copos e garrafas</dt>
                                        </dl>
                                        <ul>
                                            <li>Cálices, taças ou balões: 12,5 cl.
                                            </li>
                                            <li>A <i>flûte</i> de Champanhe: 12,5 cl. (Também chamada de tulipa)
                                            </li>
                                        </ul>
                                        <dl>
                                            <dt>Garrafas</dt>
                                        </dl>
                                        <ul>
                                            <li>Mignon, 5 Cl.</li>
                                            <li>Filette (vinhos do Vale do Loire) 37,5 Cl.</li>
                                            <li>O pot (Region de Lion) aprox. 46 Cl. Ele tem um fundo estreito o que lhe dá uma certa estabilidade.
                                            </li>
                                            <li>Clavelin, 62 Cl (Jura) usadas nos vinhos amarelos ( AOC)
                                            </li>
                                            <li>Meia-garrafa, 37,5 Cl (35 Cl nos vinhos do Rhone)
                                            </li>
                                            <li>Garrafa comum de vidro com 75 Cl,</li>
                                            <li>Wished, 50 Cl (Suíça)</li>
                                            <li>Fiasque (Itália)
                                            </li>
                                        </ul>
                                        <dl>
                                            <dt>Outros tipos de garrafas</dt>
                                        </dl>
                                        <ul>
                                            <li>Magnum 1,5 L (2 garrafas)</li>
                                            <li>Jeroboam, 3 L (4 garrafas)</li>
                                            <li>Réhoboam, 4,5 L (6 garrafas)</li>
                                            <li>Matusalem, 6 L (8 garrafas)</li>
                                            <li>Salmanazar, 9 L (12 garrafas)</li>
                                            <li>Baltazar, 12 L (16 garrafas)</li>
                                            <li>Nabucodonosor, 15 L (20 garrafas)</li>
                                            <li>Solomon, 18 L (24 garrafas)</li>
                                            <li>Sovereign, 26,25 L (35 garrafas)</li>
                                            <li>Primacy, 27 L (36 garrafas)</li>
                                        </ul>
                                        <p>A maioria das embalagens para armazenar vinhos é fabricada em múltiplos ou divisões de 75 Cl. A origem desse volume é objeto de debate entre os especialistas em pesos e medidas, surpresos com o uso dessa medida singular surgida
                                            no período pós-revolução francesa.
                                        </p>
                                        <p>A medida "em garrafas" é uma medida genérica que veio dos campos de produção até o início do século XX. Os vinhos de qualidade em geral eram acondicionados em garrafas de 75 Cl. É por essa razão que esse volume é utilizado
                                            ainda hoje como medida nos meios comerciais - um galão imperial corresponde a aproximadamente 4,5 l, ou seja, cerca de 6 garrafas. Uma compra de 12 garrafas de um bom vinho de Bordeaux corresponde a dois galões imperiais
                                            enquanto um barril de Bordeaux de 225 litros corresponde a 50 galões imperiais do mesmo vinho.
                                        </p>
                                    </span><div class="btn-container">
                                        <button class="toggle">Ver Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="nineTxt">
                                <div class="hero-image9">
                                    <div class="hero-text">
                                        <h1 style="font-size:50px">Culinária</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="mainTXT">
                                    <p>O vinho é uma bebida popular e muito importante no acompanhamento de vários pratos da culinária mundial, desde a regional, mais simples e tradicional, até as mais sofisticadas e complexas. O vinho é importante na cozinha não
                                        apenas por ser uma bebida, mas como um agente que realça os sabores da boa comida.</p>
                                    <p>É muito importante que haja uma boa harmonia entre o vinho e a comida. Como regra geral as carnes e massas devem ser acompanhadas por vinhos tintos enquanto os peixes e frutos do mar ficam melhores com os vinhos brancos. Porém
                                        isso nem sempre é verdade. O que se deve levar em consideração ao escolher o vinho é a qualidade e o sabor dos ingredientes do prato que se vai degustar. Um alimento feito à base de temperos fortes, seja carne ou peixe,
                                        deve ser acompanhado com um vinho igualmente encorpado enquanto um prato mais leve merece um vinho leve. Essa boa combinação entre o prato e o vinho chama-se "harmonização".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre_vinhos.js') }}"></script>
@endsection
@endsection
