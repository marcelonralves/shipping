<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardViewController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function correios(Request $request)
    {

        //PEGA OS DADOS DA API PELO CEP INFORMADO
        $getEndereco = file_get_contents('https://viacep.com.br/ws/'.$request->input('cep').'/json/');
        $endereco =  json_decode($getEndereco, true);

        $request->merge(['endereco' => $endereco['localidade'].','.$endereco['bairro'].','.$endereco['uf']]);

        // 1ª MANEIRA DE SALVAR UM USUÁRIO
        // CHAMA A MODEL
         Usuario::create($request->all());

         // 2ª MANEIRA DE SALVAR UM USUÁRIO
        // PASSA OS CAMPOS
          /*  $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->telefone = $request->input('telefone');
            $usuario->endereco = $endereco['localidade'].','.$endereco['bairro'].','.$endereco['uf'];


            // SALVA O USUÁRIO
            $usuario->save();
            */




        //RETORNA PRO USUÁRIO A TELA COM AS INFORMAÇÕES DO CEP
        return view('correios', [
            'correios' => $endereco
        ]);
    }
}
