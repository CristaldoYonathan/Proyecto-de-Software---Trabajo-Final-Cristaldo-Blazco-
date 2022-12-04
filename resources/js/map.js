const latDestino = document.getElementById('latitud').value
const lngDestino = document.getElementById('longitud').value


cargarMapa1();


document.getElementById('btn-calcular').addEventListener('click', cargarMapa2);
document.getElementById('btn-ubicacion').addEventListener('click', cargarMapa1);



// funcion cargar mapa 1
function cargarMapa1() {
    // el mapa 1 desaparece
    document.getElementById('map1').style.display = 'none'
    // el mapa 2 aparece
    document.getElementById('map2').style.display = 'block'

    // iniciar mapa en la posicion de los input latitud y longitud
    var map = L.map('map2').setView([latDestino, lngDestino], 15);
    var titleLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
            '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18
    }).addTo(map);

// Marcador en la posicion de los input latitud y longitud y con el icono de destino
    L.marker([latDestino, lngDestino], {
        icon: L.icon({
            iconUrl: "/img/logos/UBICACION.png",
            iconSize: [60, 60],
            iconAnchor: [30, 60],
            popupAnchor: [0, -40]
        })
    }).addTo(map);
}

function cargarMapa2(){
    // longitud y latitud tomados de los input


    navigator.geolocation.getCurrentPosition(function(position) {
        // el mapa 2 desaparece
        document.getElementById('map2').style.display = 'none'
        // el mapa 1 aparece
        document.getElementById('map1').style.display = 'block'
        console.log(position.coords.latitude);
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;

        var map = L.map('map1').setView([lat, lng], 12);
        var titleLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18
        }).addTo(map);

        L.Routing.control({
            waypoints: [
                L.latLng(lat, lng),
                L.latLng(latDestino, lngDestino)
            ],
            routeWhileDragging: true,
            show: true,
            lineOptions: {
                styles: [{
                    color: '#00B0FF',
                    weight: 10,
                }]
            },
            // cambiar el marker de inicio y fin
            createMarker: function(i, wp, nWps) {
                if (i == 0) {
                    return L.marker(wp.latLng, {
                        draggable: true,
                        icon: L.icon({

                            iconUrl: "/img/logos/INICIO.png",
                            iconSize: [60, 60],
                            iconAnchor: [30, 60],
                            popupAnchor: [0, 0]
                        })
                    });
                } else if (i == nWps - 1) {
                    return L.marker(wp.latLng, {
                        icon: L.icon({
                            iconUrl: "/img/logos/FIN.png",
                            iconSize: [60, 60],
                            iconAnchor: [30, 60],
                            popupAnchor: [0, -40]
                        })
                    });
                }else {
                    return L.marker(wp.latLng, {
                        draggable: true,
                        addWaypoints: false,
                    });
                }
            },

        }).addTo(map);
    });
}
