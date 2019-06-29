@extends('template.pengunjung')

@section('title')
	Senapati - Artikel
@endsection

@section('statusAktif')
  class="active"
@endsection

@php

        function viewMessage($msg){
          $pesan = "";

          if($msg==1)
          {
            $pesan = "Proses Konfirmasi Artikel berhasil dilakukan!";
          }elseif($msg==2){
            $pesan = "Error! Proses Konfirmasi Artikel gagal dilakukan!";
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

  @if($act=="viewArtikel" || $act=="viewHasilCari" || $act=="notFound")
  	<section id="features" class="features">
      <div class="container">

        <div class="row">
        
          <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h2>Artikel Senapati 2018</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <!-- Kotak Pencarian  -->
          <div class="col-md-12 wow fadeInLeft" data-wow-duration="500ms">
            <form class="form-horizontal" action="{{ asset('anggota/artikel/cari') }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                  <div class="col-sm-10">
                    <input class="form-control" id="artikel_id" name="artikel_id" type="text" placeholder="Cari Artikel Berdasarkan Id">
                  </div>
                  <button class="col-sm-2 btn btn-success pull-right" type="submit">Cari</button>
                </div>
            </form>   
          </div>
          <!-- End Kotak Pencarian -->
          @if (isset($msg))
          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              <?php  echo viewMessage($msg); ?>
            </div>
          </div>
          @endif

          @if($act=="viewArtikel")
            <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              <div class="box box-success">
                <div class="box-header with-border">
                  
                </div>
                <div class="box-body">
                  <div class="col-md-3"></div>

                  <div class="col-md-3">
                      <img class="img-responsive img-circle" height="300" width="300" src="{{ asset('user/img/cari.gif') }}">
                  </div>
                  <div class="col-md-3">
                      </br>
                      </br>
                      <h2 class="headline text-green"> Pencarian.. </h2><h3>Silahkan Masukan ID Artikel anda pada Kolom diatas!</h3>
                  </div>

                  <div class="col-md-3"></div>
                </div>
            
              </div>
            </div>
          </div>

          @endif


          @if($act=="viewHasilCari")
          <!-- Hasil Pencarian -->
          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Pencarian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ url('anggota/artikel/konfirmasi',$hasil->artikel_id) }}" method="get">
              {!! csrf_field() !!}
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_id">Id Artikel</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_id" type="text" placeholder="Id Artikel" value="{{ $hasil->artikel_id }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_judul">Judul Artikel</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_judul" name="artikel_judul" type="text" placeholder="Judul Artikel" value="{{ $hasil->artikel_judul }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_status">Status Artikel</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_status" name="artikel_status" type="text" placeholder="Status Artikel" 
                    
                    @php
                    if($hasil->artikel_status=="pending")
                      {
                        echo "value='Menunggu Konfirmasi Dari Admin'";
                      }
                    else if($hasil->artikel_status=="non_valid")
                      {
                        echo "value='Konfirmasi Salah'";
                      }
                    else if($hasil->artikel_status=="valid")
                      {
                        echo "value='Sudah Terverifikasi'";
                      }
                    else if($hasil->artikel_status=="unknown")
                      {
                        echo "value='Silahkan Konfirmasi Pembayaran Artikel Anda'";
                      }
                    @endphp
                    >
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-success pull-right" 
                @php 
                  if($hasil->artikel_status!="unknown")
                    { 
                      echo "disabled=''";
                    }
                @endphp 
                type="submit">Konfirmasi Pembayaran</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
          </div>
          <!-- end Hasil Pencarian -->
            @endif


            @if($act=="notFound")
          <!-- Hasil Pencarian -->
          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Hasil Pencarian</h3>
                </div>
                <div class="box-body">
                  <div class="col-md-3"></div>

                  <div class="col-md-3">
                      <img class="img-responsive img-circle" height="300" width="300" src="{{ asset('user/img/notfound.gif') }}">
                  </div>
                  <div class="col-md-3">
                      </br>
                      </br>
                      <h2 class="headline text-red"> OPS.. </h2><h3>Hasil Pencarian tidak ditemukan!</h3>
                  </div>

                  <div class="col-md-3"></div>
                </div>
            
              </div>
            </div>
          </div>
          <!-- end Hasil Pencarian -->
            @endif
          @endif
            
        </div>
      </div>
    </section>


    @if($act=="viewKonfirmasi")
      <section id="features" class="features">
      <div class="container">
        <div class="row">
        
          <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h2>Konfirmasi Pembayaran Artikel</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Konfirmasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('anggota/artikel/prosesKonfirmasi') }}" method="post">
              {!! csrf_field() !!}
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_id">Id Artikel</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_id" type="text" placeholder="Id Artikel" value="{{ $artikel->artikel_id }}">
                    <input type="hidden" class="form-control" id="artikel_id" name="artikel_id" value="{{ $artikel->artikel_id }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_judul">Judul Artikel</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_judul" name="artikel_judul" type="text" placeholder="Judul Artikel" value="{{ $artikel->artikel_judul }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="artikel_status">Penulis</label>

                  <div class="col-sm-10">
                    <input disabled="" class="form-control" id="artikel_penulis" name="artikel_penulis" type="text" placeholder="Status Artikel" value="{{ $artikel->artikel_penulis }}">
                    <input type="hidden" class="form-control" id="artikel_penulis" name="artikel_penulis" value="{{ $artikel->artikel_penulis }}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_email">Email</label>

                  <div class="col-sm-10">
                    <input class="form-control" id="pemakalah_email" name="pemakalah_email" type="email" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_telp">No. Telp/Hp</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="pemakalah_telp" name="pemakalah_telp" type="text" placeholder="No . Telp/Hp">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_nama_rek">Nama Pemilik Rek</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="pemakalah_nama_rek" name="pemakalah_nama_rek" type="text" placeholder="Nama Pemilik Rekening Bank">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_bank">Bank Pengirim</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pemakalah_bank">
                        <option value="BNI">BNI (Bank Negara Indonesia)</option>
                        <option value="BRI">BRI (Bank Rakyat Indonesia)</option>
                        <option value="BCA">BCA (Bank Cicil Anugerah)</option>
                        <option value="BTN">BTN (Bank Tunjangan Negara)</option>
                        <option value="LAINNYA">LAINNYA</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_bukti">Unggah Bukti</label>
                  <div class="col-sm-10">
                    <input id="pemakalah_bukti" name="pemakalah_bukti" type="file">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pemakalah_pesan">Pesan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="pemakalah_pesan" placeholder="Opsional ..."></textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ asset('/anggota/artikel') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Konfirmasi</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    @endif



@endsection