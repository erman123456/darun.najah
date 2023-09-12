@extends('layouts.app',
[
'pageTitle'=>'Idealisme',
'mainPage'=> 'Idealisme',
]
)

@section('css')
  <!-- Custom CSS -->
  {{-- <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet"> --}}
  <style>
    td {
      padding: 5px;
    }
  </style>
@endsection

@section('content')
<section class="wrapper bg-light mb-20">
  <div class="container py-14 py-md-18">
    <div class="row gx-lg-8 gx-xl-12">
      <div class="col-lg-10">
        <h3 class="h2 mb-4">Idealisme Program </h3>
        <div class="row gy-3">
          <div class="col-xl-12">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Sebagai organ pelaku dan  pemerhati pendidikan dasar islam .</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sebagai bentuk kepedulian terdahap pentingnya penanaman idealisme islam dalam bekal pendidikan anak usia dini.</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sebagai sarana internalisasi nilai-nilai islam pada pendidikan anak usia dini.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Sebagai wadah bagi masyarakat untuk menyalurkan infaq sodaqah dan zakat mal.</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sebagai upaya pemberdayaan pengentasan masalah pendidikan anak usia dini.</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sebagai bentuk tanggungjawab terhadap sesama agar terbuka peluang bagi anak kurang mampu untuk dapat bersama anak lainnya manapak ke depan dengan bekal dasar pendidikan keislaman yang memadai.</span>
              </li>
            </ul>
          </div>
        </div>
        <!--/.row -->
      </div>
    </div>
    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mt-10" data-image-src="./assets/img/photos/bg16.png" >
      <div class="card-body p-10 p-xl-2">
        <div class="row text-center">
          <div class="col-xl-11 col-xxl-9 mx-auto">
            <h3 class="display-3 mb-8 px-lg-8 text-white mt-5">Amahah, Profesional dan Transparan.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection

@section('js')

    <!--This page JavaScript -->
    {{-- <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script> --}}
    
@endsection
