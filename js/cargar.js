$(document).ready(function(){
  $('#subscribe').on('change',function(){
    if (this.checked=true;) {
     $("#telefono").show();
    } else {
     $("#telefono").hide();
    }  
  })

  $('#checkCorreo').on('change',function(){
    if (this.checked true) {
     $("#correo").show();
    } else {
     $("#correo").hide();
    }  
  })

  $('#checkDep').on('change',function(){
    if (this.checked) {
     $("#dependencia").show();
    } else {
     $("#dependencia").hide();
    }  
  })

  $('#CheckArch').on('change',function(){
    if (this.checked) {
     $("#file").show();
    } else {
     $("#file").hide();
    }  
  })


  $('#CheckDest').on('change',function(){
    if (this.checked) {
      $("#nombre").show();
     $("#calle").show();
     $("#colonia").show();
     $("#cp").show();
     $("#ciudad").show();
    } else {
      $("#nombre").hide();
      $("#calle").hide();
      $("#colonia").hide();
      $("#cp").hide();
      $("#ciudad").hide();

    }  
  })

  $('#CheckBene').on('change',function(){
    if (this.checked) {
      $("#nombreFamiliar1").show();
      $("#parentesco1").show();
      $("#curpF1").show();
     $("#label").show();
    } else {
      $("#nombreFamiliar1").hide();
      $("#parentesco1").hide();
      $("#curpF1").hide();
      $("#label").hide();

    }  
  })



  $('#CheckBene1').on('change',function(){
    if (this.checked) {
      $("#nombreFamiliar2").show();
      $("#parentesco2").show();
      $("#curpF2").show();
     $("#label2").show();
    } else {
      $("#nombreFamiliar2").hide();
      $("#parentesco2").hide();
      $("#curpF2").hide();
$("#label2").hide();

    }  
  })

  $('#CheckBene2').on('change',function(){
    if (this.checked) {
      $("#nombreFamiliar3").show();
      $("#parentesco3").show();
      $("#curpF3").show();
     $("#label3").show();
    } else {
      $("#nombreFamiliar3").hide();
      $("#parentesco3").hide();
      $("#curpF3").hide();
$("#label3").hide();

    }  
  })




  $('#CheckOfic').on('change',function(){
    if (this.checked) {
    
      $("#oficio6").show();
      $("#oficio7").show();
      $("#oficio8").show();
      $("#oficio9").show();
      $("#oficio10").show();
      $("#label2").show();
    } else {
   
      $("#oficio6").hide();
      $("#oficio7").hide();
      $("#oficio8").hide();
      $("#oficio9").hide();
      $("#oficio10").hide();
      $("#label2").hide();
    }  
  })

  $('#CheckOfic2').on('change',function(){
    if (this.checked) {
    
      $("#oficio11").show();
      $("#oficio12").show();
      $("#oficio13").show();
      $("#oficio14").show();
      $("#oficio15").show();
      $("#label3").show();
    } else {
   
      $("#oficio11").hide();
      $("#oficio12").hide();
      $("#oficio13").hide();
      $("#oficio14").hide();
      $("#oficio15").hide();
      $("#label3").hide();
    }  
  })

  $('#CheckOfic3').on('change',function(){
    if (this.checked) {
    
      $("#oficio16").show();
      $("#oficio17").show();
      $("#oficio18").show();
      $("#oficio19").show();
      $("#oficio20").show();
      $("#label4s").show();
    } else {
   
      $("#oficio16").hide();
      $("#oficio17").hide();
      $("#oficio18").hide();
      $("#oficio19").hide();
      $("#oficio20").hide();
      $("#label4").hide();
    }  
  })
  $('#CheckOfic4').on('change',function(){
    if (this.checked) {
    
      $("#oficio21").show();
      $("#oficio22").show();
      $("#oficio23").show();
      $("#oficio24").show();
      $("#oficio25").show();
      $("#label5").show();
    } else {
   
      $("#oficio21").hide();
      $("#oficio22").hide();
      $("#oficio23").hide();
      $("#oficio24").hide();
      $("#oficio25").hide();
      $("#label5").hide();
    }  
  })
  $('#CheckOfic5').on('change',function(){
    if (this.checked) {
    
      $("#oficio21").show();
      $("#oficio22").show();
      $("#oficio23").show();
      $("#oficio24").show();
      $("#oficio25").show();
    } else {
   
      $("#oficio21").hide();
      $("#oficio22").hide();
      $("#oficio23").hide();
      $("#oficio24").hide();
      $("#oficio25").hide();
      $("#label5").hide();
    }  
  })
});



