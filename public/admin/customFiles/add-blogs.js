$(document).ready(function(e){
    bsCustomFileInput.init();

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).on("change", '.sliders', function(e){
        var imgname = this.files[0]['name'];
        $(this).next('label').html(imgname)
    })
    $('.textarea').summernote({
        toolbar: [

          ['style', ['style','bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['table', ['table']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['fullscreen'],
          ['codeview']
        ]
      });

    $('input[name="r1"]').click(function(e){
        var val = $(this).val()
        if(val=='slider'){
            $('#vid').hide()
            $('#img').hide()
            $('#slid').show()
        }
        if(val=='video'){
            $('#vid').show()
            $('#img').hide()
            $('#slid').hide()
        }
        if(val=='image'){
            $('#vid').hide()
            $('#img').show()
            $('#slid').hide()
        }
    })
    $('#add_more').click(function(e){
        e.preventDefault()
        $('#add_more_cont').before('<div class="col-lg-4" >'+
        '<div class="form-group">'+
        '    <label>Select images</label>'+
        '    <div class="custom-file">'+
        '      <input type="file" class="custom-file-input sliders" >'+
        '      <label class="custom-file-label" for="sliders">Choose file</label>'+
        '    </div>'+
        '</div>'+
        '</div>')
    })

    $('#save_blog').click(function(e){
        e.preventDefault()
        formdata = new FormData;
        cont = $('#blog_desc').val()
        tag = $('#blog_meta').val()
        mdesc = $('#blog_meta_desc').val()
        title = $('#blog_title').val()
        formdata.append('_token',  CSRF_TOKEN)
        imgstat = $('input[name = "r1"]:checked').val()
        edate = $('#blog_date').val()
        etime = $('#blog_time').val()
        video = ''
        if(imgstat == 'video'){
            video = $('#videos').val()
            formdata.append('video', video)
        }
        if(imgstat == 'image'){
            image = $('#images')[0].files[0]
            formdata.append('image', image)
        }
        if(imgstat == 'slider'){
            iv = 0;
            $('#slid .sliders').each(function(index){
                formdata.append('file'+iv, this.files[0])
                iv++;
            })
            formdata.append('count', iv)
        }
        if(edate != ''){
            formdata.append('edate', edate)
        }
        if(etime != ''){
            formdata.append('etime', etime)
        }
        if(cont != ''){
            formdata.append('cont', cont)
        }
        if(tag != ''){
            formdata.append('tag', tag)
        }
        if(mdesc != ''){
            formdata.append('mdesc', mdesc)
        }
        if(title != ''){
            formdata.append('title', title)
        }
        if(imgstat != ''){
            formdata.append('imgstat', imgstat)
        }
        if(title != ''){
            $.ajax({
                type: 'POST',
                url: '/addBlogs',
                data: formdata,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response){
                    if(response.statuscode == 200){
                        toastr.success('blog Created successfully!')
                        document.getElementById("blog_form").reset();
                        $('.textarea').summernote('reset')
                        $('.textarea2').summernote('reset')

                    }
                },
                error: function (error) {
                    toastr.error('Something went wront! please try again later.')
                }
            })
        }else{
            toastr.error('Please fillup the form details')
        }

    })
})
