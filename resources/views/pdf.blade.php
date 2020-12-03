<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Clientes</title>
</head>
<body>

    <h1>Relatório de Clientes<h1>
    <table border="5" >
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
            <tr>
            @foreach ($clientes as $cliente)
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cidade->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->rg }}</td>
                <td>{{ $cliente->endereco}}</td>
                <td>{{ $cliente->bairro }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->email }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>