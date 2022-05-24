@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="titulo">Aracnideos</h1>
        </div>
        <h3>
            As aranhas pertencem à Classe dos Aracnídeos e, como tal, possuem quatro pares de patas locomotoras, um par
            de palpos e um par de quelíceras. Têm o corpo coberto de pêlos e um sistema respiratório adaptado à vida em
            terra.
            <br><span id="dots">...</span><span id="more"><br>
                Distinguem-se das restantes ordens de aracnídeos, entre outras características, por apresentarem o corpo
                nitidamente diferenciado em duas regiões: o prossoma ou cefalotórax (anterior) e o opistossoma ou
                abdómen
                (posterior), por terem as quelíceras terminadas num gancho ôco adaptado à injecção de veneno e por
                apresentarem no abdómen as fieiras, apêndices articulados mais ou menos transformados através dos quais
                regulam a produção de seda.
                <br><br>
                São animais pequenos, variando as espécies de Portugal entre 0,5mm e 4cm de corpo. A maioria das nossas
                espécies tem oito olhos, o grupo das haplogínicas apresenta tipicamente apenas seis e existem espécies
                cavernícolas pertencentes a ambos os grupos que perderam os olhos por completo.
                O sistema respiratório apresenta diversas adaptações de acordo com as espécies mas, em termos gerais,
                pode-se dizer que existem dois tipos: pulmões laminados e traqueias. A mesma espécie pode apresentar
                ambos.
                As fieiras, geralmente situadas na parte posterior/inferior do abdómen, também podem ser de vários tipos
                e
                em número variável de duas a oito.
                <br><br>
                Todas as espécies conhecidas em Portugal se reproduzem sexuadamente (poder-se-á ter descoberto
                recentemente
                a primeira excepção) e é frequente existir um acentuado dimorfismo sexual em termos de tamanho, formas e
                cores. A fecundação é interna, existindo uma cópula durante a qual se transmite o esperma. Para tal, os
                machos possuem estruturas copulatórias especializadas nos palpos. Todas são ovíparas, ou seja, os ovos
                fecundados são depositados numa ooteca e desenvolvem-se no exterior da fêmea até à eclosão. Quando
                nascem,
                as aranhas passam por diversas fases antes de serem adultas que variam de espécie para espécie.
                <br><br>
                Todas as nossas espécies de aranhas são carnívoras e predadoras, havendo no entanto algumas que adoptam
                hábitos necrófagos. A captura das presas é feita de quase tantas formas diferentes quanto as espécies
                que
                existem. Algumas desenvolveram um extraordinário sentido de visão, outras usam pêlos sensíveis e uma
                rapidez
                extrema, venenos especializados, teias pegajosas e resistentes, etc.
                <br><br>
                Apesar de associarmos as aranhas a teias, a verdade é que existem muitas espécies que não as constroem
                mas
                todas fabricam seda e todas a usam pelo menos para um fim: a proteccção dos ovos. Podem usá-la também
                como
                defesa, ou como fio de segurança enquanto se deslocam.
                <br><br>
                O tempo de vida destes animais é muito variável e temos espécies que vivem pouco mais de um ano até mais
                de
                uma dezena de anos.
                <br><br>
                São conhecidas actualmente mais de oitocentas espécies em Portugal e o número continua a aumentar.
                Destas,
                várias são endémicas, ou seja, apenas ocorrem no nosso território e são vulneráveis mas infelizmente,
                não
                tem havido nenhum esforço das autoridades competentes para salvaguardar o futuro destas espécies únicas,
                existindo apenas uma espécie com estatuto de conservação.
        </h3>
        <button class="btn" onclick="myFunction()" id="myBtn">Ler Mais</button>
        <div class="insetos row">
            <div class="titulo-inseto">
                <h2 class="titulo">Meta bourneti (Simon, 1922)</h2>
            </div>
        </div>
        <div class="insetos row">
            <div class="col-6">
                <ul>
                    <li>
                        <h3>Reino.........................................................................Animalia</h3>
                    </li>
                    <li>
                        <h3>Filo........................................................................Arthropoda</h3>
                    </li>
                    <li>
                        <h3>Classe.......................................................................Arachnida
                        </h3>
                    </li>
                    <li>
                        <h3>Ordem..........................................................................Araneae</h3>
                    </li>
                    <li>
                        <h3>Família..............................................................Tetragnathidae</h3>
                    </li>
                    <li>
                        <h3>Género.................................................................................Meta</h3>
                    </li>
                    <li>
                        <h3>Nome Comum.......... Aranha cavernícola de teia orbicular</h3>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <img class="img-inseto" src="https://upload.wikimedia.org/wikipedia/commons/0/02/Meta_bourneti_m.jpg"
                    alt="Armadillidiidae (Brandt, 1833)">
            </div>
        </div>
        <h4><a href="https://naturdata.com/aranhas">Mais sobre aranhas...</a></h4>
    </div>
@endsection
