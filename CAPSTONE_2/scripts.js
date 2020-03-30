
// Team A - Box 1
function fill1(Value) {
   $('#searcha').val(Value);
   $('#displaya').hide();
}

$(document).ready(function() {
   $("#searcha").keyup(function() {
       var name = $('#searcha').val();
       if (name == "") {
           $("#displaya").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {
                   searcha: name
               },
               success: function(html) {
    
                   $("#displaya").html(html).show();
               }
           });
       }
   });
});


// Team B - Box 1
function fill2(Value) {
   $('#searchb').val(Value);
   $('#displayb').hide();
}

$(document).ready(function() {
   $("#searchb").keyup(function() {
       var name = $('#searchb').val();
       if (name == "") {
           $("#displayb").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {

                   searchb: name
               },
               success: function(html) {
    
                   $("#displayb").html(html).show();
               }
           });
       }
   });
});


// Team A - Box 2
function fill3(Value) {
   $('#searchc').val(Value);
   $('#displaya').hide();
}

$(document).ready(function() {
   $("#searchc").keyup(function() {
       var name = $('#searchc').val();
       if (name == "") {
           $("#displaya").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {

                   searchc: name
               },
               success: function(html) {
    
                   $("#displaya").html(html).show();
               }
           });
       }
   });
});



// Team B - Box 2
function fill4(Value) {
   $('#searchd').val(Value);
   $('#displayb').hide();
}

$(document).ready(function() {
   $("#searchd").keyup(function() {
       var name = $('#searchd').val();
       if (name == "") {
           $("#displayb").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {

                   searchd: name
               },
               success: function(html) {
    
                   $("#displayb").html(html).show();
               }
           });
       }
   });
});


// Team A - Box 3
function fill5(Value) {
   $('#searche').val(Value);
   $('#displaya').hide();
}

$(document).ready(function() {
   $("#searche").keyup(function() {
       var name = $('#searche').val();
       if (name == "") {
           $("#displaya").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {

                   searche: name
               },
               success: function(html) {
    
                   $("#displaya").html(html).show();
               }
           });
       }
   });
});



// Team B - Box 3
function fill6(Value) {
   $('#searchf').val(Value);
   $('#displayb').hide();
}

$(document).ready(function() {
   $("#searchf").keyup(function() {
       var name = $('#searchf').val();
       if (name == "") {
           $("#displayb").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "ajax.php",        
               data: {

                   searchf: name
               },
               success: function(html) {
    
                   $("#displayb").html(html).show();
               }
           });
       }
   });
});

