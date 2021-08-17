function getApi(){
    $.ajax({
        type:"GET",
        dataType: 'json',
        url:"http://localhost/leafletMap/api/single_read.php?id=1",
        success:function(json) {
            var latitud = parseFloat(json.latitud);
            var longitud = parseFloat(json.longitud);
            getMaps(latitud, longitud)
        }
    })
}
// Inicio funcion libreria Leaflet
function getMaps(latitud, longitud){
  var map = L.map('map').setView([latitud, longitud], 15);
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18
  }).addTo(map);

  L.control.scale().addTo(map);
  L.marker([latitud, longitud], {draggable: true}).addTo(map);
}
// Fin funcion libreria Leaflet

setInterval(getApi, 5000)
