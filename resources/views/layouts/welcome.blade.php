    @extends('layouts.main') 

    @section('title', 'HDC Events')

    @section('content')
    
    <a href="{{ route('create.create') }}">Cadastre-se</a>

    <h1>Título</h1>

    @if(10 < 5) <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Rafael")
        <p>O nome é igual a {{ $nome }}, possui {{ $idade }} anos e trabalha como {{ $profissao }}. </p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>A varíavel I é igual a 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "João";
            echo $name;
        @endphp

        <!-- Comentário em HTML -->
        {{-- Este é um comentário em Blade --}}

@endsection