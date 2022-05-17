
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DREAM VACATION</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/payment" class="active">Payment</a></li>
              <li><a href="/room">Rooms</a></li>
              <li><a href="/contact">Contact Us</a></li>
              <li><a href="/gallery">Gallery</a></li>

            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Dreams with Simple Tabs</h6>
            <h2>We have a wide range of business categories for you</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <h6>Basic Details</h6>
                <hr>
                <div class="row checkout-form">
                    <div class="col-md-6">
                        <label for="firstName">First Name : </label>

                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->FName}}</td> </tr>@endforeach
                        <span id="fname_error"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName">Last Name : </label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->LName}}</td> </tr>@endforeach
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email : </label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->Email}}</td> </tr>@endforeach
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Phone : </label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->Phone}}</td> </tr>@endforeach
                    </div>
                    <div class="col-md-6">
                        <label for="address">Address : </label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->address}}</td> </tr>@endforeach
                    </div>

                    <div class="col-md-6">
                        <label for="city">City :</label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->city}}</td> </tr>@endforeach
                    </div>
                    <div class="col-md-6">
                        <label for="state">State : </label>
                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->state}}</td> </tr>@endforeach
                    </div>

                    <div class="col-md-6">
                        <label for="pin">Pin Code : </label>
                           @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->pin}}</td> </tr>@endforeach
                    </div>
                </div>
    </div>
        </div>
            </div>
            <div class="col-lg-5">
               <div class="card">
                  <div class="card-body">
                <h6>Booking Details</h6>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Resort</th>
                            <th>T.days</th>
                            <th>R.rate</th>
                            <th>T.rate</th>
</tr>
</thead>
                    <tbody>
                        @php $total =  $roombook->amount * $roombook->nodays; @endphp

                @foreach ($roombooks as $roombook)
                <tr>

                   <td>{{$roombook->resort}}</td>
                   <td>{{$roombook->nodays}}</td>
                   <td>{{$roombook->amount}}</td>
                   <td>{{ $total }}</td>


</tr>
                        @php $total = $roombook->amount * $roombook->nodays; @endphp
                @endforeach
</tbody>
</table>

             </div>

                </div>

                <hr><button type="button" class="btn btn-primary w-100 mt-3 checkout-form"><a href="/stripe">Pay with Stripe</a></button>

                <hr><button type="button" class="btn btn-primary w-100 mt-3 checkout-form"><a href="/payWithRazorpay">Pay with Razorpay</a></button>
                   </div>
 </div>

     </div>



<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">

          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>

                  <li><a href="/">Home</a></li>
                  <li><a href="/room">Rooms</a></li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="/about">About Us</a></li>

                  <li><a href="/gallery">Gallery </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>27th Street of New Town, Digital Villa</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">010-020-0340</a>
              </div>
              <div class="col-lg-6">
                <a href="#">090-080-0760</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="admin/assets/js/checkout.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


</body>

</html>
