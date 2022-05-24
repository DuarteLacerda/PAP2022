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
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm text-center">
                                                        <p class="text-small mb-2">Visitas por Ano</p>
                                                        <h4 class="mb-0 fw-bold">376521</h4>
                                                    </div>
                                                    <div class="col-sm text-center">
                                                        <p class="text-small mb-2">Visitas por Mês</p>
                                                        <h4 class="mb-0 fw-bold">43531</h4>
                                                    </div>
                                                    <div class="col-sm text-center">
                                                        <p class="text-small mb-2">Visitas por Dia</p>
                                                        <h4 class="mb-0 fw-bold">9065</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Grutas Listadas</h4>
                                                <div class="table-responsive pt-3">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nome</th>
                                                                <th>Descrição</th>
                                                                <th>Imagem</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($gruta as $grt)
                                                                <tr>
                                                                    <td>{{ $grt->id }}</td>
                                                                    <td><a
                                                                            href="/grutas/edit/{{ $grt->id }}">{{ $grt->name }}</a>
                                                                    </td>
                                                                    <td>{{ $grt->desc }}</td>
                                                                    <td>{{ $grt->img }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
