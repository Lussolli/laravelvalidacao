<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de clientes</title>
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
                                Cadastro de cliente
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/cliente" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nome">Nome do cliente</label>
                                    <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome" autofocus>
                                    @if ($errors->has('nome'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nome') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade</label>
                                    <input type="number" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}" name="idade" id="idade">
                                    @if ($errors->has('idade'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('idade') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço do cliente</label>
                                    <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" name="endereco" id="endereco">
                                    @if ($errors->has('endereco'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('endereco') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do cliente</label>
                                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid': '' }}" name="email" id="email">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                    <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        {{-- @if ($errors->any())
                            <div class="card-footer">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>