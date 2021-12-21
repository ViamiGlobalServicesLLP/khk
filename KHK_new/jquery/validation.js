
$(document).ready(function(){
  $("#contact_form").validate({
    // Specify validation rules
    rules: {
      username: "required",
      company: "required",
      designation:"required",
      country:"required",
      product:"required",
      quantity:"required",
      message:"required",
      email: {
        required: true,
        email: true
      },      
      phone_no: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 10,
      },
      password: {
        required: true,
        minlength: 5,
      },
    message: {
      required: true,
      minlength: 5,
      maxlength: 30,
      lettersonly: true
    },
    },
    messages: {
     
     phone_no: {
      required: "This field is required",
      digits: "Please enter valid phone number",
      minlength: "Phone number field accept only 10 digits",
      maxlength: "Phone number field accept only 10 digits",
     },    
     email: {
      required: "This field is required",
      email: "Please enter a valid email address.",
     },
     
    },
  
  });
});



