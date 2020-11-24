@extends('layouts.layout')

@section('content')
<section class="insertsection">




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
                    <div style="background-color: rgba(151, 150, 151, 0.342);">

                        <div class="card-header bg-dark text-white">
                            All Uploaded Products
                        </div>
                        <table class="table table-striped text-white">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Avilable q</th>
                                    <th scope="col">description</th>
                                    <th scope="col">price</th>
                                    <th scope="col">type</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1 ?>
                                @foreach ($products as $item)
                                <tr>
                                    <th scope="row"><?= $c?></th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->avilableNum}}</td>
                                    <td> <?php echo substr($item->description, 0, 10) . '...' ?></td>
                                    <td>{{$item->price}}</td>
                                    

                                    <td>{{$item->producttype->name}}</td>
                                  <form action = "{{route('destroyroute', ['id'=>$item->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                  <td><button type="submit" style="background-color: unset; border: unset;"><i
                                            class=" text-danger fas fa-trash-alt"
                                            style="font-size: 25px;"></i></button>
                                </td>
                                  </form>
                                    <td><a href="/edit/{{$item->id}}/edit" style="background-color: unset; border: unset;"><i
                                                class=" text-danger fas fa-pen-square"
                                                style="font-size: 25px;"></i></a>

                                    </td>
                                </tr>
                                <?php    $c++?>


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