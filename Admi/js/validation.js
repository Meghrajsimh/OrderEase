$("#loginForm").validate({
    rules: {
        username : 'required',
        password : {
            required: true,
            minlength:8
        },
    },
    messages:{
        username : "Please enter your email ",
        
        password:{
            required:"Enter your password",
            minlength:"password should be minimum 8 length"
        },
        

    }
})

$(document).on("click", "#addFood", function () {
 
    console.log("hhe");
    $("#addFoodForm").validate({
      rules: {
        foodName : "required",
        description : "required",
        price : "required",
        time : "required",
        foodImage : "required",
        category : 'required'
      },
      messages: {
        foodName: "Please enter food name",
        description: "Pleas write description of food",
        price: "Please enter price of food",
        time: "Please enter time for prepare food",
        foodImage: "Please enter food image",
        category : "Please select category"
      },
    });
  });

  window.onload = ()=>{
    Particles.
init
({
    selector: ''
  });
  }