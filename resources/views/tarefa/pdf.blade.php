<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tarefas</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .title {
            border: 1px solid #c3c3c3;
            background-color: #c2c2c2;
            text-align: center;
            widows: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
        }

        table th {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="title">Lista dce tarefas</div>

    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tarefa</th>
                <th scope="col">Data limite de conclusão</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <th scope="row">{{ $tarefa->id }}</th>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="page-break"></div>
    <h2>Págiação</h2>
</body>

</html>
