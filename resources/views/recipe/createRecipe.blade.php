@extends('layout')

@section('content')

<div class="form-container">
    <div class="container mt-3">
        <h1 class="text-secondary mb-3 text-center">Add a new NINJA Recipe</h1>

        <form method="POST" action="/recipe">
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Recipe Title...">
            </div>
            <div class="form-group">
                <input type="text" name="image" class="form-control" aria-describedby="emailHelp" placeholder="Recipe Image link">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" rows="10" placeholder="Recipe Description.."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </form>
    </div>
</div>
@endsection