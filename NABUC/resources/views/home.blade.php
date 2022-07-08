@extends('layouts.outer')

@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="images/gruta1.jpg" alt="Imagem de uma gruta">
            <img src="images/gruta2.jpg" alt="Imagem de uma gruta">
            <img src="images/gruta3.jpg" alt="Imagem de uma gruta">
        </div>
        <div class="container" itemprop="description">
            <h1>Bem Vindo</h1>
            <h3>With our advance search feature you can now find the trips for you...</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    <div class="frase-banner">
        <div class="frase-home">
            <h3 class="desc"><strong>"De uma caverna nada se tira, a não ser fotos; nada se deixa, a não ser
                    pegadas; e nada se mata, a não ser o tempo."</strong>
            </h3>
            <h4 class="desc">Lema dos exploradores de cavernas</h4>
        </div>
    </div>
@endsection
