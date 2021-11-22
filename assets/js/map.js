let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 49.068126, lng: 17.466390 },
    zoom: 11,
  });
}