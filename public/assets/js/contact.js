$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                name2: "required",

                email: "required",

                subject: "required",

                address: "required"
            },

            messages: {
                name: "Please enter your name",
                name2: "Please enter your name",
                email: "Please enter your email address",
                subject: "Please enter your Subject",
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "/contactForm",
                    data: {fname:$('#name').val(), lname:$('#name2').val(), email:$('#email').val(), subject:$('#subject').val(), note:$('#note').val(), '_token': CSRF_TOKEN},
                    success: function (response) {
                        console.log(response.message)
                        if(response.statuscode==200){
                            $( "#loader").hide();
                            $( "#success").slideDown( "slow" );
                            $('#success').html(response.message)
                            setTimeout(function() {
                            $( "#success").slideUp( "slow" );
                            }, 5000);
                            form.reset();
                        }else{
                            $( "#loader").hide();
                            $( "#error").slideDown( "slow" );
                            $('#error').html(response.message)
                            setTimeout(function() {
                            $( "#error").slideUp( "slow" );
                            }, 5000);
                        }

                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        $('#error').html('something went wrong! please try again')
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 5000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }

})
