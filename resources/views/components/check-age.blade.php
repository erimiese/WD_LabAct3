@extends('Components.Layout')

@section('title', 'Check Age')

@section('content')
    <h1>Age Verification</h1>
    <p>Please enter your age to continue.</p>

    <form action="{{ url('restricted') }}" method="GET">
        <div class="form-group">
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
