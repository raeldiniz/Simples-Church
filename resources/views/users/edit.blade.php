@extends('layouts.app')

@section('title', 'Editar o Usuário {{ $user->name }}')

@section('content')
    <h1>Editar o Usuário {{ $user->name }} </h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" id="" placeholder="Nome: " value="{{ $user->name }}" required>
        <input type="email" name="email" id="" placeholder="E-mail: " value="{{ $user->email }}" required>
        <input type="password" name="password" id="" placeholder="Senha: " required>
        <button type="submit">
                Enviar
        </button>
    </form>
@endsection