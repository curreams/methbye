var getLocation = function ()
{

    let location = $('#location').val();
    $('#mapview').show();
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
      zoom: 13
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
            var marker = new google.maps.Marker({
                position: place.geometry.location,
                title: place.name,
                map: map});
            addInfoWindow(marker,
                "<div> <p><span style='font-weight: bold;'>" + place.name + "</span></p><br> " + 
                "<span style='font-weight: bold;'> Address: </span> "+place.vicinity + "</div>"  );           
            
          }
        }
      }

  }

var addInfoWindow = function(marker, message) {

    var infoWindow = new google.maps.InfoWindow({
        content: message
    });

    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker);
    });
}  



jQuery(document).ready(function () {
    var mapCenter = new google.maps.LatLng(-37.8136, 144.963);
    map = new google.maps.Map(document.getElementById('mapview'), {
        //zoom: 10,
        center: mapCenter,
      });
    var input = document.getElementById('location');
    var autocomplete = new google.maps.places.Autocomplete(input);
    var bounds = new google.maps.LatLngBounds();    
    map.fitBounds(bounds);
    autocomplete.bindTo('bounds', map);
    $('#mapview').hide();  
   
    $("#submit_button").click( function()
        {
            let location = $('#location').val();
            if(location!=='') {
                getLocation();
            }
            else {
                alert('Please enter a value');
            }
        }
        );


});

