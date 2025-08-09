@extends('layout')
@section('title', 'View Page')
@section('content')
    <div style="padding: 2rem">
        <h1>Welcome to the View Page</h1>
        <p>This is a simple view page.</p>
        @foreach ($list as $key => $value)
            <p>{{ "$key: $value" }}</p>
        @endforeach
        @foreach ($list as $key => $value)
            <p>{{ $value }}</p>
            @if ($list['name'] === 'John Doe')
                <p>Olá, vitor</p>
                @break
            @endif
        @endforeach
    </div>
@endsection
