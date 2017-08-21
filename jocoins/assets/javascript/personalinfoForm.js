$(document).ready(function() {
    $('#personalinfoForm').validate({
        rules: {
            fname: {
                minlength: 3,
                maxlength:10,
                required: true
            },
            lname:{
                minlength:3,
                maxlength:10,
                required:true
            }

            ,
            email:{
                required:true,
                email: true,

            }

            ,
            phone:{
                minlength:9,
                maxlength:15,
                digits: true,
                number: true

            }
            ,
            tmessage:{
                minlength:3,
                maxlength:50


            }
            ,
            whatsapp:{
                minlength:3,
                maxlength:50


            }

        } ,highlight: function(element) {
            $(element).closest('form-control').removeClass('success').addClass('error');
        },

        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
        ,
        submitHandler: function( form ) {

            $.ajax({
                url : 'http://localhost/PhoenixBit/PersonalInfo/send',
                data : $('#personalinfoForm').serialize(),
                type: "POST",
                success: function (data) {
                    if (data === 'Yes') {

                        alert("hello");

                        setTimeout(function () {

                        }, 1000);
                    }
                    else if (data === 'No') {

                        $('#message').html('The email is already exists in our database,please use a different one' )

                    }
                }
            })
            return false;
        }

    });




});

