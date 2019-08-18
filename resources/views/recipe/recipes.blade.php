@extends('layout')

@section('content')
<div class="recipe-container">
    <h1 class="text-center">Latest Recipes from Ninja Chefs</h1>
    <hr>
    <div class="d-flex flex-wrap justify-content-center mt-3">

        @foreach ($recipes as $recipe)
        <a href="/recipe/{{$recipe->id}}">
            <div class="card m-1 mb-3 shadow" style="max-width: 600px; max-height:220px; overflow:hidden">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ $recipe->image_link }}" class="card-img" alt="Image" style="height:100% ;object-fit: cover">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ str_limit( $recipe->title, 80 )}}</h5>
                            <p class="card-text">{{ str_limit($recipe->description, 130) }}</p>
                            <p class="card-text font-italic">Created At -{{ $recipe->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection