<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index 1</title>
</head>
<body>
       
    
    {{--
    @foreach ($errors as $e)
        <ul>
        <li>{{$e}} </li>
        </ul>
    @endforeach
    --}}   
        
    @forelse ($errors as $e)
            <ul style="color: red;"">
            <li>{{$e}} </li>
            </ul>
    @empty

        <div> Olá, {!!$nome."<br>"!!}, tudo bem?   </div> 
        <div> Olá, {{$nome}}, tudo bem?   </div> 

        <div style="color: red; "> {{ $ola }}    </div>  

          <p>Sucesso</p>
    @endforelse
        
    <form action="/index1" method="post">
        @csrf
        <input type="text" name="telefone" id="telefone">
        <input type="submit" value="enviar">
    </form>        
    
</body>
</html>