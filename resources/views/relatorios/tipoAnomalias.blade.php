<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relatório Tipos de Anomalias</title>
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
<h1>Relatório de Tipo de Anomalias</h1>
<body>
    <div class="flex-center position-ref full-height">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Solução</th>
                    <th>Laudo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoAnomalias as $tipoAnomalia)
                    <tr>
                        <td>{{ $tipoAnomalia->id }}</td>
                        <td>{{ $tipoAnomalia->laudo }}</td>
                        <td>{{ $tipoAnomalia->solucao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
