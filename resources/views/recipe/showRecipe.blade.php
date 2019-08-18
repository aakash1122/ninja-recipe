@extends('layout')

@section('content')
<div class="show-recipe">

    <div class="container mt-3">
        <div class="bg-image" style="height:400px">
            <img src="{{ $recipe->image_link }}" class="img-fluid w-100" style="height: 100% ; object-fit: cover;">
        </div>
        <h1 class="m-3 text-center" style="font-size:45px;font-family: monospace;
    font-weight: 600;word-break: break-word;color:#032535">{{$recipe->title}}</h1>
        <hr>
        <p class="recipe-desc" style="font-size:24px;letter-spacing: 1px;color: darkslategrey;">{{$recipe->description}}</p>

        <div class="buttons d-flex justify-content-between mt-3 mb-3 pt-3 pb-3">
            <a href="/recipe/{{$recipe->id}}/edit">
                <button type="button" class="btn btn-outline-info btn-lg">Edit Recipe</button>
            </a>
            <form action="/recipe/{{$recipe->id}}" method="POST">
                @method("DELETE")
                @csrf
                {{-- <button type="button" class="btn btn-outline-danger btn-lg">Delete Recipe</button> --}}
                <input type="submit" class="btn btn-outline-danger btn-lg" value="Delete Recipe">
            </form>
        </div>

    </div>
</div>
@endsection