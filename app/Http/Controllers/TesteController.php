<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{   //localhost:8000/helloworld?nome=joao
    public function index1(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'nome' => 'required|max:10|alpha_dash|ends_with:a',
            'idade'=> 'sometimes|numeric'
        ]);
        if($validator->fails()){
            //dd($validator->errors());

            $errors = $validator->errors()->all();

            //var_dump($validator->errors());
            //exit();
        }    


        //try{
        //    $req->validate([
        //    'nome' => 'required|max:10'
        //   ]);
           
           
            //dd($req);
            
            //echo "hello world". $nome;
            //echo "<br>hello world. $nome";
            //return redirect('/'); 
            //return view('index',['ola'=>'mundo!', 'nome'=>'sebastiao' ]);
            
            $nome = $req->nome;
            $ola = 'mundo!';
            
            return view('index', compact(['nome', 'ola', 'errors']) );

       // }catch(\Exception $e){
        //    return $e->getMessage();
       // }
        
        
    }

    public function index2($nome, $idade=null)
    {
        echo "hello world". $nome. " idade " .$idade;
        return view('welcome');
    }

    public function indexPost(Request $req){
        
        
        
        return 'Postei' .$req->telefone;
    }


}
