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
                                                <h4 class="card-title">Perfil</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="ImputNome" class="form-label">Nome:</label>
                                                    <input type="text" class="form-control" id="InputNome"
                                                        value="{{ Auth::User()->name }}" disabled>
                                                </div>
                                                {{-- <a href="#"><button type="button"
                                                        class="btn btn-outline-primary">Alterar Nome de
                                                        utilizador</button></a> --}}
                                                <div class="mb-3">
                                                    <label for="InputEmail" class="form-label">Email:</label>
                                                    <input type="email" class="form-control" id="InputEmail"
                                                        value="{{ Auth::User()->email }}" disabled>
                                                </div>
                                                {{-- <a href="#"><button type="button"
                                                        class="btn btn-outline-primary">Alterar Email</button></a> --}}
                                                <div class="mb-3">
                                                    <label for="InputPassword" class="form-label">Palavra-Passe:
                                                    </label>
                                                    <input type="password" class="form-control" id="InputPassword"
                                                        value="{{ Auth::User()->password }}" disabled>
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
    </div>
@endsection
