function getUsersRecords() {
    $.ajax({
        type: 'GET',
        url: 'http://' + domain.hostname + ':3000/api/users',
        headers: {'jwToken':localStorage.getItem('jwToken')},
        success: function (res) {
            $('#bodyTables tr').remove();
            res.forEach(element => {
                if (element.stateAccount == "authorized") {
                    $('#bodyTables').append(
                        "<tr role='row'>" +
                        "<td>" + element.FirstName + "</td>" +
                        "<td>" + element.LastName + "</td>" +
                        "<td>" + element.username + "</td>" +
                        "<td>" + element.Email + "</td>" +
                        "<td>" + element.stateAccount + "</td>" +
                        "<td>" + element.typePack + "</td>" +
                        "<td><i class='fas fa-user-slash delete actions' onClick='actionUser(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' onClick='actionUser(\"block\", "+element.id+" )' data-id='" + element.id + "'></i></td>" +
                        "</tr>"
                    )
                }
                else {
                    $('#bodyTables').append(
                        "<tr role='row'>" +
                        "<td>" + element.FirstName + "</td>" +
                        "<td>" + element.LastName + "</td>" +
                        "<td>" + element.username + "</td>" +
                        "<td>" + element.Email + "</td>" +
                        "<td>" + element.stateAccount + "</td>" +
                        "<td>" + element.typePack + "</td>" +
                        "<td><i class='fas fa-user-slash delete actions' onClick='actionUser(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-check-square autorize actions' onClick='actionUser(\"autorize\", "+element.id+" )' data-id='" + element.id + "'></i></td>" +
                        "</tr>"
                    )
                }
            });


        },
        error: function (error) {
            console.log(error)
        }
    })
}
getUsersRecords();




