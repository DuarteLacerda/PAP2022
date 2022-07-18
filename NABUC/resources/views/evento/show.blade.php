@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-body">
                <h1 class="card-title">{{ $eventos->name }}</h1>
                <h3 class="card-text" style="text-align: left">{!! $eventos->descricao !!}</h3>
                <?php
                $array = json_decode($fotos_eventos, true);
                $lista = explode(',', str_replace('"', '', trim($array[0]['designacao'], '[]')));
                ?>
                <div class="row">
                    @foreach ($lista as $value)
                        <div class="col-4">
                            <img src='{{ asset('storage/images/eventos') . '/' . $value }}' class='rounded img-fluid'
                                alt=''>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
