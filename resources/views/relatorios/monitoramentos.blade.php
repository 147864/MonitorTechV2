<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relatório de Monitoramentos</title>
    <!-- Fonts -->
    <!-- Styles -->
    <style>
        th#thimgHeader {
            border-bottom: 1px solid #0000;
            padding: 0px 18px;
            text-align: center;
        }

        th#thimgHeader img {
            width: 95%;
            padding: 5px;
        }

        th#thtituloHeader {
            padding: 0px 0px;
        }

        th#thtituloHeader h4 {
            font-weight: bold;
            padding: 0px 0px 5px 0px;
            letter-spacing: 1px;
        }

        body {
            background: rgba(7, 8, 8, 0)
        }


        @media print {

            body,
            .content,
            .page-header-fixed {
                padding: 0 !important;
                margin: 8px 5px 8px 5px !important;
            }

            .sidebar,
            .header,
            .panel-heading,
            .theme-panel {
                display: none !important;
            }
        }

    </style>
</head>
<h1>Relatório de Monitoramentos</h1>
<body>
    <div class="container-fluid">
        <table class="table table-striped" border="1">
            <thead>
                <tr>
                    <th>Monitoramento</th>
                    <th>Data</th>
                    <th>Veículo</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($query as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($result->created_at)->format('d/m/Y - H:i:s') }}</td>
                        <td>{{ $result->nome }}</td>
                        <td>{{ $result->voltBateria }}</td>
                        <td>{{ $result->voltAlternador }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
