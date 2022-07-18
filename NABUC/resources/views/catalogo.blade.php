@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="row" style="margin: 25px">
            @foreach ($grutas as $gruta)
                <div class="col-2">
                    <div class="card" style="width: 18rem; margin: 10px;">
                        <form action="/grutas/{{ $gruta->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <img style="margin: 3px; max-width: 172px"
                                src="{{ asset('storage/images/grutas/' . json_decode($gruta->fotodes)[0]) }}"
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
                </div>
            @endforeach
        </div>
    </div>
@endsection
