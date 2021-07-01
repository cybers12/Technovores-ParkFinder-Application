
function actionAdmin(action, idAdmin) {
    switch (action) {
        case "delete":
            $.ajax({
                type: 'DELETE',
                url: 'http://' + domain.hostname + ':3000/api/admins/actions/delete/' + idAdmin,
                headers: {'jwToken':localStorage.getItem('jwToken')},
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/admins',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            
                            $('#bodyTables tr').remove();
                            res.forEach(element => {
                                if (element.status == "authorized") {
                                    $('#bodyTables').append(
                                        "<tr role='row'>" +
                                        "<td>" + element.FirstName + "</td>" +
                                        "<td>" + element.LastName + "</td>" +
                                        "<td>" + element.username + "</td>" +
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
                                        "<td>" + element.username + "</td>" +
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
                },
                error: function (error) {
                    console.log(error)
                }
            })
            break;
        case "block":
            $.ajax({
                type: 'POST',
                url: 'http://' + domain.hostname + ':3000/api/admins/actions/block/'+idAdmin,
                headers: {'jwToken':localStorage.getItem('jwToken')},
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/admins',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            console.log("hahahahahha")
                            $('#bodyTables tr').remove();
                            res.forEach(element => {
                                if (element.status == "authorized") {
                                    $('#bodyTables').append(
                                        "<tr role='row'>" +
                                        "<td>" + element.FirstName + "</td>" +
                                        "<td>" + element.LastName + "</td>" +
                                        "<td>" + element.username + "</td>" +
                                        "<td>" + element.Email + "</td>" +
                                        "<td>" + element.status + "</td>" +
                                        "<td> +212 " +element.NumberPhone + "</td>" +
                                        "<td><i class='fas fa-user-slash delete actions' onClick='actionAdmin(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' onClick='actionAdmin(\"block\", "+element.id+" )' data-id='" + element.id + "'></i></td>" +
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
                },
                error: function (error) {
                    console.log(error)
                }
            })
            break;
        case "autorize":
            $.ajax({
                type: 'POST',
                url: 'http://' + domain.hostname + ':3000/api/admins/actions/authorize/' + idAdmin,
                headers: {'jwToken':localStorage.getItem('jwToken')},
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/admins',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            console.log("hahahahahha")
                            $('#bodyTables tr').remove();
                            res.forEach(element => {
                                if (element.status == "authorized") {
                                    $('#bodyTables').append(
                                        "<tr role='row'>" +
                                        "<td>" + element.FirstName + "</td>" +
                                        "<td>" + element.LastName + "</td>" +
                                        "<td>" + element.username + "</td>" +
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
                                        "<td>" + element.username + "</td>" +
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
                },
                error: function (error) {
                    console.log(error)
                }
            })
            break;
    }
}

