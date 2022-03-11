<?php

namespace App\Http\Controllers;

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

        $correios = file_get_contents('https://viacep.com.br/ws/'.$request->input('cep').'/json/');

        return view('correios', [
            'correios' => json_decode($correios, true)
        ]);
    }
}
