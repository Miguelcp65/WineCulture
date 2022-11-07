@extends("paginas.frontend.layout")

@section('title', 'Termos e Condições')

@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.css"
        integrity="sha512-BIyIsOFJCQKKhxrCMtXBi1RJTXmV1vuMEWCRbU/UFieuYyvGAbl03GktViTWKM39yu9Jywbec1V0cRbQ6KgMVQ=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.js"
        integrity="sha512-zy/iMxvOAQO5VsB1/enNUXKWxoSBFAyjXwwwIU+sMYf2+iOnqoW2EokpAnnTwue6/Kcv3w7qyALGbppj3mOVgA=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/termos_condicoes.css') }}">
@endsection

@section('content')
    <div class="ui container" id="rowtd">
        <div class="ui styled fluid accordion">
            <div class="title tc active">
                <i class="dropdown icon"></i>
                Termos e Condições
            </div>
            <div class="content active tc">
                <p class="transition">
                    Bem Vindo à WineCulture!
                </p>
                <p>
                    Estes termos e condições definem as regras e regulamentos de utilização do Website da WineCulture,
                    localizado em
                    www.wineculture.pt.
                </p>
                <p>
                    Ao acessar este site, presumimos que você aceita estes termos e condições.
                    Não continue a usar WineCulture se você não concordar com todos os termos e condições declarados nesta
                    página.
                </p>
                <p>

                    A terminologia a seguir se aplica a estes Termos e Condições, Declaração de Privacidade e Aviso de
                    Isenção de
                    Responsabilidade e todos os Contratos: "Cliente", "Você" e "Seu" referem-se a você, a pessoa que faz
                    login neste
                    site e está em conformidade com os termos e condições da Empresa.
                    "A Empresa", "Nós", "Nós", "Nosso" e "Nós" referem-se à nossa Empresa.
                    "Parte", "Partes" ou "Nós" referem-se ao Cliente e a nós mesmos.
                    Todos os termos se referem à oferta, aceitação e consideração do pagamento necessário para realizar o
                    processo
                    de nossa assistência ao Cliente da maneira mais adequada para o propósito expresso de atender às
                    necessidades do
                    Cliente no que diz respeito à prestação dos serviços declarados da Empresa, de acordo com e sujeito à
                    legislação
                    vigente da Holanda.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Biscoitos
            </div>
            <div class="content tc">
                <p class="transition mb-4">
                    Empregamos o uso de cookies.
                    Ao acessar a WineCulture, você concorda em usar cookies de acordo com a Política de Privacidade da
                    WineCulture.
                </p>
                <p>
                    A maioria dos sites interativos usa cookies para nos permitir recuperar os detalhes do usuário em cada
                    visita.
                    Os cookies são usados ​​pelo nosso site para habilitar a funcionalidade de certas áreas para tornar mais
                    fácil
                    para as pessoas que visitam nosso site.
                    Alguns de nossos afiliados / parceiros de publicidade também podem usar cookies.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Licença
            </div>
            <div class="content tc">
                <p>
                    Salvo indicação em contrário, WineCulture e / ou seus licenciados detêm os direitos de propriedade
                    intelectual
                    de todo o material da WineCulture.
                    Todos os direitos de propriedade intelectual são reservados.
                    Você pode acessar este de WineCulture para seu uso pessoal sujeito às restrições estabelecidas nestes
                    termos e
                    condições.
                </p>
                <p>
                    Você não deve:
                </p>
                <ul>
                    <li class="mb-4">
                        Publique novamente o material da WineCulture
                    </li>
                    <li class="mb-4">
                        Vender, alugar ou sublicenciar material da WineCulture
                    </li>
                    <li class="mb-4">
                        Reproduza, duplique ou copie o material da WineCulture
                    </li>
                    <li class="mb-4">
                        Redistribua o conteúdo da WineCulture
                    </li>
                </ul>
                <p>
                    Partes deste site oferecem uma oportunidade para os usuários postarem e trocarem opiniões e informações
                    em
                    certas áreas do site.
                    WineCulture não filtra, edita, publica ou revisa os comentários antes de sua presença no site.
                    Os comentários não refletem os pontos de vista e opiniões da WineCulture, seus agentes e / ou afiliados.
                    Os comentários refletem os pontos de vista e as opiniões da pessoa que postou seus pontos de vista e
                    opiniões.
                    Na medida do permitido pelas leis aplicáveis, WineCulture não será responsável pelos Comentários ou por
                    qualquer
                    responsabilidade, danos ou despesas causados ​​e / ou sofridos como resultado de qualquer uso e / ou
                    publicação
                    e / ou aparência dos Comentários neste local na rede Internet.
                </p>
                <p>
                    WineCulture reserva-se o direito de monitorar todos os Comentários e remover quaisquer Comentários que
                    possam
                    ser considerados inadequados, ofensivos ou que causem violação destes Termos e Condições.
                </p>
                <p>
                    Você garante e representa que:
                </p>
                <ul>
                    <li class="mb-4">
                        Você tem o direito de publicar os Comentários em nosso site e tem todas as licenças e consentimentos
                        necessários para fazê-lo;
                    </li>
                    <li class="mb-4">
                        Os Comentários não invadem nenhum direito de propriedade intelectual, incluindo, sem limitação,
                        direitos
                        autorais, patentes ou marcas comerciais de terceiros;
                    </li>
                    <li class="mb-4">
                        Os comentários não contêm qualquer material difamatório, calunioso, ofensivo, indecente ou de outra
                        forma
                        ilegal que seja uma invasão de privacidade
                    </li>
                    <li class="mb-4">
                        Os Comentários não serão usados ​​para solicitar ou promover negócios ou customizar ou apresentar
                        atividades
                        comerciais ou atividades ilegais.
                    </li>
                </ul>
                <p>
                    Você, por meio deste, concede à WineCulture uma licença não exclusiva para usar, reproduzir, editar e
                    autorizar
                    terceiros a usar, reproduzir e editar qualquer um de seus Comentários em todas e quaisquer formas,
                    formatos ou
                    mídia.
                </p>
                <h3 class="header_li">
                    Hiperlink para nosso conteúdo
                </h3>
                <p>
                    As seguintes organizações podem se conectar ao nosso site sem aprovação prévia por escrito:
                </p>
                <ul>
                    <li class="mb-4">
                        Agências governamentais;
                    </li>
                    <li class="mb-4">
                        Motores de busca;
                    </li>
                    <li class="mb-4">
                        Organizações de notícias;
                    </li>
                    <li class="mb-4">
                        Os distribuidores de diretórios online podem ter links para nosso site da mesma maneira que fazem um
                        hiperlink para sites de outras empresas listadas;
                    </li>
                    <li class="mb-4">
                        Negócios credenciados em todo o sistema, exceto a solicitação de organizações sem fins lucrativos,
                        shopping
                        centers de caridade e grupos de arrecadação de fundos de caridade que não podem ter um link para
                        nosso site.
                    </li>
                </ul>
                <p>
                    Essas organizações podem ter links para nossa página inicial, publicações ou outras informações do site,
                    desde
                    que o link: (a) não seja enganoso de forma alguma;
                    (b) não implique falsamente em patrocínio, endosso ou aprovação da parte vinculante e de seus produtos e
                    / ou
                    serviços;
                    e (c) se enquadra no contexto do site da parte vinculante.
                </p>
                <p>
                    Podemos considerar e aprovar outras solicitações de link dos seguintes tipos de organizações:
                </p>
                <ul>
                    <li class="mb-4">
                        Fontes de informações de consumidores e / ou negócios comumente conhecidas;
                    </li>
                    <li class="mb-4">
                        Sites da comunidade dot.com;
                    </li>
                    <li class="mb-4">
                        Associações ou outros grupos que representam instituições de caridade;
                    </li>
                    <li class="mb-4">
                        Distribuidores de diretórios online;
                    </li>
                    <li class="mb-4">
                        Portais de internet;
                    </li>
                    <li class="mb-4">
                        Escritórios de contabilidade, advocacia e consultoria;
                    </li>
                    <li class="mb-4">
                        Instituições educacionais e associações comerciais.
                    </li>
                </ul>
                <p>
                    Aprovaremos as solicitações de link dessas organizações se decidirmos que: (a) o link não nos faria
                    parecer
                    desfavoravelmente para nós mesmos ou para nossos negócios credenciados;
                    (b) a organização não possui registros negativos conosco;
                    (c) o benefício para nós da visibilidade da hiperligação compensa a ausência da WineCulture;
                    e (d) o link está no contexto de informações gerais de recursos.
                </p>
                <p>
                    Essas organizações podem ter um link para nossa página inicial, desde que o link: (a) não seja de forma
                    alguma
                    enganoso;
                    (b) não implique falsamente em patrocínio, endosso ou aprovação da parte vinculante e de seus produtos
                    ou
                    serviços;
                    e (c) se enquadra no contexto do site da parte vinculante.
                </p>
                <p>
                    Se você é uma das organizações listadas no parágrafo 2 acima e está interessado em fazer um link para o
                    nosso
                    site, você deve nos informar enviando um e-mail para WineCulture.
                    Por favor, inclua o seu nome, o nome da sua organização, informações de contato, bem como o URL do seu
                    site, uma
                    lista de quaisquer URLs a partir dos quais você pretende criar um link para o nosso site e uma lista dos
                    URLs em
                    nosso site para os quais você gostaria de ligação.
                    Espere 2 a 3 semanas por uma resposta.
                </p>
                <p>
                    As organizações aprovadas podem fazer um hiperlink para nosso site da seguinte forma:
                </p>
                <ul>
                    <li class="mb-4">
                        Usando nosso nome corporativo;
                        ou
                    </li>
                    <li class="mb-4">
                        Pelo uso do localizador uniforme de recursos ao qual está vinculado;
                        ou
                    </li>
                    <li class="mb-4">
                        Pelo uso de qualquer outra descrição do nosso site vinculado que faça sentido dentro do contexto e
                        formato
                        do conteúdo do site da parte vinculante.
                    </li>
                </ul>
                <p>
                    Nenhum uso do logotipo da WineCulture ou outra arte será permitido para vinculação na ausência de um
                    contrato de
                    licença de marca registrada.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                iFrames
            </div>
            <div class="content tc">
                <p class="transition mb-4">
                    Sem aprovação prévia e permissão por escrito, você não pode criar quadros em torno de nossas páginas da
                    Web
                    que
                    alterem de qualquer forma a apresentação visual ou aparência de nosso site.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Responsabilidade de Conteúdo
            </div>
            <div class="content tc">
                <p class="transition">
                    Não seremos responsáveis ​​por qualquer conteúdo que apareça em seu site.
                    Você concorda em nos proteger e nos defender contra todas as reclamações que estão aumentando em seu
                    site.
                    Nenhum link (s) deve aparecer em qualquer site que possa ser interpretado como difamatório, obsceno ou
                    criminoso, ou que infrinja, de outra forma viole ou defenda a violação ou outra violação de quaisquer
                    direitos
                    de terceiros.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                A Sua Privacidade?
            </div>
            <div class="content tc">
                <p>
                    Leia a
                    <a href="/politica_de_privacidade">
                        Politica de Privacidade
                    </a>
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Reserva de direitos
            </div>
            <div class="content tc">
                <p class="transition">
                    Nós nos reservamos o direito de solicitar que você remova todos os links ou qualquer link específico
                    para o
                    nosso site.
                    Você aprova a remoção imediata de todos os links para nosso site, mediante solicitação.
                    Também nos reservamos o direito de amenizar estes termos e condições e sua política de vinculação a
                    qualquer
                    momento.
                    Ao conectar-se continuamente ao nosso site, você concorda em se comprometer e seguir estes termos e
                    condições de
                    vinculação.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Remoção de links do nosso site
            </div>
            <div class="content tc">
                <p class="transition mb-4">
                    Se você encontrar algum link em nosso site que seja ofensivo por qualquer motivo, você está à vontade
                    para
                    entrar em contato e nos informar a qualquer momento.
                    Consideraremos as solicitações de remoção de links, mas não somos obrigados a fazê-lo ou responder
                    diretamente a
                    você.
                </p>
                <p>
                    Não garantimos que as informações neste site sejam corretas, não garantimos sua integridade ou precisão;
                    nem prometemos garantir que o site permaneça disponível ou que o material no site seja mantido
                    atualizado.
                </p>
            </div>
            <div class="title tc">
                <i class="dropdown icon"></i>
                Aviso Legal
            </div>
            <div class="content tc">
                <p>
                    Na extensão máxima permitida pela lei aplicável, excluímos todas as representações, garantias e
                    condições
                    relacionadas ao nosso site e ao uso deste site.
                    Nada neste aviso:
                </p>
                <ul>
                    <li class="mb-4">
                        Limitar ou excluir nossa responsabilidade ou sua responsabilidade por morte ou danos pessoais;
                    </li>
                    <li class="mb-4">
                        Limitar ou excluir nossa responsabilidade ou sua responsabilidade por fraude ou deturpação
                        fraudulenta;
                    </li>
                    <li class="mb-4">
                        Limitar qualquer uma de nossas responsabilidades de qualquer forma que não seja permitida pela lei
                        aplicável;
                    </li>
                    <li class="mb-4">
                        Excluir qualquer uma das nossas responsabilidades ou responsabilidades que não possam ser excluídas
                        pela
                        legislação aplicável.
                    </li>
                </ul>
                <p>
                    As limitações e proibições de responsabilidade estabelecidas nesta Seção e em outras partes desta
                    isenção de
                    responsabilidade: (a) estão sujeitas ao parágrafo anterior;
                    e (b) regem todas as responsabilidades decorrentes da isenção de responsabilidade, incluindo
                    responsabilidades
                    decorrentes de contratos, atos ilícitos e violação de dever estatutário.
                </p>
                <p>
                    Desde que o site e as informações e serviços nele fornecidos sejam gratuitos, não seremos responsáveis
                    ​​por
                    perdas ou danos de qualquer natureza.
                </p>
            </div>
        </div>
    </div>

    <!--SCRIPTS-->
    <script>
        $('.ui.accordion')
            .accordion({
                exclusive: false
            });

    </script>
@endsection
