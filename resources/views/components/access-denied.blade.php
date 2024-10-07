@extends('Components.Layout')

@section('title', 'Access Denied')

@section('content')
    <div class="container">
        <h1>Access Denied</h1>
        <p>Sorry, you must be at least 18 years old to access this page.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back</a>
    </div>
@endsection
