
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
    //alert(last_part)
    $.ajax({
        type: 'GET',
        url: '/eventsView',
        dataType: 'json',
        data: {},
        success: function(response){
            $('#event_disp').html('')

            $.each(response, function(index, value){
                var d = new Date(value.event_date);
                var day = d.getDate()
                var mon = d.getMonth()
                $('#event_disp').append(' <div class="col-md-4 col-sm-6 col-12 custom-grid">'+
                '<div class="wpo-event-item">'+
                '    <div class="wpo-event-img">'+
                '        <img src="/storage/uploads/'+value.image_path+'" alt="">'+
                '        <div class="thumb-text">'+
                '            <span>'+day+'</span>'+
                '            <span>'+month[mon]+'</span>'+
                '        </div>'+
                '    </div>'+
                '    <div class="wpo-event-text">'+
                '        <h2>'+value.event_title+'</h2>'+
                '        <ul>'+
                '            <li><i class="fa fa-clock-o" aria-hidden="true"></i>'+value.event_time+'</li>'+
                '            <li><i class="fa fa-calendar"></i>'+value.event_date+'</li>'+
                '        </ul>'+
                '        <p>'+(value.event_desc).substring(0,60)+'...</p>'+
                '        <a href="/events/'+value.event_slug+'">Learn More...</a>'+
                '    </div>'+
                '</div>'+
                '</div>')
            })
        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })

    $.ajax({
        type: 'GET',
        url: '/blogsView',
        dataType: 'json',
        data: {},
        success: function(response){
            $('#blog_disp').html('')
            $.each(response, function(index, value){
                var d = new Date(value.blog_date);
                var day = d.getDate()
                var mon = d.getMonth()
                $('#blog_disp').append(' <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">'+
                '<a href="/blogs/'+value.blog_slug+'" class="wpo-blog-item">'+
                '    <div class="wpo-blog-img">'+
                '        <img src="/storage/uploads/'+value.image_path+'" alt="">'+
                '    </div>'+
                '    <div class="wpo-blog-content">'+
                '        <span>'+month[mon]+' '+day+', '+d.getFullYear()+'</span>'+
                '            <h2>'+value.blog_title+'</h2>'+
                '        </div>'+
                '    </a>'+
                '</div>')
            })
        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })
})
