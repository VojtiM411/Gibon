let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 49.068126, lng: 17.466390 },
    zoom: 11,
  });

  new google.maps.Marker({
    position: { lat: 49.0670814, lng: 17.4591847 },
    map,
    title: "Obchodní akademie UH",
  });

}