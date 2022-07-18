@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-body">
                <h1 class="card-title">{{ $gruta->name }}</h1>
                <h3 class="card-text" style="text-align: left">{!! $gruta->desc !!}</h3>
                <?php
                $array = json_decode($fotos, true);
                $lista = explode(',', str_replace('"', '', trim($array[0]['name'], '[]')));
                ?>
                <div class="row">
                    @foreach ($lista as $value)
                        <div class="col-4">
                            <img src='{{ asset('storage/images/grutas') . '/' . $value }}' class='rounded img-thumbnail'
                                alt='Preview'>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
