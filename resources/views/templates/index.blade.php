@extends('layouts.app')
@section('content')

@if($card_templates)
    @foreach($card_templates as $card_template)
        <div>{{$card_template -> name}}</div>
        <link rel=import href={{asset('storage/'. $card_template -> template_url)}}>
        <div>{{$card_template -> template_url}}</div>


        <iframe src= '{{asset('storage/'. $card_template -> template_url)}}'></iframe>
    @endforeach
@endif

@endsection


{{!!--<?php/storage/app/Templates/fPqogBUZTByteI9vucFuDtsam4oNNGxDXHQba4aF.html

/root/Documents/learning/digi-card/storage/app/Templates/fPqogBUZTByteI9vucFuDtsam4oNNGxDXHQba4aF.html?>--!!}}