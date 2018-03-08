/* global $ */

function validateDetails(){
    
    var pin = pin = document.getElementById("user_pin").value;
      var email= document.getElementById("user_email").value;
      var name = document.getElementById("user_name").value;
     
       
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
   else if(name == ""){
        alert("Please enter your Name"); 
    }
    else if(email == ""){
        alert("Please enter your Email"); 
   
    } 
    
    else{
        enablebtnPurchase();
    }
    
    
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}