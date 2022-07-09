@extends('layouts.outer')

@section('content')
    <div class="container">
        <div class="box">
            <div class="cata">
                <section class="gallery-images-section gallery2" id="Grid">
                    @foreach ($grutas as $gruta)
                        <div class="gallery-img-wrap grid-item business" data-category="business">
                            <a href="/grutas/{{ $gruta->id }}"><img
                                    src="{{ asset('storage/images/grutas') . '/' . $gruta->name . 1 }}" alt="Preview"></a>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
@endsection
