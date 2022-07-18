@extends('layouts.outer')

@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="images/gruta1.jpg" alt="Imagem de uma gruta">
            <img src="images/gruta2.jpg" alt="Imagem de uma gruta">
            <img src="images/gruta3.jpg" alt="Imagem de uma gruta">
        </div>
        <div class="container" itemprop="description">
            <h1>Bem Vindo ao NABUC</h1>
            <h3>Núcleo dos Buracos das Cesaredas</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
@endsection
