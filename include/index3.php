<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBw04XUsOmGPqGBZOeJo8t3HuYHWo0i9sY"></script>
<script>
var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
		
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});
$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
	
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});
</script>
    <body>
    <!-- Autocomplete location search input --> 
<div class="form-group">
    <label>Location:</label>
    <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
    <input type="hidden" id="loc_lat" />
    <input type="hidden" id="loc_long" />
</div>

<!-- Display latitude and longitude -->
<div class="latlong-view">
    <p><b>Latitude:</b> <span id="latitude_view"></span></p>
    <p><b>Longitude:</b> <span id="longitude_view"></span></p>
</div>
  </body>
</html>