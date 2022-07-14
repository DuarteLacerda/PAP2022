@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($grutas as $gruta)
                <div class="card" style="width: 18rem;">
                    <form action="/grutas/{{ $gruta->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <img src="{{ asset('storage/images/grutas/' . json_decode($gruta->fotodes)[0]) }}"
                            class="card-img-top" alt="Preview">
                        <div class="card-body">
                            <h3 class="card-title">{{ $gruta->name }}</h3>
                            <h5 class="card-text"
                                style="overflow: hidden;
                            display: -webkit-box;
                            -webkit-line-clamp: 8;
                            -webkit-box-orient: vertical;">
                                {!! $gruta->desc !!}</h5>
                            <button type="submit" class="btn" style="background-color: #484847; color: white;">Ver
                                Mais</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
