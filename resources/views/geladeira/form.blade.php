@extends('layouts.master')

@section('title', 'Formulário de Comentário')

@section('content')
    <h1>Comentário sobre a Geladeira</h1>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="hidden" name="geladeira_id" value="{{ $id }}">

        <div class="form-group">
            <label for="comment">Seu Comentário</label>
            <textarea id="comment" name="comment" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
