@extends('layouts.app')

@section('title', 'Лендінг')

@section('content')
    <h1>Залишити заявку</h1>

    <form method="POST" action="{{ route('site.landing.store') }}">
        @csrf

        <div>
            <label for="name">Ім'я</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="message">Повідомлення</label><br>
            <textarea id="message" name="message">{{ old('message') }}</textarea>
            @error('message')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Відправити заявку</button>
    </form>
@endsection
