//Getting value from "ajax.php".
function fill(Value) {
   //Assigning value to "searchOne" div in "searchOne.php" file.
   $('#searchOne').val(Value);
   //Hiding "display" div in "searchOne.php" file.
   $('#display').hide();
}

$(document).ready(function() {
   //On pressing a key on "searchOne box" in "searchOne.php" file. This function will be called.
   $("#searchOne").keyup(function() {
       //Assigning searchOne box value to javascript variable named as "name".
       var name = $('#searchOne').val();
       //Validating, if "name" is empty.
       if (name == "") {
           //Assigning empty value to "display" div in "searchOne.php" file.
           $("#display").html("");
       }
       //If name is not empty.
       else {
           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "ajax.php",
               //Data, that will be sent to "ajax.php".
               data: {
                   //Assigning value of "name" into "searchOne" variable.
                   searchOne: name
               },
               //If result found, this funtion will be called.
               success: function(html) {
                   //Assigning result to "display" div in "searchOne.php" file.
                   $("#display").html(html).show();
               }
           });
       }
   });
	 
});



