@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-body">
                <h1 class="card-title">{{ $grutas->name }}</h1>
                <h3 class="card-text" style="width: 480px">{{ $grutas->desc }}</h3>
                <?php if ($grutas->Foto->name) {
                    $name = json_decode($fotos->name);
                } else {
                    $name = [];
                } ?>
                <img src="{{ asset('storage/images/grutas/' . $name) }}" class="img-fluid float-end" alt="Preview">
            </div>
        </div>
    </div>
@endsection
