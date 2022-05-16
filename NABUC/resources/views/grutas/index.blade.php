@extends('layouts.ounter')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Grutas Listadas</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Id
                                        </th>
                                        <th>
                                            Nome
                                        </th>
                                        <th>
                                            Descrição
                                        </th>
                                        <th>
                                            Imagem
                                        </th>
                                        <th>
                                            Editar/Eliminar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($grutas as $gruta)
                                <tr>
                                    <td>{{ $gruta->id }}</td>
                                    <td>{{ $gruta->name }}</td>
                                    <td>{{ $gruta->descricao }}</td>
                                    <td>{{ $gruta->img }}</td>
                                    <td>
                                        <i class="far fa-trash-alt"></i>
                                    </td>
                                </tr>
                            @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
