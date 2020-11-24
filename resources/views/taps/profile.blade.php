@extends('layouts.layout')

@section('content')
<section class="profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <div style="background-color: rgba(151, 150, 151, 0.342);">

                            <div class="card-header bg-dark text-white">
                                Profile
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}} Profile</h5>
                                <div class="card " style="background-color:unset">


                                    <div class="card-body">
                                        <div class="text-right"> <a href="" class=" "><i class="fas fa-edit"
                                                    style="font-size: 20px;"></i></a> </div>
                                        <br>

                                        <div class="row">
                                            <div class=" text-left col-md-9">
                                                <p><b>Name : {{$user->name}}</b></p>
                                                <p><b>Email : {{$user->email}}</b></p>
                                                <p><b>phone :0{{$user->phone}}</b></p>

                                                <p><b> address : {{$user->address}}</b></p>
                                                <p><b>Gender :{{$user->gender}}</b></p>
                                                <p><b>Date :{{$user->created_at}}</b></p>
                                            </div>

                                            <div class="col-md-3">
                                                @if ($user->gender=="male")
                                            <img style="height: 150px; width: 150px;" src="{{asset('img/male.png')}}" alt="">
                                                 @else
                                                 <img style="height: 150px; width: 150px;" src="{{asset('img/female.png')}}" alt="">
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