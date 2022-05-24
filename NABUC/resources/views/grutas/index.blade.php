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
                                                <h4 class="card-title">Grutas Listadas</h4>
                                                <div class="table-responsive pt-3">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nome</th>
                                                                <th>Descrição</th>
                                                                <th>Imagem</th>
                                                                <th>Eliminar</th>
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
                                                                    <td class="text-center">
                                                                        <form action="/grutas/{{ $grt->id }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="link"
                                                                                style="background-color: transparent; border:none">
                                                                                <i class="fas fa-trash-alt text-danger"
                                                                                    data-toggle="tooltip"
                                                                                    title="Eliminar"></i>
                                                                            </button>
                                                                        </form>
                                                                    </td>
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
