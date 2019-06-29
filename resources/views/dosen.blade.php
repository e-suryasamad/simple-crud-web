@extends('template.admin')

@section('title')
	Dosen
@endsection


@section('judulmenu')
	Master Data Dosen
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

  @if($act=="ViewTambahDosen")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Dosen</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" action="{{ asset('dosen/prosestambahdosen') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group">
  	                  <label for="nip" class="col-sm-2 control-label">NIP</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="nip" name="nip" placeholder="nip">
  	                  </div>
  	                </div>
  	                <div class="form-group">
  	                  <label for="nama" class="col-sm-2 control-label">Nama</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
  	                  </div>
  	                </div>
                     <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="kodeJurusan">
                        @foreach ($jrn as $j)
                          <option value="{{ $j->kodeJurusan }}">{{ $j->namaJurusan }}</option>

                        @endforeach
                        </select>
                      </div>
                    </div>
  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('/dosen') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif


  @if($act=="ViewEditDosen")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Dosen</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('dosen/proseseditdosen') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nip" class="col-sm-2 control-label">NIP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $dosen->id }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dosen->alamat }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="kodeJurusan">
                        @foreach ($jrn as $j)
                          <option selected="{{ $dosen->namaJurusan }}" value="{{ $j->kodeJurusan }}">{{ $j->namaJurusan }}</option>

                        @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/dosen') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewDosen" || $act=="ViewDeleteDosen")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="ViewDeleteDosen")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Dosen <strong> {{ $dosen_del->nama }} </strong> ?
            <a href="{{ asset('/dosen') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/dosen/prosesdeletedosen',$dosen_del->id) }}" class="btn-sm btn-danger">Hapus</a>
        </div>


    @endif



  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Dosen</h3>
                  <a href="{{ asset('dosen/viewtambahdosen') }}" class="btn btn-info pull-right">Tambah</a>
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
                    <th>NIP</th>
                    <th>Dosen</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($dosen as $m)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $m->nip }}</td>
                      <td>{{ $m->nama }}</td>
                      <td>{{ $m->alamat }}</td>
                      <td>{{ $m->namaJurusan }}</td>
                      <td>
                        <a href="{{ url('dosen/vieweditdosen',$m->id) }}" class="btn-sm btn-warning ">Edit</a> &nbsp;
                        <a href="{{ url('dosen/viewdeletedosen',$m->id) }}" class="btn-sm btn-danger ">Hapus</a>   
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
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
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