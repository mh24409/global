@extends('layouts.layout')

@section('content')



<div class="singleproduct">
    <div class="conatiner">
        <div class="" style="padding-top: 200px;">

            <div class="row  justify-content-center">

                <div class="  col-12 col-md-4 col-lg-4 " style="margin-bottom: 25px; border: unset">
                    <div style="margin-bottom: 30px;">
                        <img class="card-img-top" style="height:300px ; "
                            src="{{asset('storage/img/products/'.$product->image)}}" alt="" title="">
                    </div>
                    <div class="card-text">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="">
                            {{$product->description}}
                        </p>
                    </div>
                    <hr>
                    <div class="row text-left">
                        <div class="col-md-6 ">Uploaded by : <a href="/userprofile/{{$product->productuser->id}}">{{$product->productuser->name}}</a></div>
                        <div class="col-md-6 ">phone :0{{$product->productuser->phone}}</div>

                    </div>
                    <hr>
                    <div class="row text-left">
                        <div class="col-md-6 "> Avilable Number :{{$product->avilableNum}}</div>
                        <div class="col-md-6"> Price :{{$product->price}} </div>
                    </div>
                    <hr>
                    <div class="row text-left ">
                        <div style="font-size: 12px" class=" col-md-6 "> Upladed at :{{$product->updated_at}}</div>
                        <div style="font-size: 12px" class=" col-md-6 "> Type : <a
                                href="/typesproducts/{{$product->typeId}}">{{$product->producttype->name}}</a></div>

                    </div>
                    <hr>
                    <div class="row">
                        <div style="font-size: 12px" class=" col-md-12 "> <i class="fas fa-phone-volume" style="font-size: 15px;"></i> Call Phone Number To Buy Product</a></div>
                    </div>

                </div>


            </div>
        </div>
    </div>




</div>


@endsection