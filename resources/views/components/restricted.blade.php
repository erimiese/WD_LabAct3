@extends('Components.Layout')

@section('title', 'Restricted Area')

@section('content')
    <h1>Restricted Area</h1>
    <p>You have access to this area.</p>

    <!-- Go to Check Age Page Button -->
    <a href="{{ route('check-age') }}" class="btn btn-secondary">Go Back to Age Verification</a>

    <!-- Go Home Button -->
    <a href="{{ route('home') }}" class="btn btn-primary">Go Home</a>
@endsection
