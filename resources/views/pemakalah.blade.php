@extends('template.admin')

@section('title')
	Pemakalah
@endsection


@section('judulmenu')
	Master Data Pemakalah
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

  @if($act=="viewDetailPemakalah")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Pemakalah</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" action="{{ asset('admin/pemakalah/prosesKonfirmasiPemakalah') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">

                    <div class="form-group">
                      <label for="pemakalah_id" class="col-sm-2 control-label">Id Pemakalah</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_id" name="pemakalah_id" value="{{ $pemakalah->pemakalah_id }}">
                        <input type="hidden" class="form-control" id="pemakalah_id" name="pemakalah_id" value="{{ $pemakalah->pemakalah_id }}">
                        <input type="hidden" class="form-control" id="artikel_id" name="artikel_id" value="{{ $pemakalah->artikel_id }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_nama" class="col-sm-2 control-label">Nama Pemakalah</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_nama" name="pemakalah_nama" value="{{ $pemakalah->pemakalah_nama }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_telp" class="col-sm-2 control-label">Telepon</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_telp" name="pemakalah_telp" value="{{ $pemakalah->pemakalah_telp }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_email" name="pemakalah_email" value="{{ $pemakalah->pemakalah_email }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_bank" class="col-sm-2 control-label">Rekening Bank</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_bank" name="pemakalah_bank" value="{{ $pemakalah->pemakalah_bank }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_nama_rek" class="col-sm-2 control-label">Nama Pemilik Rek</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="pemakalah_nama_rek" name="pemakalah_nama_rek" value="{{ $pemakalah->pemakalah_nama_rek }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pemakalah_bukti" class="col-sm-2 control-label">Bukti</label>
                      <div class="col-sm-8">
                        <input disabled="" type="hidden" class="form-control" id="pemakalah_bukti" name="pemakalah_bukti" value="{{ $pemakalah->pemakalah_bukti }}">
                         <!-- Trigger the Modal -->

                       
                          <img id="myImg" src="{{ asset ($pemakalah->pemakalah_bukti) }}" alt="Bukti.jpg" style="width:100%;max-width:300px">
                          
                         
                         
                          <!-- The Modal -->
                          <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                          </div> 
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="artikel_judul" class="col-sm-2 control-label">Judul Artikel</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_judul" name="artikel_judul" value="{{ $pemakalah->artikel_judul }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="artikel_penulis" class="col-sm-2 control-label">Penulis</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="artikel_penulis" name="artikel_penulis" value="{{ $pemakalah->artikel_penulis }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="artikel_status" class="col-sm-2 control-label">Status pemakalah</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="artikel_status">
                          <option selected="{{ $pemakalah->artikel_status }}" value="{{ $pemakalah->artikel_status }}">
                          @php
                          if($pemakalah->artikel_status=="pending")
                          {
                            echo "Minta Konfirmasi";
                          }
                          else if($pemakalah->artikel_status=="non_valid")
                          {
                            echo "Tidak Sesuai";
                          }
                          else if($pemakalah->artikel_status=="valid")
                          {
                            echo "Sudah Sesuai";
                          }
                          else{
                          echo e($pemakalah->artikel_status);
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
                    <a href="{{ asset('/admin/pemakalah') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Konfrimasi</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewPemakalah")

  
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
                    <th>Tanggal</th>
                    <th>Id pemakalah</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($pemakalah as $p)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $p->pemakalah_tgl }}</td>
                      <td>{{ $p->pemakalah_id }}</td>
                      <td>{{ $p->artikel_judul }}</td>
                      <td>
                        @php
                          if($p->artikel_status=="pending")
                          {
                            echo "Minta Konfirmasi";
                          }
                          else if($p->artikel_status=="non_valid")
                          {
                            echo "Tidak Sesuai";
                          }
                          else if($p->artikel_status=="valid")
                          {
                            echo "Sudah Sesuai";
                          }
                          else{
                          echo e($p->artikel_status);
                          }
                        @endphp
                        </td>
                      <td>
                        <a href="{{ url('admin/pemakalah/viewDetailPemakalah',$p->pemakalah_id) }}" class="btn-sm btn-primary ">Lihat Detail</a> &nbsp;
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
                    <th>Tanggal</th>
                    <th>Id pemakalah</th>
                    <th>Judul</th>
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