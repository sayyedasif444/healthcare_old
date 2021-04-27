$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    if ($("#footer_form").length) {
        $("#footer_form").validate({
            rules: {
                subscriber_id: "required",
            },

            messages: {
                subscriber_id: "Please enter your email address",
            },
            submitHandler: function (form) {

                $.ajax({
                    type: "POST",
                    url: "/subscriberForm",
                    data: {emailid:$('#subscriber_id').val(), '_token': CSRF_TOKEN},
                    success: function (response) {
                        console.log(response.message)
                        if(response.statuscode==200){
                            $('#subscriber_text').html(response.message)
                            setTimeout(function() {
                                $( "#subscriber_text").html( "" );
                            }, 5000);
                            form.reset();
                        }else{
                            $('#subscriber_text').html(response.message)
                            setTimeout(function() {
                                 $( "#subscriber_text").html( "" );
                            }, 5000);
                        }
                    },
                    error: function() {
                        $('#subscriber_text').html('something went wrong! please try again')
                        setTimeout(function() {
                            $( "#subscriber_text").html( "" );
                        }, 5000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }
    $.ajax({
        type: 'GET',
        url: '/footerBlog',
        dataType: 'json',
        data: {},
        success: function(response){
            if(response.statuscode == 200){
                $.each(response.data, function(index, value){
                    $('#footer_blogs').append(' <div class="news-wrap">'+
                '    <div class="news-img">'+
                '        <img src="/storage/uploads/'+value.image_path+'" alt="">'+
                '    </div>'+
                '    <div class="news-text">'+
                '        <h3>'+value.blog_title+'</h3>'+
                '        <span>'+value.blog_date+'</span>'+
                '    </div>'+
                '</div>')
                });

            }
        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })

})
