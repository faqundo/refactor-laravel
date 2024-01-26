@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Lead</h2>
        <form action="{{ route('leads.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Lead</button>
        </form>
    </div>
@endsection
