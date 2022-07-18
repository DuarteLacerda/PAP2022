@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="row" style="margin: 25px">
            @foreach ($eventos as $evento)
                <div class="col-2">
                    <div class="card" style="width: 18rem; margin: 10px;">
                        <form action="/evento/{{ $evento->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <?php if ($evento->fotodes[0] = !null) {
                                echo "<img style='margin: 3px'
                                src='{{ asset('storage/images/eventos/' . json_decode($evento->fotodes)[0]) }}
                                class='card-img-top' alt=''>";
                            } ?>
                            <div class="card-body">
                                <h3 class="card-title">{{ $evento->name }}</h3>
                                <h5 class="card-text"
                                    style="overflow: hidden;
                            display: -webkit-box;
                            -webkit-line-clamp: 8;
                            -webkit-box-orient: vertical;">
                                    {!! $evento->descricao !!}</h5>
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
