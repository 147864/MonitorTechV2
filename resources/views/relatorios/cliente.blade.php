<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relatório de Clientes</title>
    <!-- Fonts -->
    <!-- Styles -->
    <style>
        th#thimgHeader{
            border-bottom: 1px solid #0000;
            padding: 0px 18px;
            text-align: center;
        }
        th#thimgHeader img{
            width: 95%;
            padding: 5px;
        }
        th#thtituloHeader{
            padding: 0px 0px;
        }
        th#thtituloHeader h4{
            font-weight: bold;
            padding: 0px 0px 5px 0px;
            letter-spacing: 1px;
        }
        body{
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
    <h1>Relatório de Clientes</h1>
</head>
<body> 
<div class="container-fluid">
        <table class="table table-striped" border="1">
            <thead>    
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes  as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cidade->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->rg }}</td>
                        <td>{{ $cliente->endereco}}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
</body>
</html>