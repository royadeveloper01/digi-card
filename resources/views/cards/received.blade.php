{{--@extends('dashboard.basic')--}}
@section('content')
    @if(!empty($received_cards))
        <div class="d-flex flex flex-wrap align-content-around">
            @foreach($received_cards as $card)
                <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                    <div class="card card-primary">
                        <h3 class="card-header bg-dark text-white flex-grow-1">{{$card->user()->name}}</h3>
                        <div class="card-body">
                            <a href="#"><img src="{{$card->card_url}}" alt="Image of card recieved" ></a>
                        </div>
                        <div class="card-footer text-center">
                            <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                            <a class="p-2 btn btn-primary ml-3" href="#" data-toggle="modal" data-target="'receivedcard'.{{$card->id}}">View Sender Details</a>
                        </div>
                    </div>
                </div>

                {{--Modal display for displaying sender's details--}}
                <div class="modal fade" id="'receivedcard'.{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{$card->user()->name . " Details"}}</h4>
                            </div>
                            <div class="modal-body">
                                <img src="" alt="senders profile picture">
                                {{"body of the details...."}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
        
            @endforeach
        </div>
    @else
        <div>You Currently have not recieved any card</div>  
    @endif
    

    

@endsection

@extends('layouts.app')
@section('content')
    <div class="d-flex flex flex-wrap align-content-around">
        
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card card-primary">
                <h3 class="card-header bg-dark text-white flex-grow-1">Card Sender name</h3>
                <div class="card-body">
                    <a href="#"><img src="#" alt="Image of card recieved" ></a>
                </div>
                <div class="card-footer text-center">
                    <a class="p-2 btn btn-dark mr-3" href="#">View Card</a>
                    <a class="p-2 btn btn-primary ml-3" href="#">View Sender Details</a>
                </div>
            </div>
        </div>
        
        
        
        
        
        
       
    </div>
    @endsection

