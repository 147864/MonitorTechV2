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
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
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

        .links > a {
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