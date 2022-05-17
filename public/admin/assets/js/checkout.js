$(document).ready(function()
{
  $('.razorpay_btn').click(function (e)
  {
   e.preventDefault();


   var firstname = $('.firstname').val();
   var lastname = $('.lastname').val();
   var email = $('.email').val();
   var phone = $('.phone').val();
   var address = $('.address').val();
   var city = $('.city').val();
   var state = $('.state').val();
   var pin = $('.pin').val();


   if(fname_error !='')
   {
       return false;
   }
   else
   {
       var data =
       {
        'firstname' : firstname,
        'lastname' : lastname,
        'email': email,
        'phone' : phone,
        'address' : address,
        'city ' : city,
        'state' : state,
        'pin' : pin

       }
       $.ajax({
        method:"POST",
        url:"/proceedtopay",
        data: data,

        success: function(response){
        //alert(response.total)
        var options = {
            "key": "rzp_test_hF0IfwgIvIuAWe", // Enter the Key ID generated from the Dashboard
            "amount": response.total*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": response.firstName+' '+response.lastName,
            "description": "Thank you for choosing us",
            "image": "https://example.com/your_logo",
            //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                alert(response.razorpay_payment_id);

            },
            "prefill": {
                "name":response.firstName+' '+response.lastName,
                "email": response.email,
                "contact": response.phone
            },

            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
         rzp1.open();

        }

       });
   }

  });
});
