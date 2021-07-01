$(document).ready(function (){

    setInterval(() => {
        $.ajax({
            type: 'get',
            url: 'http://' + domain.hostname + ':3000/api/analytics',
            headers: { 'jwToken': localStorage.getItem('jwToken') },
            success: function (res) {
                $("#latestReservationTable tr").remove();
    
                $("#TotalReservations").text(res.TotalReservations);
                
                for(let i = 0 ; i < res.state.length; i++){

                    
                    if(res.state[i].state == "inUsed"){
                        $("#PlacesInUsed").text(res.state[i]._count.id);
                    }
                    else if(res.state[i].state == "free"){
                        $("#PlacesFree").text(res.state[i]._count.id);
                    }
                    else{
                        $("#PlacesReserved").text(res.state[i]._count.id);
                    }
                }
                $("#TotalTqOfAllUsers").text(res.TotalPointsOfUsers._sum.NbPoints);
                $("#UsersConnected").text(res.countUsersConnected);
                $("#TotalUsers").text(res.TotalUsers);
                
                res.latestReservations.forEach(reservation => {
                    $("#latestReservationTable").append(
                        "<tr>"+
                        "<td class='table-img'>"+reservation.username+"</td>"+
                        "<td>"+reservation.dateTime_start_reservation+"</td>"+
                        "<td>"+reservation.dateTime_end_reservation+"</td>"+
                        "<td>"+reservation.place_placeToreservation_id_place.id_parking+"</td>"+
                        "<td>"+reservation.id_place+"</td>"+
                        "<td>"+reservation.car.matricule+"</td>"+
                    "</tr>"
                    );
                });
    
            }
        })
    }, 1000);
    


})