<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('arquivos/imagens/logo.png') }}">
    <title>CXM - Cursos de idiomas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cadastrar.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Vamos começar seu cadastro</h1>
                <h4 class="card-title">Para que você possa começar a utilizar nossa plataforma, vamos precisar de
                    algumas informações:</h4>
                <form method="POST" action="{{route('auth.store')}}" id="form_login_user">
                    @csrf
                    <h5 class="text">Seus dados pessoais</h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="validationTextarea">Nome</label>
                            <input class="form-control invalid" id="nome" name="nome" placeholder="Nome"  required></input>
                            <div class="invalid-feedback">
                                Preencha o seu nome
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputSobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
                            <div class="invalid-feedback">
                                Preencha o seu sobrenome
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputCPF">CPF ou CNPJ</label>
                            <input type="text" class="form-control" id="inputCPF" name="cpf" placeholder="Digite seu CPF ou CNPJ" required>
                            <div class="invalid-feedback">
                                Preencha o seu CPF ou CNPJ
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputPais">País</label>
                            <select name="country" id="country" class="form-control">
                                <option value="" disabled selected style="color: #ffffff">Selecione seu País</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Preencha o País
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputTelefone">Telefone</label>
                            <input type="tel" class="form-control" id="inputTelefone" name="telefone" placeholder="Digite seu telefone" required>
                            <div class="invalid-feedback">
                                Preencha o seu Telefone
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputDataNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputDataNascimento" name="data_nascimento" required>
                            <div class="invalid-feedback">
                                Preencha a data de nascimento
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 class="text">Seus dados de endereço</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="inputCEP">CEP</label>
                            <input name="cep" placeholder="CEP" class="form-control" type="text" id="cep"
                                   value="" size="10" maxlength="9"
                                   oninput="this.value=this.value.replace(/\D/g,'').replace(/(\d{5})(\d{3})/, '$1-$2'); "
                                   onblur="pesquisacep(this.value);" required/>
                            <div class="invalid-feedback">
                                Preencha o seu CEP
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <label for="inputEndereco">Endereço</label>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite seu endereço" required>
                            <div class="invalid-feedback">
                                Preencha o seu Endereço
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <label for="inputBairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu bairro" required>
                            <div class="invalid-feedback">
                                Preencha o seu Bairro
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <label for="inputCidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade"  name="cidade"
                                   placeholder="Digite sua cidade" required>
                            <div class="invalid-feedback">
                                Preencha o seu Cidade
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputEstado">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado" required>
                            <div class="invalid-feedback">
                                Preencha o seu Estado
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="inputEstado">UF</label>
                            <input  class="form-control" type="text" id="uf" name="uf" size="2"/>
                            <div class="invalid-feedback">
                                Preencha o seu UF
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="inputNumero">Número</label>
                            <input type="text" class="form-control" id="inputNumero" name="numero" ]placeholder="Digite o número" pattern="\d*" required>
                            <div class="invalid-feedback">
                                Preencha o seu Número
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="inputComplemento">Complemento</label>
                            <input type="text" class="form-control" id="inputComplemento" name="complemento" placeholder="Digite o complemento" required>
                            <div class="invalid-feedback">
                                Preencha o seu Complemento
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Seus dados de e-mail e senha</h5>
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Digite seu e-mail" required>
                            <div class="invalid-feedback">
                                Preencha o seu E-mail
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="inputSenha">Senha</label>
                            <input type="password" class="form-control" id="inputSenha" name="senha" placeholder="Digite sua senha" required>
                            <div class="invalid-feedback">
                                Preencha o seu Senha
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label for="inputConfirmarSenha">Confirmar Senha</label>
                        <input type="password" class="form-control" id="inputConfirmarSenha" name="confirmar_senha" placeholder="Confirme sua senha" required>
                        <div class="invalid-feedback">
                            Preencha o seu Confirmar Senha
                        </div>
                    </div>
                    <br>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-danger continuar" id="continuar" onclick="formAjax('#form_login_user')">
                            <span class="fa fa-check"></span> Continuar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<script src="{{ asset('js/arearestrita.js') }}"></script>
<script src="{{ asset('js/cep.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#inputCPF').mask('000.000.000-00');
        $('#inputTelefone').mask('(00) 000000000');
        $('#inputNumero').mask('0000');
    });
</script>
</html>
