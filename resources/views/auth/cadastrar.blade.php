<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('arquivos/imagens/logo.png') }}">
    <title>CXM - Cursos de idiomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cadastrar.css') }}" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header text-center">Vamos começar seu cadastro</h1>
                <div class="card-body">
                    <h4 class="card-title">Para que você possa começar a utilizar nossa plataforma, vamos precisar de algumas informações:</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite seu sobrenome">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCPF">CPF ou CNPJ</label>
                                <input type="text" class="form-control" id="inputCPF" placeholder="Digite seu CPF ou CNPJ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPais">País</label>
                                <input type="text" class="form-control" id="inputPais" placeholder="Digite seu país">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTelefone">Telefone</label>
                                <input type="tel" class="form-control" id="inputTelefone" placeholder="Digite seu telefone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDataNascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="inputDataNascimento">
                            </div>
                        </div>
                        <hr>
                        <h4>Seus dados de endereço</h4>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEndereco">Endereço</label>
                                <input type="text" class="form-control" id="inputEndereco" placeholder="Digite seu endereço">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNumero">Número</label>
                                <input type="text" class="form-control" id="inputNumero" placeholder="Digite o número">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="form-control" id="inputBairro" placeholder="Digite seu bairro">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" id="inputCidade" placeholder="Digite sua cidade">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <input type="text" class="form-control" id="inputEstado" placeholder="Digite seu estado">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputComplemento">Complemento</label>
                            <input type="text" class="form-control" id="inputComplemento" placeholder="Digite o complemento">
                        </div>
                        <hr>
                        <h4>Seus dados de e-mail e senha</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSenha">Senha</label>
                                <input type="password" class="form-control" id="inputSenha" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputConfirmarSenha">Confirmar Senha</label>
                            <input type="password" class="form-control" id="inputConfirmarSenha" placeholder="Confirme sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/arearestrita.js') }}"></script>
{{-- cdn necessário para o dropdown menu mobile --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>
