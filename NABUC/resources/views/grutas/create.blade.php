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
                                                <form role="form" method="POST" action="/grutas"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="inputNome">Nome da gruta</label>
                                                        <input type="text" class="form-control" id="inputNome"
                                                            name="inputNome" placeholder="Nome da gruta" required>
                                                        @error('inputNome')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDesc">Descrição</label>
                                                        <textarea class="form-control" id="inputDesc" name="inputDesc" rows="4" placeholder="Descrição" required></textarea>
                                                        @error('inputDesc')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagem">Imagem</label>
                                                        <div class="user-image mb-3 text-center">
                                                            <div class="imgPreview"></div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="images" name="imageFile[]" multiple="multiple"
                                                                    required>
                                                                <label class="custom-file-label" for="images">Insira uma
                                                                    imagem</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                        </div>
                                                        @error('imageFile.*')
                                                            <p class="text-danger">Este Campo é obrigatório!</p>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-success me-2">Enviar</button>
                                                    <button type="button" class="btn btn-warning "
                                                        id="btnLimpar">Limpar</button>
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
