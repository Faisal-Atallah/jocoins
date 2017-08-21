$(document).ready(function() {

    $(function(){
        validate();
        $('#amount').keyup(validate); //you can use your multiple id selector instead of the attribute selector that i am using
    });


    $('#exchangeForm').validate({
        rules: {
            amount: {
                digits: true,
                number: true,
                minlength:1,
                required: true
            },
            paying: {

                required: true
            },
            receiving: {
                required: true,

            },        fname: {
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


        },
        highlight: function (element) {
            $(element).closest('form-control').removeClass('success').addClass('error');
        },
          errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: 'http://localhost/PhoenixBit/Exchange/sendData',
                data: $('#exchangeForm').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'ACCEPT') {
                    //    $('#EXContainer').hide('94000');
                        setTimeout(function () {
                            $( "#wrapper" ).html(

                                );
                             $("#step-3").show();
                            //$("#stepsContainer").show('1234');
                        }, 1000);
                    }
                }
            });
            return false;
        }
    });






});



function validate() {
    var inputvalue = $('#amount').filter(function (n) {
        return this.value.length > 0;
    });

    if (inputvalue.length === $('#amount').length) {
        $("#EXbutton").prop("disabled", false);
    } else {
        $("#EXbutton").prop("disabled", true);
    }
}