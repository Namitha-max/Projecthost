

<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","vacations");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Vacation</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        h6
        {

        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 1%;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;


        }
        *{
    font-family: 'Roboto',sans-serif;
}
.checkout-form label
{
font-size: 17px;
font-weight: 600;
}
.checkout-form input{
    font-size: 25px;
    padding: 5px;
    font-weight: 100;
}

.col-md-6
{
    width: 800px;
}
        .col-6{
            width: 50%;
            flex: 0 0 auto;
                    }

        .col-6-1{
            flex: 0 0 auto;
            margin-top: -10%;
            margin-left: 35%;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
        .prnt{
            display: inline-block;
	        border-radius: 20px;
	        border: 1px solid #4B5251;
	        color: #4B5251;
	        text-align: center;
	        font-size: 18px;
	        padding: 5px;
	        width: 14%;
	        height: 6%;
	        transition: all 0.5s;
	        cursor: pointer;
	        margin-left: 85%;
	        margin-top:-5% ;
        }
        .prnt:hover{
            background-color: black;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Dream Vacation</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">dreamvacations@gmail.com</p>
                        <p class="text-white">Dream vacations</p>
                        <p class="text-white">+91 9074139799</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>

                    <p class="sub-heading" id="dash_date">Booking Date: </p>
                        <script>
                        var today = new Date();
                        var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
                        document.getElementById("dash_date").innerHTML = "Order Date : "+date;
                        </script>

                    <p class="sub-heading">Email Address:

                        @foreach($roombooks as $roombook)
                        <tr>
                        <td>{{$roombook->Email}}</td> </tr>@endforeach

                    </p>
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


                   </div>
 </div>

     </div>



            </table>
            <br>
            <h3 class="heading" style="margin-left:5%;">Payment Status: Paid</h3>
            <h3 class="heading"style="margin-left:2%;">Payment Mode: Online Payment</h3>
           <div id="print_section">

            </div>
            <input type="button" class="prnt"onclick="printbill('print_section')" value="Download">
        </div>

        <div class="body-section">
            <p>
                <i style="margin-left:50%;">Thank You for Visiting...</i>
                <a href="/payments" class="buttonpur" style="vertical-align:middle"><span class="spanpur">Go Back your own page</span></a>
            </p>
        </div>
    </div>
<script>
    function printbill(section_id){
    window.print();
    }

</script>

</body>
</html>

