@extends('layouts.main')

@section('title','HDC Events')

@section('content')
<h1>Essa é minha página de contato</h1>

<p>Contatos:</p>
<p>{{ $nome }}</p>

@if($nome=="Danilo")
<p>ele tem {{$idade}} anos.</p>
@elseif($nome=="Matheus")
<p>Precisa se resolver2</p>
@else
<p>Está resolvido</p>
@endif
@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach
@for($i=0; $i<count($arr) ;$i++)
<p>{{$arr[$i]}}</p>

@endfor
@endsection