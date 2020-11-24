@extends('layouts.layout')

@section('content')
<section class="users">




    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">

                    <a href="/adminindex" class="list-group-item list-group-item-action active bg-dark">
                        Dashboard
                    </a> <a href="/types" class="list-group-item list-group-item-action">Types</a>
                    <a href="/insert" class="list-group-item list-group-item-action">Add New Product</a>
                    <a href="/allproducts" class="list-group-item list-group-item-action">All Products</a>
                    <a href="/users" class="list-group-item list-group-item-action">Users</a>
                    <a href="/profile/{{Auth::user()->id}}" class="list-group-item list-group-item-action">Profile</a>

                </div>
            </div>
            <div class="col-md-9">
                <div style="background-color: rgba(151, 150, 151, 0.342);">
                    <div class="card-header bg-dark  text-white">
                        Our Users
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title">All users </h5>
                        <table class="table table-striped text-white">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Send Massege</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $item)
                                <tr></tr>
                                <th scope="row">1</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>

                                <td><button style="background-color: unset; border: unset;"><i
                                            class=" text-danger fas fa-envelope-open-text" style="font-size: 25px;"></i></button>
                                </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>



    </div>

</section>

@endsection