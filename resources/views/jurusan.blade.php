@extends('template.admin')

@section('title')
	Jurusan
@endsection


@section('judulmenu')
	Master Data Jurusan
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

  @if($act=="ViewTambahJurusan")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Jurusan</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" action="{{ asset('jrn/prosestambahjurusan') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group">
  	                  <label for="kodeJurusan" class="col-sm-2 control-label">Kode Jurusan</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="kodeJurusan" name="kodeJurusan" placeholder="Kode Jurusan">
  	                  </div>
  	                </div>
  	                <div class="form-group">
  	                  <label for="namaJurusan" class="col-sm-2 control-label">Nama Jurusan</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="namaJurusan" name="namaJurusan" placeholder="Nama Jurusan">
  	                  </div>
  	                </div>
                     
                   
  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('/jrn') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif


  @if($act=="ViewEditJurusan")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Jurusan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('jrn/proseseditjurusan') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="kodeJurusan" class="col-sm-2 control-label">Kode Jurusan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kodeJurusan" name="kodeJurusan" value="{{ $jrn->kodeJurusan }}">
                        <input type="hidden" class="form-control" id="id_Jurusan" name="id_Jurusan" value="{{ $jrn->id_Jurusan }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="namaJurusan" class="col-sm-2 control-label">Nama Jurusan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="namaJurusan" name="namaJurusan" value="{{ $jrn->namaJurusan }}">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/jrn') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewJurusan" || $act=="ViewDeleteJurusan")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="ViewDeleteJurusan")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Jurusan <strong> {{ $jrn_del->namaJurusan }} </strong> ?
            <a href="{{ asset('/jrn') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/jrn/prosesdeletejurusan',$jrn_del->id_Jurusan) }}" class="btn-sm btn-danger">Hapus</a>
        </div>


    @endif



  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Jurusan</h3>
                  <a href="{{ asset('jrn/viewtambahjurusan') }}" class="btn btn-info pull-right">Tambah</a>
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
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($jrn as $m)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $m->kodeJurusan }}</td>
                      <td>{{ $m->namaJurusan }}</td>
                      <td>
                        <a href="{{ url('jrn/vieweditjurusan',$m->id_Jurusan) }}" class="btn-sm btn-warning ">Edit</a> &nbsp;
                        <a href="{{ url('jrn/viewdeletejurusan',$m->id_Jurusan) }}" class="btn-sm btn-danger ">Hapus</a>   
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
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
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