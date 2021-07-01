
$.ajax({
    type: 'GET',
    url: 'http://' + domain.hostname + ':3000/api/profile',
    headers: { 'jwToken': localStorage.getItem('jwToken') },
    success: function (res) {

        res.forEach(element => {
            console.log(element.photo)
            $('#image').attr('src', element.photo)
            $('#image1').attr('src', element.photo)
            $('#image2').attr('src', element.photo)
            $('#name').text(element.FirstName + ' ' + element.LastName);
            $('#role').text(element.role);
            if (element.role == "superAdmin") {
                
                $('#SideMenu').append(
                    "<li>"+
                        "<a href='' onClick='return false;' class='menu-toggle'>"+
                            "<i class='fas fa-tachometer-alt'></i>"+
                            "<span>Admins</span>"+
                        "</a>"+
                        "<ul class='ml-menu'>"+
                            "<li class='active'>"+
                                "<a href='../AdminsPage/index.html'>List admins</a>"+
                                "<a href='../addAdminPage/index.html'>Add admins</a>"+
                            "</li>"+
                        "</ul>"+
                    "</li>"

                        

                )
                $('#ParkingsOptions').append(
                    
                        "<li class='active'>"+
                            "<a href='../addParkingPage/index.html'>Add Parking</a>"+
                        "</li>"
                
            )


            }
        })
    },
    error: function (error) {
        console.log(error)
    }


})