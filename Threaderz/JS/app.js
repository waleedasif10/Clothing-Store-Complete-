$("#logform").submit(function(event) {

    const Email = $('#email').val();
    const fName = $('#fname').val();
    const lName = $('#lname').val();
    const ingredients = $('#ingredients').val();
    
    
    
    var namereg = /^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/;
    var ingredientsreg =/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/;
    var Emailreg=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    
    
    if (!Email.match(Emailreg)) {
            $("#Email").html("<span class='alert alert-danger'> Enter a valid Email </span>");
            event.preventDefault();
          }
    
    if (!fName.match(namereg)) {
            $("#fname").html("<span class='alert alert-danger'> Enter Valid Name (Letters only)</span>");
            event.preventDefault();
          }
          if (!lName.match(namereg)) {
            $("#lname").html("<span class='alert alert-danger'> Enter Valid Name (Letters only)</span>");
            event.preventDefault();
          }
    
          if (!ingredients.match(ingredientsreg)) {
            $("#ingre").html("<span class='alert alert-danger'> Enter a valid ingredient with comma seperated </span>");
            event.preventDefault();
          }
    
    
    
    });
    