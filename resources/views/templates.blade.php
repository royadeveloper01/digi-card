@extends('layouts.app')

@section('content')

<div class="container mt-4 ">
      <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
                <img src="{{ url('images/a.png') }}" class="rounded-circle d-flex justify-content-center" alt="..." style="height:13rem">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Software Developer</li>
                    <li class="list-group-item">68 Asa Rd</li>
                    <li class="list-group-item">2349016052937</li>
                    <li class="list-group-item"><p>www.blogerand.com</p>  </li>
                  </ul>
              </div>
            </div>
          </div>
        
        <div class="well">
          <div class="card">
            <div class="row">
                <img src="{{ url('images/a.png') }}" class="rounded-circle d-flex justify-content-center ml-5 m-2 mb-5  " alt="..." style="height:13rem">
                <div class="card-body pt-5">
              <h5 class="card-title">John Doe</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Software Developer</li>
                <li class="list-group-item">68 Asa Rd</li>
                <li class="list-group-item">2349016052937</li>
                <li class="list-group-item"><p>www.blogerand.com</p>  </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
   </div>
@endsection