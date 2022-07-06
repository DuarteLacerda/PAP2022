@extends('layouts.ounter')

@section('content')
    <div class="main-panel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Nova Gruta</h4>
                                            </div>
                                            <div class="card-body">
                                                <form role="form" method="POST" action="/grutas/{{ $grutas->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="inputNome">Nome da gruta</label>
                                                        <input type="text" class="form-control" id="inputNome"
                                                            name="inputNome" placeholder="Nome da gruta"
                                                            value="{{ $grutas->name }}">
                                                        @error('inputNome')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDesc">Descrição</label>
                                                        <textarea class="form-control" id="inputDesc" name="inputDesc" rows="4" placeholder="Descrição">{{ $grutas->desc }}</textarea>
                                                        @error('inputDesc')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagem">Imagem</label>
                                                        <div class="user-image mb-3 text-center">
                                                            <div class="image-area">
                                                                @if (Storage::exists('/public/images/grutas/' . $grutas->img))
                                                                    <span class="pic">
                                                                        <img src="{{ asset('/storage/images/grutas/' . $grutas->img) }}"
                                                                            alt="Preview">
                                                                        <a class="remove-image" href="javascript:void(0)"
                                                                            onclick="deleteFoto()"
                                                                            style="display: inline;">&#215;</a>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="imagem" name="imagem">
                                                                <label class="custom-file-label" for="imagem">Insira uma
                                                                    imagem</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                        </div>
                                                        @error('imagem')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-success me-2">Submeter</button>
                                                    <button type="reset" class="btn btn-primary">Limpar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
