$.ajax({
    type: 'GET',
    url: 'http://' + domain.hostname + ':3000/api/reservations',
    headers: {'jwToken':localStorage.getItem('jwToken')},
    success: function (res) {
        res.forEach(element => {
            console.log(element)
            $('#bodyTables').append(
                                    
                    "<tr role='row'>"+
                        "<td>"+ element.username+"</td>"+
                        "<td>"+element.dateTime_end_reservation +"</td>"+
                        "<td>"+element.dateTime_start_reservation+"</td>"+
                        "<td>"+element.car.matricule+"</td>"+
                        "<td>"+element.place_placeToreservation_id_place.parkings.Name+"</td>"+
                        "<td>"+element.place_placeToreservation_id_place.id+"</td>"+
                    "</tr>"
        )});


    },
    error: function (error) {
        console.log(error)
    }
})