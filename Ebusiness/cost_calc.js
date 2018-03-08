/* global $ */

function calcSub(parm1){
    
    var argSubTotal; 
    
    if(document.getElementById('salesforce').checked){
    argSubTotal=100;
}
  if(document.getElementById('aws').checked){
    argSubTotal=300;
}
  if(document.getElementById('Cloud9').checked){
    argSubTotal=200;
        
}
    if(document.getElementById('Gmail').checked){
    argSubTotal=400;
}
   
     CalDisVatTotal(argSubTotal);
}

function CalDisVatTotal(parmSubTotal){
    var SubTotal = parmSubTotal;
    var VatAmt;
    var DiscountAmt;
    var TotalPrice;
    
    DiscountAmt = (parmSubTotal * 0.05);
    VatAmt = (parmSubTotal - DiscountAmt) * (.10);
    TotalPrice = (parmSubTotal + VatAmt - DiscountAmt);
    
    display(SubTotal, VatAmt, DiscountAmt, TotalPrice);
}

function display(parm1 , parm2 , parm3 , parm4){
    

    
    document.getElementById("SubTotal").value= parm1;
    document.getElementById("VAT").value= parm2;
    document.getElementById("Discount").value = parm3;
    document.getElementById("total").value = parm4;
    
    
    enablebtnProceed();
    
    
    
}   
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
    
} 
function disablebtnProceed(){
    $('#btnProceed').prop('disabled',true); 
} 