@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-body">
                <h1 class="card-title">{{ $gruta->name }}</h1>
                <h3 class="card-text" style="width: 480px">{{ $gruta->desc }}</h3>

                @foreach (json_decode($fotos, true) as $listfotos)
                    @foreach ($listfotos as $foto)
                        <img src="{{ asset('storage/images/grutas/') . $foto }}" class="img-fluid float-end" alt="Preview">
                    @endforeach
                @endforeach




            </div>
        </div>
    </div>
@endsection
