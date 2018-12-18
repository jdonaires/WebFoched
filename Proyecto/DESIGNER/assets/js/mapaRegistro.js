function initMap() {

    if($('#Direccion').val() != ""){

      Ruta = $('#Distrito').val() +'+' + $('#Direccion').val();

      for(var i = 0; i < Ruta.length - 1; i++){
        Ruta = Ruta.replace(' ', '+');
      }

      $.ajaxSetup({
        async: false
      });
      $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?address=" + Ruta + "&key=AIzaSyDLrcb0SB8k1yfpchyfjUupueITRv0OU80", function(data){
        local = data;
        lat = local.results[0].geometry.location.lat;
        lng = local.results[0].geometry.location.lng;
        $('#lat').val(lat);
        $('#lng').val(lng);
      });
      console.log('1');
    } else {
      console.log('2');
      $('#lat').val(-27.555);
      $('#lng').val(-47.054);
    }

    var center = {
      lat: Number($('#lat').val()),
      lng: Number($('#lng').val())
    };

    var markerPosition = center;
    var map = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 16,
      center: center,
      styles: []
    });
    var marker = new google.maps.Marker({
      position: center,
      map: map,
      draggable: true
    });
    marker.addListener('dragend', function(){
      map.setCenter(marker.getPosition());

      $('#lat').val(marker.getPosition().lat().toString());
      $('#lng').val(marker.getPosition().lng().toString());
    })
    }