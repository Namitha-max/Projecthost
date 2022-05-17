
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
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
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
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/room">Rooms</a></li>
              <li><a href="/contact">Contact Us</a></li>
              <li><a href="/gallery"></a></li>

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
            <h6>Keep in touch with us</h6>
            <h2>Feel free to send us a message about your business needs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  @if(session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert"></button>
      {{session()->get('message')}}
</div>
@endif


                <div style="padding:100px;"align="center">
<table>
    <tr style="background-color:gray;">
        <td style="padding:30px;font-size:20px"> FName</td>
        <td style="padding:30px;font-size:20px"> Resort Name</td>
        <td style="padding:30px;font-size:20px">Phone No: </td>
        <td style="padding:30px;font-size:20px"> Id Proof</td>
        <td style="padding:30px;font-size:20px"> checkIn</td>
        <td style="padding:30px;font-size:20px"> checkOut</td>
        <td style="padding:30px;font-size:20px">  Action</td>

</tr>
@foreach($roombooks as $roombook)
<tr style="background-color:white;">
 <td style="padding:10px;">{{$roombook->FName}}</td>
 <td style="padding:10px;">{{$roombook->resort}}</td>
 <td style="padding:10px;">{{$roombook->Phone}}</td>
 <td style="padding:10px;">{{$roombook->idprf}}</td>
 <td style="padding:10px;">{{$roombook->Cin}}</td>
 <td style="padding:10px;">{{$roombook->Cout}}</td>
 <td style="padding:10px;"><a class="btn btn-danger" href="{{url('delete',$roombook->id)}}">Cancel</a></td>
 <td style="padding:10px;"><a class="btn btn-primary" href="/payment">Payment</a></td>
</tr>
@endforeach
</table>


<td>!!! If any reason cancel the the room before payment, After the PAYMENT not Refundable !!! </td>
<td style="padding:10px;"><a class="btn btn-primary" href="/billing">Download your payment status</a></td>
        </div>


<div class="whatsapp-chat">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style type="text/css">
.fa_custom {
color: #006200
}
</style>
<a href="https://wa.me/+918976546789?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
    <i class="fa fa-whatsapp fa_custom fa-4x"></i>
<!--<img src="{{asset('assets/images/logo-whatsapp.jpg')}}" height="50px" width="20px">-->
</a>
</div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/627c8f217b967b11798ef4fb/1g2r8u799';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">

            </div>
            <p>Please Connect Dreams Chat assistant</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>DREAM VACATION</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>

                  <li><a href="/room">Rooms</a></li>
                  <li><a href="/contact">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="/about">About Us</a></li>
                  <li><a href="/gallery">Gallary</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>27th Street of New Town, Digital Villa,Munnar</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">758692455</a>
              </div>
              <div class="col-lg-6">
                <a href="#">8745961256</a>
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

</body>

</html>
