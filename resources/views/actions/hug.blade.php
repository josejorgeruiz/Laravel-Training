@extends('layouts.master')

@section('content')
    <div class='centered'>
        <a href="{{ route('home') }}">Home</a>
        <h1>I hug {{ $name === null ? 'you' : $name }}</h1>
    </div>
@endsection