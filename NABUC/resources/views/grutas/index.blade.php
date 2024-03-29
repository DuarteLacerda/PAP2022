@extends('layouts.ounter')

@section('content')
    <div class="main-panel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row">
                            <div class="col-md-12">
                                @if (Session::has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" style="margin: 5px"
                                        role="alert">
                                        {{ Session::get('message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Grutas Listadas</h4>
                                                <div class="table-responsive pt-3">
                                                    <table id="grutas" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nome</th>
                                                                <th>Data publicação</th>
                                                                <th>Última atualização</th>
                                                                <th>Eliminar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-group-divider">
                                                            @foreach ($gruta as $grt)
                                                                <tr>
                                                                    <td>{{ $grt->id }}</td>
                                                                    <td><a
                                                                            href="/grutas/edit/{{ $grt->id }}">{{ $grt->name }}</a>
                                                                    </td>
                                                                    <td>{{ $grt->created_at }}</td>
                                                                    <td>{{ $grt->updated_at }}</td>
                                                                    <td class="text-center">
                                                                        <form role="form"
                                                                            action="/grutas/{{ $grt->id }}"
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
