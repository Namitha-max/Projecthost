
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

     <!--booking css file -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/chocolat.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/easy-responsive-tabs.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swipebox.css">


    <!-- date Validation-->

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css" rel="stylesheet"/>

    <script>
        $(document).ready(function (){
            minDate = new Date();
            $("#checkIn").datepicker({
               showAnim: 'drop' ,
               minDate : minDate,
               numberOfMonth: 1,
               dateFormat: 'yy/mm/dd',

            });
        });
    </script>
    <script>
        $(document).ready(function (){
            minDate = new Date();
            $("#checkOut").datepicker({
               showAnim: 'drop' ,
               minDate : minDate,
               numberOfMonth: 1,
               dateFormat: 'yy/mm/dd',

            });
        });
    </script>

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
              <li><a href="/booking" class="active">Booking</a></li>
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
            <h6>Dreams with Simple Tabs</h6>
            <h2>Book your Dream House and Happyeee</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="{{ url('useradd') }}" method="POST">
  @method('post')
  @csrf

  <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Mis.">Mis.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>

                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name*</label>
                                            <input name="fname" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Last Name*</label>
                                            <input name="lname" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Address*</label>
                                            <input name="address" type="address" class="form-control" required>
                                </div>
							   <div class="form-group">
                                            <label>Email*</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Indian" checked="">Indian
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Indian ">Non Indian
                                            </label>

                                </div>
                                <div class="form-group">
                                            <label>State*</label>
                                            <select name="state"  class="form-control" required>
												<option value selected >Kerala</option>


    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="AN">Andaman</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>City*</label>
                                            <input name="city" type="city" class="form-control" required>
                                </div>


								<?php

$countries = array("Aadhar","PAN","Voters ID");

?>
<div class="form-group">
            <label>ID Proof*</label>
            <select name="idprf" class="form-control" required>
                <option value selected ></option>
                <?php
                foreach($countries as $key => $value):
                echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                endforeach;
                ?>
            </select>
       </div>
         <div class="form-group">
            <label>ID Number*</label>
            <input name="idnum" type ="text" class="form-control" required>

        </div>

        <div class="form-group">
            <label>Upload your Id*</label>
        <input type="file" name="file">
     </div>

       <div class="form-group">
            <label>Phone Number*</label>
            <input name="phone" type ="text" class="form-control" required>

        </div>
        <div class="form-group">
            <label>Pin*</label>
            <input name="pin" type="pin" class="form-control" required>
        </div>
            </div>
            </div>
            </div>
            <div class="row">
<div class="col-md-6 col-sm-6">
<div class="panel panel-primary">
<div class="panel-heading">
RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">

                        <div class="form-group">
                                            <label>Which resort you want?*</label>
                                            <select name="resort"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Sunshine paradise">SUNSHINE PARADISE-1800/day</option>
                                                <option value="Amazing party villa">AMAZING PARTY VILLA-3000/day</option>
												<option value="Apple vally resort">APPLE VALLY RESORT-3000/day</option>
                                                <option value="Holiday resort">HOLIDAY RESORT-1199/day</option>
                                                <option value="Green vally resort">GREEN VALLY RESORT-3000/day</option>
                                                <option value="Birds paradise resort">BIRDS PARADISE RESORT-2400/day</option>
                                                <option value="Vismaya">VISMAYA-3000/day</option>

                                            </select>
                              </div>


								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												                        <option value="Guest House">GUEST HOUSE</option>
											                       	  <option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Which of these are u?*</label>
                                            <select name="trvlr" class="form-control" required>
												<option value selected ></option>
                                                <option value="Solo">Solo traveler</option>
                                                <option value="Family">Family travelers</option>
												<option value="Couple">Couple/Pair</option>
                                                <option value="Business">Business traveler</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of members *</label>
                                            <select name="tmeb" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												                        <option value="3">3</option>
												                        <option value="4">4</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" id="checkIn" type ="text" class="form-control">

                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" id="checkOut" type ="text" class="form-control">

                               </div>
                       </div>

                    </div>
                </div>


                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
                            <?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code'];
							if($code1!="$code")
							{
							$msg="Invalide code";
							}
							else
							{

									$con=mysqli_connect("127.0.0.1","root","","vacations");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";

									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`,`address`, `Email`, `National`,`state`,`city`,`idprf`, `idnum`,`image`,`Phone`,`pin`,`Resort`,
                                        `troom`,`trvlr`, `Tmeb`, `cin`, `cout`,`stat`,`nodays`)
                                         VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[email]','$_POST[nation]','$_POST[state]','$_POST[city]','$_POST[idprf]','$_POST[idnum]','$_POST[file]','$_POST[phone]','$_POST[pin]','$_POST[resort]',
                                         '$_POST[troom]','$_POST[trvlr]','$_POST[tmeb]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";

										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>

                    </div>
                </div>
            </div>


                </div>



					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>





                        </form>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adicingi elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
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
   <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
