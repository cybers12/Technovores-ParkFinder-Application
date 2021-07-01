
$.ajax({
    type: 'GET',
    url: 'http://' + domain.hostname + ':3000/api/parkingsSchema',
    headers: { 'jwToken': localStorage.getItem('jwToken') },
    success: function (res) {

        
        var geojson = {
            'type': 'FeatureCollection',
            'features': []

        };
        res.forEach(element => {
            
            mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkb21pc2JhaDEwIiwiYSI6ImNrcGI4ZmJnODEwNDAyeW9naW90ZGw2NXUifQ.OjDdCAqfusdzvPpMJ1dHeg';
            var map = new mapboxgl.Map({

                container: 'map',
                style: 'mapbox://styles/abdomisbah10/ckpqyfx9r2eke18ps1ax7l3ty',

                center: [-6.589886, 33.603869],

                zoom: 6
            });

            geojson["features"].push(
                {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [element.coordX, element.coordY]
                    },
                    'properties': {
                        'title': element.Name,
                        'description': element.description,
                        'id': element.id,
                        'link': "Schema.html"
                    }
                },
            )
            

            geojson.features.forEach(function (marker) {
                // create a HTML element for each feature
                var el = document.createElement('div');
                el.className = 'marker';

                // make a marker for each feature and add it to the map

                new mapboxgl.Marker(el)
                    .setLngLat(marker.geometry.coordinates)
                    .setPopup(
                        new mapboxgl.Popup({ offset: 25 }) // add popups
                            .setHTML(
                                '<h5 class="markerElements">' +
                                marker.properties.title +
                                '</h5><p class="markerElements">' +
                                marker.properties.description +
                                '</p>' +
                                '<a href="' + marker.properties.link + '?id=' + marker.properties.id + '" class="linkParking" id="' + marker.properties.id + '">Schema</a>'
                            )
                    )
                    .addTo(map);
            });

        })

    },
    error: function (error) {
        console.log(error)
    }
})



