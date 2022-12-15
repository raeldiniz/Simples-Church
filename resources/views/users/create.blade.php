@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
    <h1>Novo Usuário </h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Nome: ">
        <input type="email" name="email" id="" placeholder="E-mail: ">
        <input type="password" name="password" id="" placeholder="Senha: ">
        <button type="submit">
                Enviar
        </button>
    </form>
@endsection