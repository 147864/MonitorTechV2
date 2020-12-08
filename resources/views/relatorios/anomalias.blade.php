<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anomalias</title>
    <!-- Fonts -->
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 10;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>
<h1>Relatório de Anomalias</h1>

<body>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Proprietário</th>
                    <th>Veiculo</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                    <th>Anomalia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($query as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->created_at }}</td>
                        <td>{{ $result->cliente }}</td>
                        <td>{{ $result->nome }}</td>
                        <td>{{ $result->avariaBateria }}</td>
                        <td>{{ $result->avariAlternador }}</td>
                        <td>{{ $result->laudo }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
