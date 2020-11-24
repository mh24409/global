@extends('layouts.layout')

@section('content')
<section class="insertsection">




    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="list-group">
                           
                            <a href="/adminindex" class="list-group-item list-group-item-action active bg-dark">
                                Dashboard
                            </a>                            <a href="/types" class="list-group-item list-group-item-action">Types</a>
                            <a href="/insert" class="list-group-item list-group-item-action">Add New Product</a>
                            <a href="/allproducts" class="list-group-item list-group-item-action">All Products</a>
                            <a href="/users" class="list-group-item list-group-item-action">Users</a>
                            <a href="/profile/{{Auth::user()->id}}" class="list-group-item list-group-item-action">Profile</a>
                  
                          </div>
            </div>
            <div class="col-md-9">
                <form action="/global" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label style="color: white; font-size: x-large;" for="name"
                            class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="color: white;  font-size: x-large;" for="type"
                            class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">

                            <select id="type" name="type" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($product as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="color: white; font-size: x-large;" for="number"
                            class="col-sm-2 col-form-label">Avilable
                            q</label>
                        <div class="col-sm-10">
                            <input type="number" name="avilableNum" class="form-control" id="number"
                                placeholder="number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="color: white; font-size: x-large;" for="price"
                            class="col-sm-2 col-form-label">price
                        </label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" id="price" placeholder="price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="color: white; font-size: x-large;" for="image"
                            class="col-sm-2 col-form-label">Image
                        </label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="image" placeholder="number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="color: white; font-size: x-large;" for="description"
                            class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" id="description"
                                placeholder="description">
                        </div>
                    </div>



                    <div class="form-group row text-center">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-light">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

</section>

@endsection