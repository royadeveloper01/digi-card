
@extends('layouts.app')
@section('title')
  DIGICARD
@endsection

@section('content')
  <!-- Header -->
  <header class=" spotlight bg-cover bg-size--cover py-5 mb-5" data-spotlight="fullscreen"style=" opacity:0.9; height:500px; background-image:url('images/unnamed.jpg')">
 
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12 text-center  opacity-5">
          <strong class="display-4 text-white mt-5 mb-4 ml-5" style="text-align:center;">DIGI-CARD</strong>
          <p class=" text-white ml-5" style="font-size:18px;">Home for your sophisticated complimentary cards.</p>
          <p class=" text-white ml-5" style="font-size:18px;">We give you only the best...</p>
          
        </div>
      </div>
    </div>
    
  </header>
  
  <!-- <div class="shape-container" data-shape-position="bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 220" preserveAspectRatio="none" class="ie-shape-wave-3">
          <path d="M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z"></path>
        </svg>
      </div> -->

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2 style=" text-align:center">What We Do</h2>
        <hr>
        <p>Digi-Card helps to create your complimentary card and enables people to access and connect with your business online..</p>
        <p>With this people can view your business card online, helping you connect and create more bridge online than offline..</p>
        </div>
      </div>
     
    </div>
    <section class="slice slice-lg">
      <div class="container-fluid" style="background-color:;">
        <h2 class="align-text-center price pb-5" style="text-align:center">How to use it</h2>
    <div class="col-lg-12 order-lg-1 ">
            <div class="row justify-content-around">
            <div class="position-relative app active card" style="z-index: 10; width:30%">
              <img alt="Image placeholder" src="images/signup-icon-13.png "style=""; class="img-center img-fluid">
              <h5 class=" text-center">Sign up</h5>
              <p class=" d-flex text-center" >Start with registering and log-in to your account</p>
            </div>
            <div class="position-relative app active card" style="z-index: 10;width:30%">
              <img alt="Image placeholder" src="images/38873_sign_256x256.png" class="img-center img-fluid">
              <h5 class=" text-center">Create your profile</h5>
              <p class="  text-center " >Then create your own personal profile</p>
            </div>
            <div class="position-relative app active card" style="z-index: 10; width:30%">
              <img alt="Image placeholder" src="images/brand-shot.gif" class="img-center img-fluid">
              <h5 class=" text-center">Enjoy the amazing features</h5>
              <p class=" d-flex text-center " >There are lots of features to choose to help you create your own card.</p>
            </div>
          </div>
    </div>
  </section>
  
    
  <section class="slice slice-lg">
      <div class="container-fluid mt-5 " style="background-color:grey; ;">
        <div class="row row-grid align-items-center justify-content-around">
          <div class="col-lg-5 order-lg-2">
            <div class="pr-md-4">
              <form>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label">Message</label>
                      <textarea class="form-control" data-toggle="autosize" placeholder="Tell us a few words ..." rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </form>
              <div class="text-center mb-2">
                <button type="button" class="btn btn-dark rounded-pill">Leave your feedback</button>
                
              </div>
                
              
          </div>
          </div>
          </div>
           </div>

@endsection