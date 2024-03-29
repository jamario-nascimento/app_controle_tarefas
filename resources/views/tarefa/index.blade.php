@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tarefas
                        <div class="btn-group float-end" role="group" aria-label="Basic example">
                            <a href="{{ route('tarefa.create') }}" class="btn btn-primary">Adicionar Tarefa</a>
                            <a href="{{ route('tarefa.exportacao', ['extencao' => 'xlsx']) }}"
                                class="btn btn-success">XLSX</a>
                            <a href="{{ route('tarefa.exportacao', ['extencao' => 'csv']) }}"
                                class="btn btn-warning">CSV</a>
                            <a href="{{ route('tarefa.exportacao', ['extencao' => 'pdf']) }}" class="btn btn-danger">PDF</a>
                            <a href="{{ route('tarefa.exportar') }}" target="_blank" class="btn btn-info">DOMPDF</a>
                        </div>

                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Data limite de conclusão</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tarefas)
                                    @foreach ($tarefas as $tarefa)
                                        <tr>
                                            <th scope="row">{{ $tarefa->id }}</th>
                                            <td>{{ $tarefa->tarefa }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                                            <td> <a href="{{ route('tarefa.edit', $tarefa->id) }}">Editar</a></td>
                                            <td>
                                                <form id="form_{{ $tarefa['id'] }}" method="POST"
                                                    action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#"
                                                        onclick="document.getElementById('form_{{ $tarefa['id'] }}').submit()">Excluir</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>
                                @for ($i = 1; $i <= $tarefas->lastPage(); $i++)
                                    <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}"><a
                                            class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
