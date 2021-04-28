

       /* var map;
        function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -2.192425866321628, lng: -79.89646210455565},
          //center: new google.maps.LatLng({lat: -2.192425866321628, lng: -79.89646210455565}),
           zoom: 13,
         });
         var marker = new google.maps.Marker({
           position: {lat: -2.192425866321628, lng: -79.89646210455565},
           //position: new google.maps.LatLng({lat: -2.192425866321628, lng: -79.89646210455565}),
           map: map,
           draggable: false,
           title: 'Guayaquil-Ecuador'
         });
       }*/

  var direccion  = document.getElementById('direccion');
    function initMap(){
        var latitud = -2.192425866321628;
        var longitud = -79.89646210455565;

        coordenadas = {
          lat: latitud,
          lng: longitud  
        }

        generarMapa(coordenadas);
     }

     function generarMapa(coordenadas){
       var mapa = new google.maps.Map(document.getElementById('map'),{
        center: new google.maps.LatLng(coordenadas.lat,coordenadas.lng),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
         
       });

       var marker = new google.maps.Marker({
        map: mapa,
        draggable: true,
        position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
      });

      google.maps.event.addListener(marker, 'dragend', function (evt){
        $('#latitud').val(evt.latlng.lat().toFixed(6));
        $('#longitud').val(evt.latlng.lng().toFixed(6));

        map.panTo(evt.latlng);
      });
      /*map.setCenter(marker.position);
      marker.setMap(mapa);*/

      $('#direccion').change(function (){
        movePin();
      });


      function movePin(){
        var geocoder = new google.maos
      }
      /*marker.addListener('dragend', function(event){
        document.getElementById("latitud").value = this.getPosition().lat();
        document.getElementById("longitud").value = this.getPosition().lng();
      });*/

     }
  

