@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar tarefa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label  class="form-label">Tarefa</label>
                          <input type="text" name="tarefa" value="{{$tarefa->tarefa}}" class="form-control">
                        </div>

                        <div class="mb-3">
                          <label  class="form-label">Data limite de conclusão</label>
                          <input type="date" name="data_limite_conclusao" value="{{$tarefa->data_limite_conclusao}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <a href="{{ route('tarefa.index') }}" class="btn btn-primary">Voltar</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
