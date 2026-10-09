@extends('layouts.app')

@section('title', 'Заявку прийнято')

@section('content')
    <h1>Дякуємо за заявку!</h1>
    <p>Ми отримали ваші дані:</p>
    <ul>
        <li><strong>Ім'я:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Повідомлення:</strong> {{ $message }}</li>
    </ul>
    <p>
        <a href="{{ route('site.landing') }}">Повернутися назад</a>
    </p>
@endsection
