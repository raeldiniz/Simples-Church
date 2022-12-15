@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>Listagem dos usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
        
    </ul>
@endsection