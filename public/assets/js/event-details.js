$(document).ready(function(e){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
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

    var url = $(location).attr('href'),
    parts = url.split("/"),
    last_part = parts[parts.length-1];
    //alert(last_part)
    $.ajax({
        type: 'POST',
        url: '/eventsData',
        dataType: 'json',
        data: {id:last_part, '_token':  CSRF_TOKEN},
        success: function(response){
            var d = new Date(response[0].event_date);
            var day = d.getDate()
            var mon = d.getMonth()
            $('#upper_desc').html(response[0].event_desc)
            $('#Schedule').html(response[0].event_sch)
            $('#nudate').html(day)
            $('#mdate').html(month[mon])

        },
        error: function (error) {
            toastr.error('Something went wront! please try again later.')
        }
    })

    $('#commentform').submit(function(e){
        e.preventDefault()
        cname = $('#cname').val()
        cemail = $('#cemail').val()
        cmsg = $('#cnote').val()
        event_id = $('#event_id').html()
        var tdate = new Date();
        var cdate = tdate.toString().substring(0,15)
        if(cname != '' || cemail != '' || cmsg != ''){
            $.ajax({
                type: 'POST',
                url: '/eventsComment',
                dataType: 'json',
                data: {cname:cname, cemail:cemail, cmsg:cmsg, event_id:event_id, cdate:cdate, '_token':  CSRF_TOKEN},
                success: function(response){
                    if(response.statuscode == 200){
                        $('#comment_name').val('')
                        $('#comment_email').val('')
                        $('#comment_msg').val('')
                        $('#comment_err_msg').html(response.message)
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
})
