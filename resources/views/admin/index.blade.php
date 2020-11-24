@extends('layouts.layout')

@section('content')

<div class="index">
    <div class="container ">
        <div style="height: 150px;"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="/adminindex" class="list-group-item list-group-item-action active bg-dark">
                        Dashboard
                    </a>
                    <a href="/types" class="list-group-item list-group-item-action">Types</a>
                    <a href="/insert" class="list-group-item list-group-item-action">Add New Product</a>
                    <a href="/allproducts" class="list-group-item list-group-item-action">All Products</a>
                    <a href="/users" class="list-group-item list-group-item-action">Users</a>
                    <a href="/profile/{{Auth::user()->id}}" class="list-group-item list-group-item-action">Profile</a>

                </div>
            </div>
            <div class="col-md-9 ">

                <div class="row ">
                    <div class="card col-md-3 " style="display: inline-block;background-color: rgba(151, 150, 151, 0.342);; padding: 0;">

                        <div class="card-header bg-primary">
                            <p style="color: white ;"><b> welcome : {{Auth::user()->name}}</b></p>
                        </div>
                        <div class="card-body" style="margin-top: 20px;">
                            <div class="text-center">
                                    <p><b>Email : {{Auth::user()->email}} </b></p>
                                    <hr>
                            </div>
                            <div class="text-center">
                                <p><b>Role : {{Auth::user()->role}} </b></p>
                                
                        </div>
                            
                           
                        </div>
                        <div class=" card-header  bg-primary " >
                            <a href="#">
                                <div class="text-light"> <i class="fas fa-eye" style="font-size:15px;"></i>More</div>
                            </a>

                        </div>
                    </div>
                    <div class="card col-md-3" style="display: inline-block;background-color: rgba(151, 150, 151, 0.342);; padding: 0; ">

                        <div class="card-header bg-success">
                            <p style="color: white ;"><b>Products</b></p>
                        </div>
                        <div class="text-center" style="margin-top: 46px;">
                            <i class="fas fa-newspaper" style="font-size:60px;"></i>
                        </div>
                        <div class="text-center" style="margin-top: 15px;">

                        <p><b>{{$products}}</b></p>
                        </div>

                        <div class=" card-header  bg-success">
                            <a href="#">
                                <div > <a class="text-light" href="/allproducts"><i class="fas fa-eye" style="font-size:15px;"></i>More</a></div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="card col-md-3 " style="display: inline-block;background-color: rgba(151, 150, 151, 0.342);; padding: 0;">

                        <div class="card-header bg-info">
                            <p style="color: white ;"><b>Users</b></p>

                        </div>
                        <div class="text-center" style="margin-top: 46px;">
                            <i class="fas fa-users" style="font-size:60px;"></i>
                        </div>
                        <div class="text-center" style="margin-top: 15px;">

                            <p><b>{{$users}}</b></p>
                        </div>

                        <div class=" card-header  bg-info" style="padding-top: 10px;">
                            <a href="#">
                                <div > <a class="text-light" href="/users"><i class="fas fa-eye" style="font-size:15px;"></i>More</a></div>
                            </a>

                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div style="height: 150px;"></div>

    </div>
</div>

@endsection