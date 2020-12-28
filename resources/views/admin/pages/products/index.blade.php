

@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos') 

@section('content')

     <h1> Exibindo os produtos </h1>

<a href="{{@route('products.create') }}">Cadastrar</a>







    {{-- um exemplo de uso de component--}}
    @component('admin.components.card')
        @slot('title')
        <h1>Título Card</h1> 
        @endslot   
        Um card de exemplo.
    @endcomponent


    <hr>     

    {{-- @include('admin.alerts.alerts') exemplo simples de include // abaixo exemplo com passagem de parametro --}}

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>


    <!--rotinas repetitivas-->
    <!--verifica se existe a variavel-->
    <!-- está comentado para mostrar abaixo outro exemplo com a mesma estrutura.
    @if(isset($products))
        @foreach ($products as $product) 
            <p>{{$product}}</p>
        @endforeach
    @else
    Não passou parametro.
    @endisset
    está comentado acima para mostrar abaixo outro exemplo com a mesma estrutura.
    --> 

    <!--$loop->last último item do loop tem first etc-->
    @if(isset($products))
        @foreach ($products as $product) 
            <p class="@if ($loop->last) last @endif">{{$product}}</p>
        @endforeach
    @else
    Não passou parametro.
    @endisset





    <!--loop se for verdadeiro-->
    <hr>

    @forelse ($products as $product)
        <p class="@if ($loop->first) last @endif">{{$product}}</p>
    @empty
        <p> Não existem produtos cadastrados.</p>    
    @endforelse

    <hr>



    <!--if tradicional-->

    @if ($teste === '123')
        É igual
    @elseif($teste == 123)
    É igual 123 
    @else
    É diferente
    @endif    

    <!--logica contraria do IF-->
    @unless ($teste === '123')
        <p> isso <p>
    @else
    <p> É aquilo <p>
    @endunless

    <!--verifica se existe a variavel tem else-->
    @isset($teste2)
        <p> {{$teste2}}<p>
    @endisset

    <!--verifica se variavel vazia tem else-->
    @empty($teste3)
        <p> Vazio....<p>
    @endempty

    <!--verifica se variavel vazia tem else-->
    @auth
        <p>Autenticado<p>
    @else
        <p> Não autenticado <p>
    @endauth

    @guest
        <p>Não autenticado<p>
    @endguest

    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(2)
            igual a 2
            @break
        @case(3)
            igual a 3
            @break
        @default
            default
    @endswitch


@endsection



<!--estrutura-->
<!--estilo de paragrafo-->

@push('styles')
    <style>
        .last {background: #CCC;}
    </style>    
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#eacbcb'
    </script>    
@endpush














