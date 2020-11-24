@extends('layouts.layout')

@section('content')
<section class="editsection">


    <div style="height: 150px;"></div>

    <div class="container">
    <form action="{{'/edit/'.$product->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label style="color: #fec503;  font-size: x-large; font-weight: bolder" for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                        
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label style="color: #fec503;  font-size: x-large; font-weight: bolder" for="type"
                    class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">

                    <select id="inputState" name="type"  class="form-control">
                        <option selected>{{$product->typeId}}</option>
                        @foreach ($type as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label style="color: #fec503;  font-size: x-large; font-weight: bolder" for="number" class="col-sm-2 col-form-label">Avilable
                    num</label>
                <div class="col-sm-10">
                    <input type="number" value="{{$product->avilableNum}}" name="avilableNum" class="form-control" id="number" placeholder="number">
                </div>
            </div>

            <div class="form-group row">
                <label style="color: #fec503;  font-size: x-large; font-weight: bolder" for="image" class="col-sm-2 col-form-label">Image
                </label>
                <div class="col-sm-10">
                    <input type="file"  class="form-control" name="image" value="{{$product->image}}" id="image" placeholder="image">
                </div>
            </div>

            <div class="form-group row">
                <label style="color: #fec503;  font-size: x-large; font-weight: bolder" for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$product->description}}" name="description" class="form-control" id="description" placeholder="description">
                </div>
            </div>



            <div class="form-group row text-center">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-light">Add Product</button>
                </div>
            </div>
        </form>


    </div>

    <div style="height: 150px;"></div>
</section>
