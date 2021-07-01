$('#FormAddParkings').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serializeArray().reduce(function (obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {})


    $.ajax({
        type: 'post',
        url: 'http://' + domain.hostname + ':3000/api/addParking',
        data,
        headers: { 'jwToken': localStorage.getItem('jwToken') },
        success: function (res,textStatus,jqXHR) {
            
            if(jqXHR.status == 200){
                $('#ActionReponse').text(res.res)
                $('#ActionReponse').css({ "color": "green"})
            }
            else if(jqXHR.status == 403){
                $('#ActionReponse').text(res.res)
                $('#ActionReponse').css({ "color": "red"})
            }
            else{
                $('#ActionReponse').text("Something went wrong Try Again!")
                $('#ActionReponse').css({ "color": "red"})
            }

        }
    })

})