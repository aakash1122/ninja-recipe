@extends('layout')

@section('content')

<div class="form-container">
    <div class="container mt-3">
        <h1 class="text-secondary mb-3 text-center">Edit Recipe</h1>

        <form method="POST" action="/recipe/{{$recipe->id}}">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="{{$recipe->title}}">
            </div>
            <div class="form-group">
                <input type="text" name="image" class="form-control" aria-describedby="emailHelp" value="{{$recipe->image_link}}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" rows="10" placeholder="Recipe Description..">{{$recipe->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Update Recipe</button>
        </form>
    </div>
</div>
@endsection