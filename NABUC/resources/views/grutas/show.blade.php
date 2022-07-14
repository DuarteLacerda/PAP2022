@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-body">
                <h1 class="card-title">{{ $gruta->name }}</h1>
                <h3 class="card-text" style="width: 480px">{!! $gruta->desc !!}</h3>
                <?php
                $array = json_decode($fotos, true);
                
                $lista = explode(',', str_replace('"', '', trim($array[0]['name'], '[]')));
                ?>
                @foreach ($lista as $value)
                    <img src='{{ asset('storage/images/grutas') . '/' . $value }}' class='img-fluid float-end'
                        alt='Preview'>
                @endforeach








            </div>
        </div>
    </div>
@endsection
