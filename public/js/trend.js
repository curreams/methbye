
var trend = function()
{
 
 
  var getAllTrend = function ()
  {
    
        $.ajax({
          method: "GET",
          url: "/trend/getTrend",
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
        getAllTrend();
      
    }

}

}();

jQuery(document).ready(function() 
{
    trend.init();
});