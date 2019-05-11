// On initialise la latitude et la longitude (centre de la carte)
var lat = 47.9340714;
var lon = 6.6534392;

var macarte = null;

var magasins = {
    "Laurence Fady<br>13 rue du prés martin": {"lat": 47.9340714, "lon": 6.6534392},
    "Maison de beauté kiou<br>2 quai de la parelle": {"lat": 47.9236221, "lon": 6.6591857},
    "L'Aura Zen<br>12 Rue Albert Jacquemin": {"lat": 48.0099307, "lon": 6.7178586},
    "Paren'Thé<br>44 Rue de la Courtine": {"lat": 48.0165063, "lon": 6.5862859}
};

// Fonction d'initialisation de la carte
function initMap() {
    var markers = [];
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 17);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    for (magasin in magasins) {
        var marker = L.marker([magasins[magasin].lat, magasins[magasin].lon]).addTo(macarte);
        marker.bindPopup(magasin);
        markers.push(marker);
    }

    var group = new L.featureGroup(markers);
    macarte.fitBounds(group.getBounds().pad(0.5));
}

window.onload = function(){
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
};