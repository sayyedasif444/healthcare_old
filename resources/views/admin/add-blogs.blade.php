@extends('admin.layout.master')
@section('content')

{{-- breadcrumb --}}
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 ml-0 mr-0">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Blogs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blogs</a></li>
            <li class="breadcrumb-item active">Add Blogs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="row m-0">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" id="blog_form">
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Blog Title</label>
                              <input type="text" class="form-control" placeholder="Enter Title..." id="blog_title">
                            </div>
                          </div>

                        </div>

                        <hr>
                        <div class="row">
                            <div class="form-group clearfix ml-2">
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="image" value="image" name="r1" checked="">
                                  <label for="image">Image
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline ml-2">
                                  <input type="radio" id="slider" value="slider" name="r1">
                                  <label for="slider">Slider
                                  </label>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="img" >
                            <div class="col-lg-4" >
                                <div class="form-group">
                                    <label>Single Image</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="images" >
                                      <label class="custom-file-label" for="images">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row" id="slid" style="display: none">
                            <div class="col-lg-4" >
                                <div class="form-group">
                                    <label>Select images</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input sliders" id="sliders">
                                      <label class="custom-file-label" for="sliders">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" id="add_more_cont">
                                <button type="button" class="btn btn-info" id="add_more"><i class="fas fa-plus"></i> Add More</button>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="textarea" id="blog_desc" placeholder="Place some text here" ></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Blog Meta tag</label>
                                <input type="text" id="blog_meta" class="form-control" placeholder="Meta tag">
                             </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                  <label>Blog Meta Description</label>
                                  <input type="text" id="blog_meta_desc" class="form-control" placeholder="Meta Description">
                                </div>
                            </div>
                        </div>

                        <div class="row text-right"><button type="button" class="btn  btn-primary ml-auto pl-4 pr-4" id="save_blog"><i class="fas fa-save"></i> Save & Publish</button></div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{asset('admin/customFiles/add-blogs.js')}}"></script>
@endsection
