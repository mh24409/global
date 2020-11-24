@extends('layouts.layout')

@section('content')
<div class="types ">

  <header class="" style="height: 115px; margin-bottom: 50px;"></header>
  <div class="container">
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
      <div class="col-md-9">

        <div class="row">

          <div class="card col-md-8" style="background-color: rgba(151, 150, 151, 0.342);">
            <div class="card-header bg-dark text-white">
              Avilable Types
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <table class="table table-striped text-white">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n = 1 ?>
                  @foreach ($types as $item)
                  <tr>
                    <th scope="row"> <?php $n ?> </th>
                    <td>{{$item->name}}</td>
                    <form action = "{{route('destroyroutetype', ['id'=>$item->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                  <td><button type="submit" style="background-color: unset; border: unset;"><i
                                            class=" text-danger fas fa-trash-alt"
                                            style="font-size: 25px;"></i></button>
                                </td>

                                  </form>                 </tr>
                  <?php $n++ ?>
                  @endforeach




                </tbody>
              </table>
            </div>
          </div>
          <div class="card col-md-3" style="height: 250px;background-color: rgba(151, 150, 151, 0.342);margin-left: 20px;">
            <form action="/types" method="POST">
              @csrf
              <div class="card-header bg-dark text-white">
                new type
              </div>
              <div class="card-body ">
                <form action="">
                  <label class="text-white" for="name" class="card-title">
                    <h5>Add Type</h5>
                  </label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Type Name" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>
                  <button type="submit" class="btn btn-primary">add</button>
                </form>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </div>
  <div style="height: 100px;"></div>
</div>
@endsection