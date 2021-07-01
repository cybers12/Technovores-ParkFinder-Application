
function actionUser(action, idUser) {
    switch (action) {
        case "delete":
            $.ajax({
                type: 'delete',
                url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/delete/' + idUser,
                headers: { 'jwToken': localStorage.getItem('jwToken') },
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/users',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            console.log("hahahahahha")
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
            })
            break;
        case "block":
            $.ajax({
                type: 'post',
                url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/block/' + idUser,
                headers: { 'jwToken': localStorage.getItem('jwToken') },
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/users',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            console.log("hahahahahha")
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
            })
            break;
        case "autorize":
            $.ajax({
                type: 'post',
                url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/autorize/' + idUser,
                headers: { 'jwToken': localStorage.getItem('jwToken') },
                success: function (res) {
                    $.ajax({
                        type: 'GET',
                        url: 'http://' + domain.hostname + ':3000/api/users',
                        headers: { 'jwToken': localStorage.getItem('jwToken') },
                        success: function (res) {
                            console.log("hahahahahha")
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
                                        "<td><i class='fas fa-user-slash delete actions' onClick='actionUser(\"delete\", "+element.id+" )' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' onClick='actionUser(\"block\", "+element.id+" )'  data-id='" + element.id + "'></i></td>" +
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
            })
            break;
    }
}


$(document).ready(function () {

    

    /*$(".delete").click(function () {

        $.ajax({
            type: 'delete',
            url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/delete/' + $(this).data('id'),
            headers: { 'jwToken': localStorage.getItem('jwToken') },
            success: function (res) {
                $.ajax({
                    type: 'GET',
                    url: 'http://' + domain.hostname + ':3000/api/users',
                    success: function (res) {
                        console.log("hahahahahha")
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' data-id='" + element.id + "'></i></td>" +
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-check-square autorize actions' data-id='" + element.id + "'></i></td>" +
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
        })
    })

    $(".block").click(function () {
        $(this).data('id');
        $.ajax({
            type: 'post',
            url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/block/' + $(this).data('id'),
            headers: { 'jwToken': localStorage.getItem('jwToken') },
            success: function (res) {
                $.ajax({
                    type: 'GET',
                    url: 'http://' + domain.hostname + ':3000/api/users',
                    success: function (res) {
                        console.log("hahahahahha")
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' data-id='" + element.id + "'></i></td>" +
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-check-square autorize actions' data-id='" + element.id + "'></i></td>" +
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
        })
    })

    $(".autorize").click(function () {
        $(this).data('id');
        $.ajax({
            type: 'post',
            url: 'http://' + (new URL(window.location.href)).hostname + ':3000/api/actions/autorize/' + $(this).data('id'),
            headers: { 'jwToken': localStorage.getItem('jwToken') },
            success: function (res) {
                $.ajax({
                    type: 'GET',
                    url: 'http://' + domain.hostname + ':3000/api/users',
                    success: function (res) {
                        console.log("hahahahahha")
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-ban block actions' data-id='" + element.id + "'></i></td>" +
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
                                    "<td><i class='fas fa-user-slash delete actions' data-id='" + element.id + "'></i> <i class='fas fa-check-square autorize actions' data-id='" + element.id + "'></i></td>" +
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
        })
    })
    */
})
