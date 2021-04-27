$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var url = $(location).attr('href'),
    parts = url.split("/"),
    last_part = parts[parts.length-1];
    //alert(last_part)
    $.ajax({
        type: 'POST',
        url: '/blogsData',
        dataType: 'json',
        data: {id:last_part, '_token':  CSRF_TOKEN},
        success: function(response){
            $('#blog_det').html(response[0].blog_desc)
        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })

    $('#commentform').submit(function(e){
        e.preventDefault()
        cname = $('#comment_name').val()
        cemail = $('#comment_email').val()
        cmsg = $('#comment_msg').val()
        blog_id = $('#blog_id').html()
        var tdate = new Date();
        var cdate = tdate.toString().substring(0,15)
        if(cname != '' || cemail != '' || cmsg != ''){
            $.ajax({
                type: 'POST',
                url: '/blogsComment',
                dataType: 'json',
                data: {cname:cname, cemail:cemail, cmsg:cmsg, blog_id:blog_id, cdate:cdate, '_token':  CSRF_TOKEN},
                success: function(response){
                    if(response.statuscode == 200){
                        $('#comment_err_msg').html(response.message)
                        $('#comments_section').append('<li class="comment even thread-even depth-1" id="comment-1">'+
                                    '    <div id="div-comment-1">'+
                                    '        <div class="comment-theme">'+
                                    '            <div class="comment-image"><img src="/assets/images/blog-details/comments-author/img-1.jpg" alt></div>'+
                                    '        </div>'+
                                    '        <div class="comment-main-area">'+
                                    '            <div class="comment-wrapper">'+
                                    '                <div class="comments-meta">'+
                                    '                    <h4>'+cname+'<span class="comments-date">'+cdate+'</span></h4>'+
                                    '                </div>'+
                                    '                <div class="comment-area">'+
                                    '                    <p>'+cmsg+'</p>'+
                                    '                </div>'+
                                    '            </div>'+
                                    '        </div>'+
                                    '    </div>'+
                                    '</li>')
                                    $('#comment_name').val('')
                                    $('#comment_email').val('')
                                    $('#comment_msg').val('')

                    }
                    else{
                        $('#comment_err_msg').html(response.message)
                    }
                },
                error: function (error) {
                    toastr.error('Something went wront! please try again later.')
                }
            })
        }

    })

    $('#likes_count').click(function(e){
        e.preventDefault()
        val = $(this).children('span').html()
        blog_id = $('#blog_id').html()

        $(this).children('span').html(parseInt(val) + 1)
        $.ajax({
            type: 'POST',
            url: '/blogLikes',
            dataType: 'json',
            data: {val: parseInt(val) + 1, id:blog_id, '_token':  CSRF_TOKEN},
            success: function(response){
                console.log('success')
            },
            error: function (error) {
                alert('something went wrong!')
            }
        })
    })
})
