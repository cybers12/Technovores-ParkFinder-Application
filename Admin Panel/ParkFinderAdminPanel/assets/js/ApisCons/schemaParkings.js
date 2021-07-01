setInterval(() => {
    $.ajax({
        type: 'GET',
        url: 'http://' + domain.hostname + ':3000/api/parkingsSchema?id='+ new URL(window.location.href).searchParams.get("id"),
        headers: { 'jwToken': localStorage.getItem('jwToken') },
        success: function (res) {
            
            
            res.forEach(element => {
                var count = 0
                var id = 1
                $('#row'+id).empty();
                element.place.forEach(place => {
                    count++;
                    if(count == 10){
                        id++
                    }
                    
                    $('#row'+id).append(

                                    "<span class='"+place.state+"'>"+place.id+"</span>"               
    
                    )
                });
                
                
            });
    
        },
        error: function (error) {
            console.log(error)
        }
    })
}, 1000);

setInterval(() => {
    $.get("http://192.168.1.100", function (data) {
        
          if(data.detection == 0){
            $.ajax({
                type: 'GET',
                url: 'http://' + domain.hostname + ':3000/api/iot?id=9/A02&state=inUsed',
                headers: { 'jwToken': localStorage.getItem('jwToken') },
                success: function (res) {
                },
                error: function (error) {
                    console.log(error)
                }
            })
          }
          if (data.detection == 1){
            $.ajax({
                type: 'GET',
                url: 'http://' + domain.hostname + ':3000/api/iot?id=9/A02&state=free',
                headers: { 'jwToken': localStorage.getItem('jwToken') },
                success: function (res) {
                    console.log(res)
                },
                error: function (error) {
                    console.log(error)
                }
            })
          }
        
    });
}, 1000);


