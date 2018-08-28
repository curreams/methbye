
var first_use = function()
{
 
 
  var getAllFirstUse = function ()
  {
    
        $.ajax({
          method: "GET",
          url: "/first-use/getFirstUse",
          data: {}
        })
        .done(function( data ) {
         console.log(data);

        });
  }
  return {
    //main function to initiate the module
    init: function () 
    {
        getAllFirstUse();
      
    }

}

}();

jQuery(document).ready(function() 
{
    first_use.init();
});