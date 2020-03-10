@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('status'))
            <div class="card">
                <div class="card-header">Welcome to Digicard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">profile</div>

                <div class="card-body " style="background-image:url('images/bg.svg') ">
                    <div style=" background-image: linear-gradient(315deg, white, lightgrey   ">
                    <img style="d-flex; margin-left:35% " src="{{url('images/profile.jpg')}}"alt="">
                    <p class="lead" style="text-align:center">{{'Profile Name'}} </p>
                    <a href=""> <img style="margin-left:10px; width:30px" src="{{url('images/download.jpg')}}"alt="">update</a>
                    </div>
                    <div class="ml-5" style="padding:20px;margin-top:40px;">
                    <p class="">{{'Information'}} </p><hr>
                    <p class="lead">{{'Name:'}} </p>
                    <p class="lead">{{'CompanyName:'}}</p>
                    <p class="lead">{{'Email:'}}</p>
                    <p class="lead">{{'Bio:'}}</p>
                    <p class="lead">{{'Gender:'}}</p>
                    <p class="lead">{{'Phone Number:'}}</p>
                    </div>
                    <div class="col-md-8">
                   
                    </div>

                    You are logged in as a User!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
