@extends('layouts.app',
[
'pageTitle'=>'Legalitas Program',
'mainPage'=> 'Legalitas Program',
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
  <div class="container py-14 py-md-15">
    <div class="row gx-lg-12 gx-xl-12">
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card lift">
          <div class="p-3 p-md-5 p-lg-5">
            <h2 class="mb-3 text-start">Register Baru dan Donasi</h2>
            <form class="text-start mb-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="Nama Donatur" id="donaturName">
                  <span class="password-toggle">
                    <figure class="itooltip itooltip-warning hover-scale rounded" title='<h5 class="mb-1">Warning!!!</h5>
                      <p class="mb-0">Mohon di isi Nama sesuai KTP,  
                      kami menjamin Kerahasiaan data pribadi anda, <br>
                      Jika anda tidak menginginkan nama anda terpublish,<br>
                      Isi Publish Name  dengan nama pilihan yang disediakan<br>
                      Atau anda dapat menetapkannya sendiri. 
                      </p>'>
                      <i class="uil uil-question-circle"></i>
                    </figure>
                  </span>
                <label for="donaturName">Nama Donatur</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="Publish Name" id="publishName">
                <label for="publishName">Nama Samaran</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="No. HP/WA" id="noHp">
                <label for="noHp">No. HP/WA</label>
              </div>
              <div class="row p-5">
                <div class="col-6 form-check">
                  <input class="form-check-input" type="radio" name="jenis_donasi" id="jenisDonasi1" value="1" checked>
                  <label class="form-check-label" for="jenisDonasi1"> Infaq Sodaqah </label>
                </div>
                <div class="col-6 form-check">
                  <input class="form-check-input" type="radio" name="jenis_donasi" id="jenisDonasi2" value="2">
                  <label class="form-check-label" for="jenisDonasi2"> Zakat Mal </label>
                </div>
              </div>
              <div class="form-select-wrapper mb-4">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Jenis Bantuan</option>
                  <option value="1">Lepas Tak Mengikat</option>
                  <option value="2">Rutin Selama 3 Tahun</option>
                  <option value="3">Penuh Atas Anak</option>
                </select>
              </div>
              <div class="form-floating password-field mb-4">
                <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                <label for="loginPassword">Password</label>
              </div>
              <div class="form-floating password-field mb-4">
                <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                <label for="loginPasswordConfirm">Confirm Password</label>
              </div>
              <a class="btn gradient-3 rounded-pill btn-login w-50 mb-2">You're Registered as</a>
            </form>
            <!-- /form -->
          </div>
          <!--/div -->
        </div>
        <!--/.card -->
      </div>
      <!--/.column -->

      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card lift">
          <div class="p-3 p-md-5 p-lg-5">
            <h2 class="mb-3 text-start">Register Berhasil</h2>
            <div class="card lift mb-4">
              <div class="p-3">
                <p class="mt-3">
                  Pengiriman BSI Rek_No : 01234344323 An. Orang Tua Asuh
                </p>
              </div>
            </div>
            <div class="row mb-4 text-center">
              <div class="col-6">
                <a href="https://api.whatsapp.com/send?phone=6281268137084">
                <div class="card lift">
                  <div class="p-2">
                    <p class="mt-2">
                      Struck Dikirim Via WhatsApp (WA)
                    </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-6">
                <div class="card lift">
                  <div class="p-2">
                    <p class="mt-2">
                      Segera Kami Verifikasi
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card lift mb-4">
              <div class="p-2">
                <figure class="hover-scale rounded cursor-dark">
                  <a href="./assets/img/success.png" data-glightbox="" data-gallery="post">
                    <img src="./assets/img/success.png" alt="" />
                  </a>
                </figure>
              </div>
            </div>
          </div>
          <!--/div -->
        </div>
        <!--/.card -->
      </div>
      <!--/.column -->
    </div>
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
