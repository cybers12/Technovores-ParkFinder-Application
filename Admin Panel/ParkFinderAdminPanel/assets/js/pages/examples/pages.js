
(function ($) {
    "use strict";
    const domain = (new URL(window.location.href))

    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function (e) {
        e.preventDefault();
        // get all input data of form
        var data = $(this).serializeArray().reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {})
        data["urlOfRequest"] = localStorage.getItem('urlOfRequest');


        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        // Auth API Consommation
        if ($(this)[0].id == 'formAuth') {
            $.ajax({
                type: 'POST',
                data,
                url: 'http://' + domain.hostname + ':3000/api/oauth2',
                success: function (res) {

                    if (res == "email doesn't exist" || res == 'password is invalid') {

                        $("#errors").css('visibility', 'visible');
                    }

                    else {
                        localStorage.setItem('jwToken', res.jwToken);
                        console.log(res)
                        if (res.redirectTo != "")
                            window.location.href = res.redirectTo;
                        else
                            window.location.href = "http://" + domain.hostname + "/ParkFinderAdminPanel/pages/Dashboard"

                    }



                },
                error: function (error) {
                    console.log(error)
                }
            })
        }
        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {

        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
        $(".erroe_dis").remove();
        $(".alert-validate").append('<i class="material-icons erroe_dis">error</i>');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
        $(".erroe_dis").remove();
    }

    /*==================================================================
    [ Show pass ]*/
    /*var showPass = 0;
    $('.btn-show-pass').on('click', function () {
        if (showPass == 0) {
            $(this).next('input').attr('type', 'text');
            $(this).addClass('active');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type', 'password');
            $(this).removeClass('active');
            showPass = 0;
        }

    });*/


})(jQuery);