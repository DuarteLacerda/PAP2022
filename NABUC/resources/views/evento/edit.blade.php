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
                                                 <h4 class="card-title">Editar Evento</h4>
                                             </div>
                                             <div class="card-body">
                                                 <form role="form" method="POST" action="/evento/{{ $eventos->id }}"
                                                     enctype="multipart/form-data">
                                                     @csrf
                                                     @method('PUT')
                                                     <div class="form-group">
                                                         <label for="inputNome">Nome do Evento</label>
                                                         <input type="text" class="form-control" id="inputNome"
                                                             name="inputNome" placeholder="Nome do Evento"
                                                             value="{{ $eventos->name }}" required>
                                                         @error('inputNome')
                                                             <p class="text-danger">Este Campo é obrigatório!</p>
                                                         @enderror
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="inputDesc">Descrição</label>
                                                         <textarea class="ckeditor form-control" id="inputDesc" name="inputDesc" rows="4" placeholder="Descrição" required>{{ $eventos->descricao }}</textarea>
                                                         @error('inputDesc')
                                                             <p class="text-danger">Este Campo é obrigatório!</p>
                                                         @enderror
                                                     </div>
                                                     {{-- <div class="form-group">
                                                         <label for="imagem">Imagem</label>
                                                         <div class="user-image mb-3 text-center">
                                                             <div class="imgPreview">
                                                                 @foreach ($name as $n)
                                                                     @if (Storage::exists('public/images/eventos/' . $n))
                                                                         <span class="pic" id="{{ $loop->index }}">
                                                                             <a href="javascript:void(0)"
                                                                                 onclick="deleteFotoEvento('{{ $fotoEventos->id }}', '{{ $n }}', {{ $loop->index }})">
                                                                                 <i
                                                                                     class="fas fa-times-circle close text-danger"></i>
                                                                             </a>
                                                                             <img width="200" class="img-thumnail"
                                                                                 src="{{ asset('storage/images/eventos') . '/' . $n }}"
                                                                                 alt="">
                                                                         </span>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div class="input-group">
                                                             <input type="file" class="form-control" id="images"
                                                                 name="imageFile[]" multiple="multiple">
                                                             <label class="input-group-text" for="images">Insira uma
                                                                 imagem</label>
                                                         </div>
                                                     </div> --}}
                                                     <button type="submit" class="btn btn-success me-2">Enviar</button>
                                                     <button type="button" class="btn btn-warning"
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
