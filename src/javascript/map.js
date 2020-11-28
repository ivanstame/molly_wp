// Initialize and add the map
function initMap() {
    // The location of Uluru
    const mheights = { lat: 33.638562, lng: -117.859991 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 16,
      center: mheights,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: mheights,
      map: map,
    });
  }

  export {initMap};