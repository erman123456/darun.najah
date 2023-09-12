@extends('layouts.app',
[
'pageTitle'=>'Tujuan Sasaran',
'mainPage'=> 'Tujuan Sasaran',
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
        <h3 class="h2 mb-4">Tujuan dan Sasaran</h3>
        <div class="row gy-3">
          <div class="col-xl-12">
            
           
            
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Darun najah Sebagai organ pelaku dan  pemerhati pendidikan dasar islam berupaya mewujudkan rasa kepedulian masyarakat, para orangtua terdahap pentingnya penanaman idealisme dan nilai-nilai islam dalam bekal pendidikan anak usia dini.</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sebagai bentuk tanggungjawab masyarakat terhadap sesama guna membuka peluang bagi anak kurang mampu untuk dapat bersama anak lainnya manapak ke depan dengan bekal dasar pendidikan keislaman yang memadai.</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span> “Darun Najah Peduli pendidikan Anak” melalui “Program Orang Tua Asuh” hadir ditengah masyarakat sebagai wadah untuk menyalurkan infaq sodaqah dan zakat mal dengan peruntukan pendanaan dan pembiayaan anak-anak usia dini yang tergolong anak dari orang tua yang kurang mampu atau duafa. 
                </span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Lingkup wilayah penyaluran mulai  lingkungan sekitar sekolah desa tanjunggading hingga seluruh kecamatan seisuka hingga se kabupaten Batubara, dan tak lepas kemungkinan go publik ke tingkat nasional. Insya Allah.</span>
              </li>
            </ul>
          </div>
        </div>
        <!--/.row -->
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection

@section('js')

    <!--This page JavaScript -->
    {{-- <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script> --}}
    
@endsection
