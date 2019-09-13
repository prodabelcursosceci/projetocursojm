@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cidades</div>

                @if(count($errors))
                    <div class="alert alert-danger" role="alert">
                    @json($errors)
                    </div>
                @endif

                <div class="card-body">
                  
                    <table>        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Criado em</th>
                                </th>altrado em</th>
                            </tr>    
                        </thead>    

                        <body>
                        @foreach ($cidades as $cidade)
                            
                            <tr>
                                <th>{{$cidade->id        }}</th>
                                <th>{{$cidade->nome      }}</th>
                                <th>{{$cidade->create_at }}</th>   
                                <th>{{$cidade->updated_at}}</th> 
                            </tr>    
                        @endforeach

                        

                        </body> 

                    </table>    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
