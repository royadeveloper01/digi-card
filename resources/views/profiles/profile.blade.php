@extends('layouts.app')
@section('content')

   
    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                       @endif

                       @if(session('response')) 
                       <div class="alert alert-success">{{session('response')}}</div>
                       @endif
                <div class="card">
                    <div class="card-header">profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div> 
                    <div class="card-body">
                        <form method="POST" action="{{ url('/updateProfile') }}" enctype="multipart/form-data">
                            @csrf
                             

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="input" class="form-control @error('company_name') is-invalid @enderror" name="company_name" required >

                                    @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="input" class="form-control " name="email" required >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>

                                <div class="col-md-6">
                                    <input id="bio" type="input" class="form-control " name="bio" required >

                                    @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <input id="gender" type="radio" class="form-control " name="gender" required > male
                                    <input id="gender" type="radio" class="form-control " name="gender" required > female

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="input" class="form-control " name="phone_number" required >

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="profile_pic" type="file" class="form-control " name="profile_pic" required >

                                    @error('profile_pic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mt-2">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Update Profile') }}
                                    </button>

                                        
                                </div>
                            </div>
                        </form> 




                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection 





                               

