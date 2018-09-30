var getLocation = function ()
{

    let location = $('#location').val();
    axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
            params:{
                address:location,
                key:'AIzaSyBHKYsIrfTX4_BYPTYBNsA3N8gOznLgMz8'
            }
        }).then(function (response) {
            
            lat = response.data.results[0].geometry.location.lat;
            lng = response.data.results[0].geometry.location.lng;
            initServices(lat, lng);

        })
            .catch(function (error) {
                console.log(error);
            });


/*
    axios.get('/maps/putLocation',{
        params:{
            lat:lat,
            lng:lng
        }
    }).then(function (response) {
        console.log(response);
    
        
    })
        .catch(function (errpr) {
            console.log(error);
        });
        */
  }
 
  var initServices = function(lat, lng){

    var mapCenter = new google.maps.LatLng(lat, lng);

    map = new google.maps.Map(document.getElementById('mapview'), {
      center: mapCenter,
      zoom: 15
    });
    var request = {
        location: mapCenter,
        radius: '2000',
        type:['hospital']        
      };
      service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, callback);
      function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];            
            var marker = new google.maps.Marker({position: place.geometry.location, map: map});           
            
          }
        }
      }

  }

jQuery(document).ready(function () {



   
    $("#submit_button").click( function()
           {
            getLocation();
           }
        );


});

