<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-user"></i> <br></br>Login</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <br>
                        <br>
                        <div class="d-inline-block align-middle">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label remember" for="remember">lembrar de mim</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="d-inline-block mr-2">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i> <span>  Entrar</span></button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="#" class="btn btn-link conta">Não tem uma conta ? <strong>Cadastra-se</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
