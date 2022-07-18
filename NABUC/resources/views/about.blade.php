@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="desc-about">
                    NABUC - Nucleo de Amigos dos Buracos das Cesaredas.
                    De uma ideia surgem várias opiniões, ao fim de vários debates a ideia passa a um plano e de um
                    plano
                    surge
                    uma acção.
                    O NABUC surge em 2012 como um grupo com o intuito de explorar, estudar, registar, preservar e
                    valorizar
                    o
                    meio cavernícula existente no Planalto das Cezaredas e nas áreas envolventes por todos os meios
                    a
                    seu
                    alcance.
                    Em 2014 une-se ao <a style="color: blue" href="https://www.facebook.com/cehlourinha">Centro de Estudos
                        Históricos da
                        Lourinhã</a>, integrando no mesmo como secção de Espeleologia.
                </h2>
            </div>
            <div class="col-4">
                <img class="img-cave1" src="images/cave1.jpg" alt="cave1">
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12349.90833433481!2d-9.245183864562312!3d39.300107972166856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1f4a6228e7dc69%3A0x7b51b3fba61bd11e!2sCesaredas%2C%20Reguengo%20Grande!5e0!3m2!1spt-PT!2spt!4v1653400427214!5m2!1spt-PT!2spt"
                width="600" height="450" style="border:0;margin:15px" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
            <h2 class="desc2-about">
                O Planalto das Cesaredas, integra um extenso maciço calcário, um espaço geológico muito antigo,
                pertencente
                ao período que medeia entre o Cretácico e o Jurássico Médio, quando terminam as violentas convulsões
                da
                crosta terrestre, então dominada por um clima quente e húmido, com quedas de chuva semelhantes às
                actuais.
                <br><span id="dots">...</span><span id="more">
                    Nessa altura, a maioria das montanhas sofre uma acentuada erosão resultante do clima húmido, que
                    transforma
                    algumas das montanhas, em colinas baixas, com extensos bancos calcários, quando se inicia a
                    extinção
                    dos
                    dinossáurios, das amonites e outras espécies animais e vegetais.
                    A área global do Planalto, ronda hoje os 9.600 hectares, incluindo pela sua continuidade, o
                    Monte do
                    Picoto
                    no concelho do Bombarral, com uma altitude média na ordem dos 145 metros. O Planalto, estende-se
                    ao
                    longo de
                    doze quilómetros de comprimento com dez de largura, uma área que abrange parte dos concelhos de
                    Óbidos
                    (freguesia do Olho Marinho), Peniche (freguesia de Serra d'El-Rei), assim como uma parte
                    bastante
                    significativa dos concelhos de Bombarral e Lourinhã, os primeiros, pertencentes ao distrito de
                    Leiria e
                    o
                    ultimo, ao distrito de Lisboa.
                    O clima, presentemente, é ameno e o ritmo das estações suave. Um equilíbrio que resulta da
                    proximidade
                    marítima e da influência resultante do sistema montanhoso, Montejunto/Estrela
                    As amonites, faziam parte de uma espécie marinha, que ocupou o nicho ecológico das actuais
                    lulas,
                    animais
                    com dimensões variáveis, desde alguns centímetros a 1 metro de diâmetro, que viviam dentro de
                    uma
                    concha
                    espiralada de natureza carbonatada, semelhante à dos actuais Náutilos.Os Paleontólogos, estimam
                    que
                    o
                    Planalto das Cesaredas terá começado há cerca de 160 milhões de anos, quando o mar começa a
                    recuar
                    nesta
                    zona, provavelmente, quando se iniciou a formação das várias espécies fossilizadas, onde se
                    destacam
                    as
                    Amonites (fósseis de espécies marinhas, que terão desaparecido há cerca de 65 milhões de anos,
                    na
                    mesma
                    altura que desapareceram os dinossauros).
                    Para além das Amonites e outras espécies fossilizadas, o Planalto das Cesaredas, preserva também
                    algumas
                    ribeiras e um enorme reservatório de água subterrâneo, que brota no Olho Marinho, situação que
                    motivou o
                    aparecimento dos famosos "Olhos d'Água" do Olho Marinho. A força dos Olhos d'Água do Olho do
                    Marinho,
                    para
                    além de estar na origem da formação do topónimo "Olho", proporciona ao visitante um agradável e
                    repousante
                    espectáculo, salvo quando ocorrem períodos de seca, como os que se registaram no século XIX, em
                    1890, no
                    século XX, em 1945, 1994 e 1995 e mais recentemente em 2004, 2005 e 2006.
                    Ao longo do Planalto das Cesaredas existem também vários algares e grutas, que guardaram um
                    importante
                    espólio arqueológico, onde se destaca a Gruta Casa da Moura, cujos primeiros trabalhos de
                    investigação feitos por Nery Delgado, ocorreram no século XIX, em 1866 e 1867.
            </h2>
        </div>
        <button class="btn" onclick="myFunction()" id="myBtn">Ler Mais</button>
        <h2 style="margin-bottom: 15px">
            <br><br><br>
            <a href="https://www.olhomarinho.net">Mais Sobre - Olho Marinho</a>
        </h2>
    </div>
@endsection
