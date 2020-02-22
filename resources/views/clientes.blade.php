<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
</head>
<body>
    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="card border mt-3">
                        <div class="card-header">
                            <div class="card-title">
                                Clientes
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tabelaclientes" class="table table-responsive table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Endereço</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->nome }}</td>
                                            <td>{{ $cliente->idade }}</td>
                                            <td>{{ $cliente->endereco }}</td>
                                            <td>{{ $cliente->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="/novocliente" class="btn btn-primary btn-sm">Novo cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>