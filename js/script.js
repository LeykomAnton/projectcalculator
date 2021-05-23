var today = new Date();

function move1(){
   let range=document.getElementById("range");
   let sum=document.getElementById("sum");
   sum.value=range.value;
}

function returnval1(){
    let range=document.getElementById("range");
    let sum=document.getElementById("sum");
    range.value=sum.value;
}

function move2(){
    let range2=document.getElementById("range2");
    let sum2=document.getElementById("sum2");
    sum2.value=range2.value;
}

function returnval2(){
    let range2=document.getElementById("range2");
    let sum2=document.getElementById("sum2");
    range2.value=sum2.value;
}

$( function() {
    $( "#date" ).datepicker({
        changeMonth: true,
        changeYear: true
      });;
      var minDate = $( "#date" ).datepicker( "option", "minDate" );
      $( "#date" ).datepicker( "option", "minDate", today );
      $( "#date" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
      $( "#date" ).datepicker( $.datepicker.regional[( "ru" )]);
  } );

$(document).ready(function() {
    $("#form").on("submit",
        function(){
            console.log('aboba')
            Result('result', 'form', 'calculator.php');
            return false; 
        }
    );
});

function Result(result_form, form, url){
    $.ajax({
        url: '/calculator.php',
        method: 'POST',
        dataType: 'html',
        data: jQuery('#'+form).serialize(),
        success: function(data){
            document.getElementById('result').innerHTML=data;
        }
    });
}