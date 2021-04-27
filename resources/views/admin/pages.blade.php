@extends('admin.layout.master')
@section('content')

{{-- breadcrumb --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ml-0 mr-0">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pages</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pages</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="row m-0">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">All Pages</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Meta tag</label>
                            <input type="text" id="meta" class="form-control" placeholder="Meta tag">
                         </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Meta Description</label>
                              <input type="text" id="meta_desc" class="form-control" placeholder="Meta Description">
                            </div>
                        </div>

                    </div>
                    <p>Please select the checkbox to apply the meta tags and Description</p>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="all" value="all">
                            <label for="all" class="custom-control-label">All</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-checkbox mb-2">
                          <input class="custom-control-input" type="checkbox" id="home" value="1">
                          <label for="home" class="custom-control-label">Home</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="about" value="2">
                            <label for="about" class="custom-control-label">About</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="causes" value="3">
                            <label for="causes" class="custom-control-label">Causes</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="events" value="4">
                            <label for="events" class="custom-control-label">Events</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="gallery" value="5">
                            <label for="gallery" class="custom-control-label">Gallery</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="blogs" value="6">
                            <label for="blogs" class="custom-control-label">Blogs</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="contact" value="7">
                            <label for="contact" class="custom-control-label">Contact</label>
                        </div>
                        <hr>
                        <div class="row text-right"><button type="button" class="btn  btn-primary ml-auto pl-4 pr-4" id="save_changes"><i class="fas fa-save"></i> Save &amp; Publish</button></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function(e){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#all').change(function(e){
                if($(this).prop('checked')){
                    $('input[type=checkbox]').each(function () {
                        $(this).attr('checked', true)
                    });
                }else{
                    $('input[type=checkbox]').each(function () {
                        $(this).attr('checked', false)
                    });
                }
            })
            $('#save_changes').click(function(e){
                tag = $('#meta').val()
                desc = $('#meta_desc').val()

                $('input[type=checkbox]').each(function () {
                    if($(this).prop('checked') && $(this).val() != 'all'){
                        id = $(this).val()
                        $.ajax({
                            type: 'POST',
                            url: '/addMetaData',
                            data: {id:id, tag:tag, desc:desc, '_token': CSRF_TOKEN},
                            dataType: 'json',
                            success: function(response){
                                if(response.statuscode == 200){
                                    toastr.success(response.message)
                                }else{
                                    toastr.error(response.message)
                                }

                            },
                            error: function (error) {

                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
