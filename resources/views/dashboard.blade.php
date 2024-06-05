@extends('layouts.main')

@section('title','Dashboard')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count(events)>0)
    @else
    <p>Você ainda não tem eventos, <a href="/envet/create">criar eventos</a></p>
    @endif
</div>
@section('content')


@endsection