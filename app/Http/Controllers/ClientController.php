<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Client;

class ClientController extends Controller
{
    public function index(){
        
        return view('welcome',[]);
    }
    public function client(){
        return view('contato.client');
    }

    public function contato(){
        
        $client = Client::all();

        return view('welcome',[]);
    }
    public function store(Request $request){
        $client = new Client;

        $client->nome = $request -> name;
        $client->sobrenome = $request -> sobrenome;
        $client->textarea = $request -> textarea;

        $client ->save();

        return redirect('/');
    }
}
