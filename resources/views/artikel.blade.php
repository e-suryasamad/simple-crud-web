@extends('template.admin')

@section('title')
	Artikel
@endsection


@section('judulmenu')
	Master Data Artikel
@endsection

@section('statusAktif')
  class="active"
@endsection

@php

  function viewMessage($msg){
    $pesan = "";

    if($msg==1)
    {
      $pesan = "Proses tambah data berhasil dilakukan!";
    }elseif($msg==2){
      $pesan = "Error! Proses tambah data gagal dilakukan!";
    }elseif($msg==3){
      $pesan = "Proses edit data berhasil dilakukan!";
    }elseif($msg==4){
      $pesan = "Error! Proses edit data gagal dilakukan!";
    }elseif($msg==5){
      $pesan = "Proses hapus data berhasil dilakukan!";
    }elseif($msg==6){
      $pesan = "Error! Proses hapus data gagal dilakukan!";
    }

    $view = "
      <div class=\"alert alert-info alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-info\"></i> Informasi!</h4>
                <strong>".$pesan."</strong>
              </div>

    ";

    return $view;
  }
  
@endphp






@section('maincontent')

  @if($act=="viewTambahArtikel")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Artikel</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" action="{{ asset('admin/artikel/prosesTambahArtikel') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group">
  	                  <label for="nip" class="col-sm-2 control-label">Id Artikel</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="artikel_id" name="artikel_id" placeholder="Id Artikel">
  	                  </div>
  	                </div>
  	                <div class="form-group">
  	                  <label for="artikel_judul" class="col-sm-2 control-label">Judul Artikel</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="artikel_judul" name="artikel_judul" placeholder="Judul Artikel">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="artikel_penulis" class="col-sm-2 control-label">Penulis</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="artikel_penulis" name="artikel_penulis" placeholder="Penulis">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_abstrak" class="col-sm-2 control-label">Abstrak</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" placeholder="Abstrak ..." rows="3" name="artikel_abstrak"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_status" class="col-sm-2 control-label">Status Artikel</label>
                      <div class="col-sm-8">
                        <select disabled="" class="form-control" name="artikel_status">
                          <option value="non_valid">Tidak Valid</option>
                          <option value="valid">Valid</option>
                          <option value="pending">Pending</option>
                          <option selected="unknown" value="unknown">Unknown</option>
                        </select>
                      </div>
                    </div>
  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('admin/artikel') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div> 
  @endif


  @if($act=="viewEditArtikel")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Artikel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('admin/artikel/prosesEditArtikel') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="artikel_id" class="col-sm-2 control-label">Id Artikel</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_id" name="artikel_id" value="{{ $artikel->artikel_id }}">
                        <input type="hidden" class="form-control" id="artikel_id" name="artikel_id" value="{{ $artikel->artikel_id }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_judul" class="col-sm-2 control-label">Judul Artikel</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="artikel_judul" name="artikel_judul" value="{{ $artikel->artikel_judul }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_penulis" class="col-sm-2 control-label">Penulis</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="artikel_penulis" name="artikel_penulis" value="{{ $artikel->artikel_penulis }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_abstrak" class="col-sm-2 control-label">Abstrak</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" rows="3" name="artikel_abstrak" value="{{ $artikel->artikel_abstrak }}">{{ $artikel->artikel_abstrak }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_status" class="col-sm-2 control-label">Status Artikel</label>
                      <div class="col-sm-8">
                        <select disabled="" class="form-control" name="artikel_status">
                          <option selected="{{ $artikel->artikel_status }}" value="{{ $artikel->artikel_status }}">{{ $artikel->artikel_status }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/artikel') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewDetailArtikel")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Artikel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="#" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="artikel_id" class="col-sm-2 control-label">Id Artikel</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_id" name="artikel_id" value="{{ $artikel->artikel_id }}">
                        <input type="hidden" class="form-control" id="artikel_id" name="artikel_id" value="{{ $artikel->artikel_id }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_judul" class="col-sm-2 control-label">Judul Artikel</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_judul" name="artikel_judul" value="{{ $artikel->artikel_judul }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_penulis" class="col-sm-2 control-label">Penulis</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_penulis" name="artikel_penulis" value="{{ $artikel->artikel_penulis }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_abstrak" class="col-sm-2 control-label">Abstrak</label>
                      <div class="col-sm-8">
                        <textarea disabled="" class="form-control" rows="3" name="artikel_abstrak" value="{{ $artikel->artikel_abstrak }}">{{ $artikel->artikel_abstrak }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="artikel_status" class="col-sm-2 control-label">Status Artikel</label>
                      <div class="col-sm-8">
                        <select disabled="" class="form-control" name="artikel_status">
                          <option selected="{{ $artikel->artikel_status }}" value="{{ $artikel->artikel_status }}">{{ $artikel->artikel_status }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/artikel') }}" class="btn btn-default">Back</a>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewArtikel" || $act=="viewDeleteArtikel")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="viewDeleteArtikel")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Artikel <strong> {{ $artikel_del->artikel_id }} </strong> ?
            <a href="{{ asset('/admin/artikel') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/admin/artikel/prosesDeleteArtikel',$artikel_del->artikel_id) }}" class="btn-sm btn-danger">Hapus</a>
        </div>


    @endif



  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Artikel</h3>
                  <a href="{{ asset('admin/artikel/viewTambahArtikel') }}" class="btn btn-info pull-right">Tambah</a>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal">
  	              <div class="box-body">
  	                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Artikel</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($artikel as $a)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $a->artikel_id }}</td>
                      <td>{{ $a->artikel_judul }}</td>
                      <td>{{ $a->artikel_penulis }}</td>
                      <td>
                        <a href="{{ url('admin/artikel/viewDetailArtikel',$a->artikel_id) }}" class="btn-sm btn-primary ">Detail</a> &nbsp;
                        <a href="{{ url('admin/artikel/viewEditArtikel',$a->artikel_id) }}" class="btn-sm btn-warning ">Edit</a> &nbsp;
                        <a href="{{ url('admin/artikel/viewDeleteArtikel',$a->artikel_id) }}" class="btn-sm btn-danger ">Hapus</a>   
                      </td>
                    </tr>

                    @php
                      $i++;
                    @endphp
                  @endforeach
                  
  	              <!-- /.box-body -->
  	             </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Id Artikel</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Opsi</th>
                  </tr>
                  </tfoot>
                </table>
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif

@endsection