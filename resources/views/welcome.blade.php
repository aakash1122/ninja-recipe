@extends('layout')

@section('content')
<div class="container-Fluid d-flex hero justify-content-center align-items-center">
    <div class="row">
        <div class="col-7 d-flex flex-column p-3 justify-content-center">
            <h1 class=""><span>Cook</span> Something New</h1>
            <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="">
                <button type="button" class="btn mt-2">Explore Recipes</button>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-4 p-3 card text-dark">
            <h3>Log In Now</h3>
            <p class="mt-3">Only if you want to publish Recipes</p>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="background:#343a40">

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="background:#343a40">
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection