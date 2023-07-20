@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <option value="0">Não</option>
            <option value="1">Sim</option>
           </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descrition" id="description" class="form-control" placeholder="O que vai aontecer no evento?"></textarea>
        </div>
        <input type="submit" value="Criar Evento" class="btn btm-primary">
    </form>
</div>

@endsection