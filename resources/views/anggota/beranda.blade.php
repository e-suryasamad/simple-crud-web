@extends('template.pengunjung')

@section('title')
	Senapati 2018
@endsection


@section('judulmenu')
	Konfirmasi & Pendaftaran
@endsection

@section('statusAktif')
  class="active"
@endsection



@section('maincontent')

  @if($act=="viewBeranda")
  	
        <!--
        Home Slider
        ==================================== -->
    
    <section id="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->        
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          
          <!-- single slide -->
          <div class="item active" style="background-image: url({{asset('user/img/banner.jpg')}});">
            <div class="carousel-caption">
              <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">SENAPATI<span> 2018</span>!</h2>
              <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">Seminar</span> Nasional Pendidikan Teknik Informatika.</h3>
        
              <div class="row" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <a href="{{url('/anggota/artikel')}}"><button class="btn btn-block btn-success btn-lg" type="button">Konfirmasi Pembayaran Pemakalah</button></a>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-block btn-primary btn-lg" type="button">Registrasi Peserta Non Pemakalah</button>
                  </div>
                </div>
              </div>
  

              <ul class="social-links text-center">
                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- end single slide -->
          
          <!-- single slide -->
          <div class="item active" style="background-image: url({{asset('user/img/banner.jpg')}});">
            <div class="carousel-caption">
              <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">SENAPATI<span> 2018</span>!</h2>
              <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/Seminar</span> Nasional Pendidikan Teknik Informatika.</h3>
        
              <div class="row" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <a href="{{url('/anggota/artikel')}}"><button class="btn btn-block btn-success btn-lg" type="button">Konfirmasi Pembayaran Pemakalah</button></a>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-block btn-primary btn-lg" type="button">Registrasi Peserta Non Pemakalah</button>
                  </div>
                </div>
              </div>
  

              <ul class="social-links text-center">
                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- end single slide -->
          
        </div>
        <!-- End Wrapper for slides -->
        
      </div>
    </section>
    
        <!--
        End Home SliderEnd
        ==================================== -->
    
        <!--
        Features
        ==================================== -->
    
    <section id="features" class="features">
      <div class="container">
        <div class="row">
        
          <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h2>Tentang Senapati 2018</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <!-- service item -->
          <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-github fa-2x"></i>
              </div>
              
              <div class="service-desc">
                <h3>TIK</h3>
                <p>
                Teknologi Informasi dan Komunikasi (TIK) berperan penting dalam proses menuju cita-cita menjadi negara yang maju dan sejahtera. Optimalisasi penguasaan, pengembangan, dan penggunaan TIK menjadi salah satu kunci menuju masa depan yang lebih baik. Penggunaan teknologi informasi dan komunikasi di bidang pendidikan saat ini berkembang sangat pesat sehingga perlu diadakan sebuah kegiatan yang dapat dijadikan ajang pertemuan ilmiah, sarana diskusi, dan publikasi hasil penelitian maupun penerapat teknologi terkini khususnya di bidang pendidikan teknik informatika.
                </p>
              </div>
            </div>
          </div>
          <!-- end service item -->
          
          <!-- service item -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-pencil fa-2x"></i>
              </div>
              
              <div class="service-desc">
                <h3>SENAPATI</h3>
                <p>
                Seminar Nasional Pendidikan Teknik Informatika (Senapati) 2018 adalah seminar nasional tahunan di bidang Pendidikan dan Teknik Informatika yang diselenggarakan oleh Jurusan Pendidikan Teknik Informatika, Universitas Pendidikan Ganesha, Singaraja, Bali.Senapati 2018 adalah kelanjutan dari seminar yang dilakukan pada tahun 2010,2011,2012, 2013, 2014, 2015, 2016, dan 2017 lalu. Tema seminar tahun ini adalah "Pendidikan TIK: Peluang dan Tantangannya di Era Revolusi Industri 4.0". Kami kembali mengundang para akademisi, praktisi, mahasiswa dan umum untuk menulis makalah dan berpartisipasi pada Senapati 2017. 
                </p>
              </div>
            </div>
          </div>
          <!-- end service item -->
          
          <!-- service item -->
          <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-bullhorn fa-2x"></i>
              </div>
              
              <div class="service-desc">
                <h3>Hak Cipta</h3>
                <p>
                *) Semua artikel dalam Prosiding SENAPATI 2018 akan diberikan Digital Object Identifier (DOI) dan terindeks GOOGLE SCHOLAR dan CROSSREF. Artikel terpilih akan dipublikasikan di Jurnal Nasional Pendidikan Teknik Informatika (JANAPATI) E-ISSN : 2548-4265 dan P-ISSN : 2089-8673.
                </p>
              </div>
            </div>
          </div>
          <!-- end service item -->
            
        </div>
      </div>
    </section>
    
        <!--
        End Features
        ==================================== -->
    
    
        <!--
        Our Works
        ==================================== -->
    
    <section id="works" class="works clearfix">
      <div class="container">
        <div class="row">
        
          <div class="sec-title text-center">
            <h2>GALERI SENAPATI</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>
          
          <div class="sec-sub-title text-center">
            <p>
            Berikut Merupakan Galeri photo Senapati dari Tahun ke tahun
            </p>
          </div>
          
          <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
            <ul class="text-center">
              <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
              <li><a href="javascript:;" data-filter=".branding" class="filter">2017</a></li>
              <li><a href="javascript:;" data-filter=".web" class="filter">2016</a></li>
              <li><a href="javascript:;" data-filter=".logo-design" class="filter">2015</a></li>
              <li><a href="javascript:;" data-filter=".photography" class="filter">2014</a></li>
            </ul>
          </div>
          
        </div>
      </div>
      
      <div class="project-wrapper">
      
        <figure class="mix work-item branding">
          <img src="{{asset('user/img/works/item-1.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item web">
          <img src="{{asset('user/img/works/item-2.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item logo-design">
          <img src="{{asset('user/img/works/item-3.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item photography">
          <img src="{{asset('user/img/works/item-4.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
      
        <figure class="mix work-item branding">
          <img src="{{asset('user/img/works/item-5.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item web">
          <img src="{{asset('user/img/works/item-6.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item logo-design">
          <img src="{{asset('user/img/works/item-7.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item photography">
          <img src="{{asset('user/img/works/item-8.jpg')}}" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
      </div>
    

    </section>
    
        <!--
        End Our Works
        ==================================== -->
    
        <!--
        Meet Our Team
        ==================================== -->    
    
    <section id="team" class="team">
      <div class="container">
        <div class="row">
    
          <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>PEMBICARA UTAMA</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>
          
          <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p></p>
          </div>

          <!-- single member -->
          <figure class="team-member col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
            <div class="member-thumb">
              <img src="{{asset('user/img/team/member-1.png')}}" alt="Team Member" class="img-responsive">
              <figcaption class="overlay">
                <h5>voluptatem quia voluptas </h5>
                <p>sit aspernatur aut odit aut fugit,</p>
                <ul class="social-links text-center">
                  <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                </ul>
              </figcaption>
            </div>
            <h4>John Filmr Doe</h4>
            <span>Managing Director</span>
          </figure>
          <!-- end single member -->
          
          <!-- single member -->
          <figure class="team-member col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="member-thumb">
              <img src="{{asset('user/img/team/member-2.png')}}" alt="Team Member" class="img-responsive">
              <figcaption class="overlay">
                <h5>voluptatem quia voluptas </h5>
                <p>sit aspernatur aut odit aut fugit,</p>
                <ul class="social-links text-center">
                  <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                </ul>
              </figcaption>
            </div>
            <h4>Martin Matrone</h4>
            <span>Lead Developer</span>
          </figure>
          <!-- end single member -->
          
          <!-- single member -->
          <figure class="team-member col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="member-thumb">
              <center>
              <img src="{{asset('user/img/team/member-3.png')}}" alt="Team Member" class="img-responsive">
              </center>
              <figcaption class="overlay">
                <h5>voluptatem quia voluptas </h5>
                <p>sit aspernatur aut odit aut fugit,</p>
                <ul class="social-links text-center">
                  <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                  <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                </ul>
              </figcaption>
            </div>
            <h4>Steve Flaulkin</h4>
            <span>Sr. UI Designer</span>
          </figure>
          <!-- end single member -->
          
        </div>
      </div>
    </section>
    
        <!--
        End Meet Our Team
        ==================================== -->
    
    <!--
        Some fun facts
        ==================================== -->    
    
    <section id="facts" class="facts">
      <div class="parallax-overlay">
        <div class="container">
          <div class="row number-counters">
            
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
              <h2>Some Fun Facts</h2>
              <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>
            
            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
              <div class="counters-item">
                <i class="fa fa-users fa-3x"></i>
                <strong data-to="200">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>Jumlah Peserta</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
              <div class="counters-item">
                <i class="fa fa-graduation-cap fa-3x"></i>
                <strong data-to="3">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>Pembicara Utama</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
              <div class="counters-item">
                <i class="fa fa-calendar fa-3x"></i>
                <strong data-to="8">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p> September 2018 </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
              <div class="counters-item">
                <i class="fa fa-gears fa-3x"></i>
                <strong data-to="2018">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>SENAPATI</p>
              </div>
            </div>
            <!-- end first count item -->
        
          </div>
        </div>
      </div>
    </section>
    
        <!--
        End Some fun facts
        ==================================== -->
        <!--
        Contact Us
        ==================================== -->    
    
    <section id="contact" class="contact">
      <div class="container">
        <div class="row mb50">
        
          <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
            <h2>Ajukan Pertanyaan</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>
          
          <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
            <p>Jika Masih ada yang perlu diketahui lebih lanjut silahkan ajukan pertanyaan anda lewat kolom dibawah ini</p>
          </div>
          
          <!-- contact address -->
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
            <div class="contact-address">
              <h3>Butuh Info Lanjut, Kirimi kami Pertanyaan!</h3>
              <p>2345 Setwant natrer, 1234,</p>
              <p>Washington. United States.</p>
              <p>(401) 1234 567</p>
            </div>
          </div>
          <!-- end contact address -->
          
          <!-- contact form -->
          <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="contact-form">
              <h3>Say hello!</h3>
              <form action="#" id="contact-form">
                <div class="input-group name-email">
                  <div class="input-field">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                  </div>
                  <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                  </div>
                </div>
                <div class="input-group">
                  <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                </div>
                <div class="input-group">
                  <input type="submit" id="form-submit" class="pull-right" value="Send message">
                </div>
              </form>
            </div>
          </div>
          <!-- end contact form -->
          
          <!-- footer social links -->
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <ul class="footer-social">
              <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
              <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
              <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
              <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
            </ul>
          </div>
          <!-- end footer social links -->
          
        </div>
      </div>
      
      <!-- Google map -->
      <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
      <!-- End Google map -->
      
    </section>
    
        <!--
        End Contact Us
        ==================================== -->
  @endif

  @if($act=="viewArtikel")
  <section id="features" class="features">
      <div class="container">
        <div class="row">
        
          <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h2>Artikel Senapati 2018</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <!-- Kotak Pencarian  -->
          <div class="col-md-12 wow fadeInLeft" data-wow-duration="500ms">
            <form class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" type="email" placeholder="Cari Artikel Berdasarkan Id">
                  </div>
                  <button class="col-sm-2 btn btn-info pull-right" type="submit">Cari</button>
                </div>
            </form>   
          </div>
          <!-- End Kotak Pencarian -->


          
          <!-- Hasil Pencarian -->
          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
              
            </div>
          </div>
          <!-- end Hasil Pencarian -->
          
            
        </div>
      </div>
    </section>
  @endif

@endsection