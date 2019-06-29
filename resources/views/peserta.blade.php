@extends('template.admin')

@section('title')
	Peserta
@endsection


@section('judulmenu')
	Master Data Peserta
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
      $pesan = "Proses Perubahan Status berhasil dilakukan!";
    }elseif($msg==4){
      $pesan = "Error! Proses Perubahan Status gagal dilakukan!";
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

  @if($act=="viewDetailPeserta")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Peserta</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('admin/peserta/prosesKonfirmasiPeserta') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">

                    <div class="form-group">
                      <label for="peserta_id" class="col-sm-2 control-label">Id Peserta</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_id" name="peserta_id" value="{{ $peserta->peserta_id }}">
                        <input type="hidden" class="form-control" id="peserta_id" name="peserta_id" value="{{ $peserta->peserta_id }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_nama" class="col-sm-2 control-label">Nama Peserta</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_nama" name="peserta_nama" value="{{ $peserta->peserta_nama }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_telp" class="col-sm-2 control-label">Telepon</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_telp" name="peserta_telp" value="{{ $peserta->peserta_telp }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_email" name="peserta_email" value="{{ $peserta->peserta_email }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_bank" class="col-sm-2 control-label">Rekening Bank</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_bank" name="peserta_bank" value="{{ $peserta->peserta_bank }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_nama_rek" class="col-sm-2 control-label">Nama Pemilik Rek</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_nama_rek" name="peserta_nama_rek" value="{{ $peserta->peserta_nama_rek }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_bukti" class="col-sm-2 control-label">Bukti</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="peserta_bukti" name="peserta_bukti" value="{{ $peserta->peserta_bukti }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_status" class="col-sm-2 control-label">Status Peserta</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="peserta_status">
                          <option selected="{{ $peserta->peserta_status }}" value="{{ $peserta->peserta_status }}">
                          @php
                          if($peserta->peserta_status=="pending")
                          {
                            echo "Minta Konfirmasi";
                          }
                          else if($peserta->peserta_status=="non_valid")
                          {
                            echo "Tidak Sesuai";
                          }
                          else if($peserta->peserta_status=="valid")
                          {
                            echo "Sudah Sesuai";
                          }
                          else{
                          echo e($peserta->peserta_status);
                          }
                        @endphp</option>
                          <option value="non_valid">Tidak Sesuai</option>
                          <option value="valid">Sudah Sesuai</option>
                          <option value="pending">Minta Konfirmasi</option>
                          <option value="unknown">Unknown</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/peserta') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Konfrimasi</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewPeserta")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal">
  	              <div class="box-body">
  	                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($peserta as $p)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $p->peserta_email }}</td>
                      <td>{{ $p->peserta_nama }}</td>
                      <td>
                        @php
                          if($p->peserta_status=="pending")
                          {
                            echo "Minta Konfirmasi";
                          }
                          else if($p->peserta_status=="non_valid")
                          {
                            echo "Tidak Sesuai";
                          }
                          else if($p->peserta_status=="valid")
                          {
                            echo "Sudah Sesuai";
                          }
                          else{
                          echo e($p->peserta_status);
                          }
                        @endphp
                        </td>
                      <td>
                        <a href="{{ url('admin/peserta/viewDetailPeserta',$p->peserta_id) }}" class="btn-sm btn-primary ">Lihat Detail</a> &nbsp;
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
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
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