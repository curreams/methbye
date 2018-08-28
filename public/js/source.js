
var source = function()
{
 
 
  var getAllSource = function ()
  {
    
        $.ajax({
          method: "GET",
          url: "/source/getSource",
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
        getAllSource();
      
    }

}

}();

jQuery(document).ready(function() 
{
    source.init();
});