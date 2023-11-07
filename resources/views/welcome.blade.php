@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum Título</h1>
<img src="/img/banner.jpg" alt="Banner">

<h1>Algum Título</h1>
<img src="/img/event.jpg" alt="Banner Triste">
@if(10 > 15)
    <p>A condição é TRUE</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Bernardo")
    <p>O nome é Bernardo</p>
@elseif($nome == "Matheus")
    <p>O nome é {{ $nome }} e ele tem {{ $idade2 }} anos e trabalha como {{ $profissao }}</p>
@else
    <p>O nome não é Bernardo</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
    <p>O i é 2</p>
    @endif
@endfor

@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

@php
    $name = "Bernardo";
    echo $name;
@endphp

{{-- comentário do BLADE --}}

@endsection