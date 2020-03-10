@extends('layouts.app')
@section('content')
  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">DIGICARD</h1>
          <p class="lead mb-4 text-white-50">Home for your sophisticated complimentary cards.</p>
          <p class="lead mb-4 text-white-50">We give you only the best.</p>
          <p class="lead mb-5 text-white-50">COMING SOON.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login &raquo;</a>
        <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>IGHUB</strong>
          <br>62 EHI ROAD,ABA
          <br>ABIA STATE,NIGERIA.
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          (123) 456 7894
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:#">prince@ighub.com.ng</a>
        </address>
      </div>
    </div>
    

@endsection
