@extends('layouts.layout')

@section('content')

<header class="types">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Prodcuts!</div>
            <div class="intro-heading text-uppercase">here you find all products</div>
        </div>
    </div>
</header>

<div class="container" style="margin-top: 50px">
    <div class="row">
        @foreach ($products as $p)

        <div class="card col-12 col-md-4 col-lg-4 " style="margin-bottom: 25px; border: unset">
            <div class="">
                <img class="card-img-top" style="height:300px ; " src="{{asset('img/products/'.$p->image)}}" alt="" title="">
            </div>
            <div class="card-text">
                <h4 class="card-title"> {{$p->name}} </h4>
                <p class="">
                    <?php echo substr($p->description, 0, 30) . '...' ?></p>
                <div class="text-center"> <a type="button" href="/singleproduct/{{$p->id}}" class="btn btn-dark text-light"> More</a> </div>
            </div>
        </div>

        @endforeach
    </div>


</div>


@endsection