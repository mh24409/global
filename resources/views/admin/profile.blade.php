@extends('layouts.layout')

@section('content')
<section class="profile">




    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">

                    <a href="/adminindex" class="list-group-item list-group-item-action active bg-dark">
                        Dashboard </a>
                    <a href="/types" class="list-group-item list-group-item-action">Types</a>
                    <a href="/insert" class="list-group-item list-group-item-action">Add New Product</a>
                    <a href="/allproducts" class="list-group-item list-group-item-action">All Products</a>
                    <a href="/users" class="list-group-item list-group-item-action">Users</a>
                    <a href="/profile/{{Auth::user()->id}}" class="list-group-item list-group-item-action">Profile</a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <div style="background-color: rgba(151, 150, 151, 0.342);">

                            <div class="card-header bg-dark text-white">
                                Profile
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Your Profile</h5>
                                <div class="card " style="background-color:unset">


                                    <div class="card-body">
                                        <div class="text-right"> <a href="" class=" "><i class="fas fa-edit"
                                                    style="font-size: 20px;"></i></a> </div>
                                        <br>

                                        <div class="row">
                                            <div class=" text-left col-md-9">
                                                <p><b>Name : {{$user->name}}</b></p>
                                                <p><b>Email : {{$user->email}}</b></p>

                                                <p><b> address : {{$user->address}}</b></p>
                                                <p><b>Gender :{{$user->gender}}</b></p>
                                                <p><b>Date :{{$user->created_at}}</b></p>
                                            </div>
                                            
                                            <div class="col-md-3">

                                                
                                                @if (Auth::user()->gender=="male")
                                            <img style="width: 150px; height: 150px" src="{{asset('img/male.png')}}" alt="">
                                                @else
                                                <img style="width: 150px; height: 150px" src="{{asset('img/female.png')}}" alt="">
                                                @endif
                                                
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
@endsection