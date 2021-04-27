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

    $('#save_cause').click(function(e){
        e.preventDefault()
        formdata = new FormData;
        cont = $('#cause_desc').val()
        title = $('#cause_title').val()
        formdata.append('_token',  CSRF_TOKEN)
        imgstat = 'image'
        if(imgstat == 'image'){
            image = $('#images')[0].files[0]
            formdata.append('image', image)
        }
        if(cont != ''){
            formdata.append('cont', cont)
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
                url: '/addCauses',
                data: formdata,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response){
                    if(response.statuscode == 200){
                        toastr.success('Cause Created successfully!')
                        document.getElementById("cause_form").reset();
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
