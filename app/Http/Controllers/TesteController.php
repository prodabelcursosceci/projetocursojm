<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{   //localhost:8000/helloworld?nome=joao
    public function index(Request $req)
    {

        //dd($req);
        $nome = $req->nome;

        echo "hello world". $nome;
        echo "<br>hello world. $nome";
        //return redirect('/'); 
        return view('welcome');
    }

    public function index2($nome, $idade=null)
    {
        echo "hello world". $nome. " idade " .$idade;
        return view('welcome');
    }

}
