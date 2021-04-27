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
    changeval= 0;
    $('#images,#videos, .sliders').change(function(e){
        changeval=1
    })
    $('#save_cause').click(function(e){
        e.preventDefault()
        formdata = new FormData;
        cont = $('#cause_desc').val()
        title = $('#cause_title').val()
        formdata.append('_token',  CSRF_TOKEN)
        imgstat = 'image'

        if(changeval == 1){
            if(imgstat == 'image'){
                image = $('#images')[0].files[0]

                formdata.append('image', image)
            }

            if(imgstat != ''){
                formdata.append('imgstat', imgstat)
            }
        }

        if(cont != ''){
            formdata.append('cont', cont)
        }
        if(title != ''){
            formdata.append('title', title)
        }
        var url = $(location).attr('href'),
        parts = url.split("/"),
        id = parts[parts.length-1];
        formdata.append('id',id)
        if(title != ''){
            $.ajax({
                type: 'POST',
                url: '/editCauses',
                data: formdata,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response){
                    if(response.statuscode == 200){
                        toastr.success('Causes Updated successfully!')
                        setInterval(function(){
                            window.location.reload()
                        },1000)
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
