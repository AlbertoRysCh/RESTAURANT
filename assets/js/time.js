$(document).ready (function(){ 
    $("#success-alert").hide(); 
    $("#myWish").click(function showAlert() { 
     $("#success-alert").alert(); 
     window.setTimeout(function() { 
        $("#success-alert").alert('close'); }, 9000);    
      });  
      }); 