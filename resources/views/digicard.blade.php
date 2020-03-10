<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DIGICARD</title>


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

  <style>
    body{
      margin:0;
      padding:0;
      background-color:whitesmoke;
    }
    .active:hover{
    animation-name: totop;
    animation-duration: 1s;
    top: -20px;
/* margin-top: -20px!important; */
/* margin-bottom: 20px!important; */
box-shadow: -0.5px  -0.5px 15px lightgrey;

}
.active{
    transition: 0.5s all;
    animation: tobottom 1s;
} 
@keyframes totop{
    from{
        top: 0;
    }
    to{
        top: -20px;
    }
}
@keyframes tobottom{
    from{
        top: -20px;
    }
    to{
        top: 0;
    }
}
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark fixed-top" style=" background-image: linear-gradient(315deg, white,; )"  id="navbar-main">
    <div class="container">
      <strong class="navbar-brand">DIGI-CARD</strong>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
        
              <li class="nav-item">
                 <a class=" nav-link " href="{{ route('login') }}" style="color:white">Login</a>
             </li>

               <li class="nav-item">
                 <a href="{{ route('register') }}" class="nav-link "  style="color:white">Register</a>
               </li>
          
        </ul>
      </div> 

    </div>
  </nav>

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


    <footer class="footer-main">
    <div class=" container-fluid  mt-1" style="background-color:grey;" >
      
        <div class="row pt-md">
          <div class="col-lg-4 mb-5 mb-lg-0 mt-1">
            <a>
              <strong style="color: white; ">DIGI-CARD</strong>
            </a>
            <p></p>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0 text-white">
            <h6 class="heading mt-5 text-white">Account</h6>
            <ul class="list-unstyled ">
              <li><a href="../account-profile.html" class="text-white">Profile</a></li>
              <li><a href="../account-settings.html" class="text-white">Settings</a></li>
              <li><a href="../account-notifications.html" class="text-white">Notifications</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3 mt-5 text-white">About</h6>
            <ul class="list-unstyled text-small">
              <li><a href="#" class="text-white">Services</a></li>
              <li><a href="#" class="text-white">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3 mt-5 text-white">Company</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Terms</a></li>
              <li><a href="#" class="text-white">Privacy</a></li>
              <li><a href="#"class="text-white">Support</a></li>
            </ul>
          </div>
        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm text-white font-weight-bold text-center text-md-left">
              &copy; 2020, All rights reserved.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
