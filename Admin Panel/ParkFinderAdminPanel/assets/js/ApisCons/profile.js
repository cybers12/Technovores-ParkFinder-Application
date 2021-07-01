
$.ajax({
    type: 'GET',
    url: 'http://' + domain.hostname + ':3000/api/profile',
    headers: { 'jwToken': localStorage.getItem('jwToken') },
    success: function (res) {
        console.log(res)
        res.forEach(element => {
            $('#FullName').text(element.FirstName + ' ' + element.LastName);
            $('#FullName2').text(element.FirstName + ' ' + element.LastName);
            $('#NumberPhone').text("+212 " + element.NumberPhone);
            $('#NumberPhone2').text("+212 " + element.NumberPhone);
            $('#email').text(element.Email);
            $('#FullName').text(element.FirstName + ' ' + element.LastName);
            $('#Role').text(element.role);
            $("#Email").val(element.Email);
            $("#address").val(element.address);
            $('#Role').text(element.role);
            $('#City').val(element.City);
            $('textarea#address').val(element.address);
            $('#Country').val(element.Country);
            

        })
    },
    error: function (error) {
        console.log(error)
    }
})



$('#FormChangePassword').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serializeArray().reduce(function (obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {})


    $.ajax({
        type: 'post',
        url: 'http://' + domain.hostname + ':3000/api/changePassword',
        data,
        headers: { 'jwToken': localStorage.getItem('jwToken') },
        success: function (res) {

            $('#reponsePassword').text(res.res);
            if (res.res == "password Changed successfully") {
                $('#reponsePassword').css({ 'visibility': 'visible', "color": "green" });
            }
            else {
                $('#reponsePassword').css({ 'visibility': 'visible', "color": "red" });
            }

        }
    })

})



$('#FormInfosAdmin').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serializeArray().reduce(function (obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {})


    $.ajax({
        type: 'post',
        url: 'http://' + domain.hostname + ':3000/api/ModifyAccount',
        data,
        headers: { 'jwToken': localStorage.getItem('jwToken') },
        success: function (res) {

            $('#reponseModification').text(res.res);
            $('#reponseModification').css({ 'visibility': 'visible', "color": "green" });

        }
    })

})