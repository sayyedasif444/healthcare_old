$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var url = $(location).attr('href'),
    parts = url.split("/"),
    last_part = parts[parts.length-1];
    var month = new Array();
    month[0] =  "Jan";
    month[1] =  "Feb";
    month[2] =  "Mar";
    month[3] =  "Apr";
    month[4] =  "May";
    month[5] =  "Jun";
    month[6] =  "Jul";
    month[7] =  "Aug";
    month[8] =  "Sep";
    month[9] =  "Oct";
    month[10] = "Nov";
    month[11] = "Dec";

    $.ajax({
        type: 'GET',
        url: '/blogsPageView',
        dataType: 'json',
        data: {},
        success: function(response){
            $('#blog_disp').html('')
            $.each(response.data, function(index, value){
                var d = new Date(value.blog_date);
                var day = d.getDate()
                var mon = d.getMonth()
                var desc = (value.blog_desc).substring(0,200) + '... '
                $('#blog_disp').append(' <div class="post format-standard-image">'+
            '    <div class="entry-media">'+
            '        <img src="/storage/uploads/'+value.image_path+'" alt>'+
            '    </div>'+
            '    <ul class="entry-meta">'+
            '        <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>'+
            '        <li><a href="#"><i class="ti-calendar"></i> '+month[mon]+' '+day+', '+d.getFullYear()+'</a></li>'+
            '        <li><a href="#"><i class="ti-heart"></i> 35</a></li>'+
            '    </ul>'+
            '    <h3><a href="/blogs/'+value.blog_slug+'">'+value.blog_title+'</a></h3>'+
                desc +
            '    <a href="/blogs/'+value.blog_slug+'" class="read-more">Read More...</a>'+
            '</div>')
            })
        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })
})
