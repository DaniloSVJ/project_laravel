@extends('layouts.main')

@section('title','HDC Events')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file" >
        </div>        
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">Privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Adicione Items na Infrestutura:</label>
            <div class="class-group">
                <input type="checkbox" name="items[]" id="items" value="Cadeiras" > Cadeiras 
            </div>
            <div class="class-group">
                <input type="checkbox" name="items[]" id="items" value="Palco" > Palco 
            </div>
            <div class="class-group">
                <input type="checkbox" name="items[]" id="items" value="Refrigerante gratis" > Refrigerante gratis 
            </div>
            <div class="class-group">
                <input type="checkbox" name="items[]" id="items" value="Brindes" > Brindes 
            </div>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" ></textarea>
            <input type="submit" class="btn btn-primary" value="Criar Evento">

        </div>
        
      
    </form>
</div>
@endsection