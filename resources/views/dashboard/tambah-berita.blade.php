@extends('master-dashboard')
@section('title', 'Tambah Berita')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="">

  </div>

@endsection
@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Form tambah berita</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <form class="form" action="/admin/berita/tambah-berita" method="POST">
              {{ csrf_field() }}
              <div class="form-body">
                <div class="form-group">
                  <label for="title">Judul Artikel</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Masukan judul berita...">
                </div>
                <div class="form-group">
                  <label for="isi">Isi Artikel</label>
                  <textarea name="isi" class="form-control" id="isi" placeholder="Silahkan tulis artikel anda..." rows="8" cols="80"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary round btn-min-width btn-block">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
@section('script')


  <script>

    var token = $('meta[name="_token"]').attr('content');

    $(".menu-navigasi").removeClass("active");
    $("#tambahBerita").addClass("active");

    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&responseType=json&_token=' + token,
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + token
    };

    CKEDITOR.replace('isi', options);

    $(document).ready(function(){

    });

  </script>

  @if(session('OK'))
    <script>
      console.log("ok");
      toastr.success('Berhasil menambahkan berita!', 'Success!');
    </script>
  @endif

@endsection
