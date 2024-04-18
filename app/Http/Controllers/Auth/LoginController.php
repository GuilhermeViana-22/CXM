<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginStoreRequest;
use App\Models\Country;
use App\Models\User;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{

    public function index()
    {
        return view('Home.index');
    }



    public function logar(Request $request)
    {
        // Valide os dados da requisição
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string',
        ]);

        // Obtenha as credenciais do request
        $credentials = $request->only('email', 'senha');

        // Obtenha o usuário pelo email
        $user = User::where('email', $credentials['email'])->first();

        // Verifique se o usuário existe e a senha está correta
        if ($user && Hash::check($credentials['senha'], $user->password)) {
            // Autenticação bem-sucedida
            Auth::login($user);
      ;
            return redirect()->route('Components.AreaRestrita.Home.index');
        } else {

            // Autenticação falhou
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function cadastrar()
    {
        $countries = Country::all();

        return view('auth.cadastrar', compact('countries'));
    }

    /***
     * @param LoginStoreRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|Response
     */
    public function store(LoginStoreRequest $request)
    {
        // Valide os dados da requisição
        $validatedData = $request->validated();

        // Trate a senha
        $senha = bcrypt($validatedData['senha']);

            // Crie e salve o usuário no banco de dados
            $user = new User();
            $user->fill($validatedData);
            $user->password = $senha;
            $user->email_verified_at = now(); // Define como a hora atual
            $user->remember_token = Str::random(10); // Gera um token aleatório

        try {
            $user->save();
        }catch (ErrorException $e) {
            return response('Houve um erro ao tentar salvar o banner.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        Alert::success('Sucesso', 'A operação foi realizada com sucesso!')->autoClose(3000);
        return $this->ajaxRedirect(route('login'));

    }

}
