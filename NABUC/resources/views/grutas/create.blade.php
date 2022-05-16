@extends('layouts.ounter')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nova Gruta</h4>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="/grutas">
                        @csrf
                        <div class="form-group">
                            <label for="inputNome">Nome da gruta</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome da gruta">
                        </div>
                        <div class="form-group">
                            <label for="inputDesc">Descrição</label>
                            <textarea class="form-control" id="inputDesc" rows="8" placeholder="Descrição"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputIMG">Fotos</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputIMG">
                                    <label class="custom-file-label" for="inputIMG">Insira as fotos </label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submeter</button>
                        <button type="reset" class="btn btn-light">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
