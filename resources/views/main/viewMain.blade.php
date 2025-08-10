@extends('layout')
@section('title', 'View Page')
@section('content')
    <div style="padding: 2rem">
        @foreach ($data as $key => $value)
            @php
                $html = '<h1>' . $value . '</h1>';
            @endphp
            {!! $html !!}
        @endforeach
    </div>
@endsection
