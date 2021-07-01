function getAdminsRecords() {
    $.ajax({
        type: 'GET',
        url: 'http://' + domain.hostname + ':3000/api/admins',
        headers: {'jwToken':localStorage.getItem('jwToken')},
        success: function (res) {
            $('#bodyTables tr').remove();
            console.log(res)
            res.forEach(element => {
                if (element.status == "authorized") {
                    $('#bodyTables').append(
                        "<tr role='row'>" +
                        "<td>" + element.FirstName + "</td>" +
                        "<td>" + element.LastName + "</td>" +
                        "<td>" + element.role + "</td>" +
                        "<td>" + element.Email + "</td>" +
                        "<td>" + element.status + "</td>" +
                        "<td> +212 " + element.NumberPhone + "</td>" +
                        "<td><i class='fas fa-user-slash delete actions' onClick='actionAdmin(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' onClick='actionAdmin(\"block\", "+element.id+" )' data-id='" + element.id + "'></i></td>" +
                        "</tr>"
                    )
                }
                else {
                    $('#bodyTables').append(
                        "<tr role='row'>" +
                        "<td>" + element.FirstName + "</td>" +
                        "<td>" + element.LastName + "</td>" +
                        "<td>" + element.role + "</td>" +
                        "<td>" + element.Email + "</td>" +
                        "<td>" + element.status + "</td>" +
                        "<td> +212 " + element.NumberPhone + "</td>" +
                        "<td><i class='fas fa-user-slash delete actions' onClick='actionAdmin(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-check-square autorize actions' onClick='actionAdmin(\"autorize\", "+element.id+" )' data-id='" + element.id + "'></i></td>" +
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
getAdminsRecords();




